<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PC;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {

        if (Auth::check()) {
            $user = Auth::user();
            $coins = $user->coins ? $user->coins->amount : 0;
            $username = Auth::user()->name;
            return view('user.dashboard',['title' => 'Dashboard', 'username' => $username,'coins'=>$coins,]);
        }

        return view('guest.home', ['title' => 'Home Page']);
    }

    public function about()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $coins = $user->coins ? $user->coins->amount : 0;
            $username = Auth::user()->name;
            $userId = Auth::user()->id;
            $transactions = Transaction::with('pc')
                ->where('user_id', $userId)
                ->get();
        
            return view('user.about', ['title' => 'About', 'username' => $username,'coins'=>$coins, 'transactions'=> $transactions ]);
        }

        return view('guest.about', ['title' => 'About']);
    }

    public function promo()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $coins = $user->coins ? $user->coins->amount : 0;
            $username = Auth::user()->name;
            return view('user.promo', compact('coins'), ['title' => 'Promo', 'username' => $username]);
        }

        return view('guest.promo', ['title' => 'Promo']);
    }

    public function contact()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $coins = $user->coins ? $user->coins->amount : 0;
            $username = Auth::user()->name;
            return view('user.contact', compact('coins'), ['title' => 'Contact', 'username' => $username]);
        }

        return view('guest.contact', ['title' => 'Contact']);
    }

    public function booking()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $coins = $user->coins ? $user->coins->amount : 0;
            $username = Auth::user()->name;
            return view('user.booking', compact('coins'), ['title' => 'Booking', 'username' => $username]);
        }

        return view('guest.home', ['title' => 'Home']);
    }

    public function createBooking(Request $request)
    {
        $request->validate([
            'nama_pc' => 'required|string|max:255|exists:pcs,nama_pc',  
            'waktu' => 'required|date_format:Y-m-d\TH:i',  
            'jam' => 'required|integer|min:1',  
        ]);
    
        $pc = PC::where('nama_pc', $request->nama_pc)->firstOrFail();
        $jam = (int) $request->jam; 
        $waktuBerhenti = Carbon::parse($request->waktu)->addHours($jam);
    
        $conflictingTransaction = Transaction::where('pc_id', $pc->id)
            ->where(function ($query) use ($request, $waktuBerhenti) {
                $query->whereBetween('waktu', [$request->waktu, $waktuBerhenti])
                      ->orWhereBetween('waktu_berhenti', [$request->waktu, $waktuBerhenti])
                      ->orWhere(function ($query) use ($request, $waktuBerhenti) {
                          $query->where('waktu', '<=', $request->waktu)
                                ->where('waktu_berhenti', '>=', $waktuBerhenti);
                      });
            })
            ->exists();
    
        if ($conflictingTransaction) {
            return redirect()->back()->withErrors(['error' => 'PC sudah dibooking pada rentang waktu tersebut.']);
        }
    
        $hargaPerJam = $pc->harga; 
        $total = $jam * $hargaPerJam;
    
        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'pc_id' => $pc->id,
            'waktu' => $request->waktu,
            'jam' => $jam,
            'waktu_berhenti' => $waktuBerhenti,
            'total' => $total,
        ]);
    
        return redirect()->route('user.dashboard')->with('success', 'Booking berhasil.');
    }
}
