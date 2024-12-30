<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coin;
use App\Models\Pc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('admin.dashboard', ['title' => 'Dashboard', 'username' => $username]);
        }
        return redirect('/');
    }

    public function controls()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('admin.controls', ['title' => 'Controls', 'username' => $username]);
        }
        return redirect('/admin/controls');
    }

    public function users()
    {   
        if (Auth::check()) {
            $username = Auth::user()->name;
            $users = User::query();
            }
    
            return view('admin.users', [
                'title' => 'Users',
                'username' => $username,
                'users' => User :: filter()->paginate(5) // Ambil data setelah filter
            ]);
        
        return redirect('/admin/users');
    }
    
    public function editUsers($id)
    {
    if (Auth::check()) {
        $username = Auth::user()->name;
        $user = User::findOrFail($id);

        return view('admin.editusers', [
            'title' => 'Edit Users',
            'username' => $username,
            'user' => $user, 
        ]);
    }

    // Redirect ke halaman login jika tidak terautentikasi
    return redirect()->route('login')->with('error', 'You must be logged in to edit users.');
    }

    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            $user = User::findOrFail($id);
            $validatedData = $request->validate([
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('users', 'name')->ignore($id),
                ],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users', 'email')->ignore($id),
                ],
        ]);
        
        $user->update($validatedData);
        return redirect()->route('admin.users', ['username'=>$username, 'search' => $id])
            ->with('success', 'User updated successfully.');
        }
    }

    public function remove($id)
    {
        $user = User::findOrFail($id);
        Coin::where('user_id', $user->id)->delete();
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }

    public function create()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('admin.createuser', ['title' => 'create', 'username' => $username]);
        }
        return redirect('/admin/users/create');
    }

    public function register(Request $request)
    {
        // Validasi input registrasi
        $request->validate([
            'name' => 'required|string|max:255|unique:users,name',  // Validasi name unik
            'email' => 'required|email|unique:users,email',  // Validasi email unik
            'password' => 'required|min:8|confirmed',  // Validasi password
        ]);

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,  // Menggunakan input dari form
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);        

        Coin::create([
            'user_id' => $user->id,
            'name' => $user->name,
        ]);

        return redirect()->route('admin.users')->with('success', 'Registrasi berhasil.');
    }

    public function pc()
    {   
        if (Auth::check()) {
            $username = Auth::user()->name;
            $pcs = Pc::query();
            }
    
            return view('admin.pc', [
                'title' => 'Users',
                'username' => $username,
                'pcs' => Pc :: filter()->paginate(5) // Ambil data setelah filter
            ]);
        
        return redirect('/admin/pc');
    }


    public function editpc($id)
    {
    if (Auth::check()) {
        $username = Auth::user()->name;
        $pc = Pc::findOrFail($id);

        return view('admin.editpc', [
            'title' => 'Edit PC ',
            'username' => $username,
            'pc' => $pc, 
        ]);
    }

    // Redirect ke halaman login jika tidak terautentikasi
    return redirect()->route('login')->with('error', 'You must be logged in to edit pc list.');
    }

    public function updatepc(Request $request, $id)
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            $pc = Pc::findOrFail($id);
            $validatedData = $request->validate([
                'nama_pc' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('pcs', 'nama_pc')->ignore($pc->id),

                ],'jenis_pc' => [
                    'required',
                    'int',
                ],
        ]);
        
        $pc->update($validatedData);
        return redirect()->route('admin.pc', ['username'=>$username, 'search' => $id])
            ->with('success', 'Pc updated successfully.');
        }
    }

    public function deletepc($id)
    {
        $pc = Pc::findOrFail($id);
        $pc->delete();
        return redirect()->route('admin.pc.delete')->with('success', 'Pc deleted successfully');
    }

    public function createpc()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('admin.createpc', ['title' => 'create', 'username' => $username]);
        }
        return redirect('/admin/pc/create');
    }

    public function createpcpost(Request $request)
    {
        $request->validate([
            'nama_pc' => 'required|string|max:255|unique:pcs,nama_pc',  
            'jenis_id' => 'required|integer',  
        ]);

        $pc = Pc::create([
            'nama_pc' => $request->nama_pc,  
            'jenis_id' => $request->jenis_id,
        ]);        

        return redirect()->route('admin.pc')->with('success', 'Add PC berhasil.');
    }

    public function transaksi()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('admin.transaksi', ['title' => 'Transaksi', 'username' => $username]);
        }
        return redirect('/admin/transaksi');
    }

    public function promo()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('admin.promo', ['title' => 'Promo', 'username' => $username]);
        }
        return redirect('/admin/promo');
    }

    public function usercoin()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            $coins = Coin::filter()->paginate(5); // Paginated results
            return view('admin.usercoin', [
                'title' => 'Coin',
                'username' => $username,
                'coins' => $coins // Pass paginated result directly
            ]);
        }
        return redirect('/admin/usercoin');
    }

    public function editCoin($id)
    {
    if (Auth::check()) {
        $username = Auth::user()->name;
        $coin = Coin::findOrFail($id);

        return view('admin.editcoin', [
            'title' => 'Edit Coin',
            'username' => $username,
            'coin' => $coin, 
        ]);
    }
    }

    public function updateCoin(Request $request, $id)
{
    if (Auth::check()) {
        $username = Auth::user()->name;
        $coin = Coin::findOrFail($id);

        $validatedData = $request->validate([
            'action' => 'required|string',
            'amount' => 'nullable|integer',
        ]);

        switch ($validatedData['action']) {
            case 'add':
                $coin->coin += $validatedData['amount'];
                break;
            case 'subtract':
                $coin->coin -= $validatedData['amount'];
                break;
            case 'reset':
                $coin->coin = 0;
                break;
            case 'set-all':
                $coin->coin = $validatedData['amount'];
                break;
            default:
                return redirect()->back()->with('error', 'Invalid action.');
        }

        $coin->save();

        return redirect()->route('admin.usercoin', ['username' => $username, 'search' => $id])
            ->with('success', 'Coin updated successfully.');
    }

        return redirect()->route('login')->with('error', 'You must be logged in to update coins.');
    }

    // public function editusers($id)
    // {
    //     if (Auth::check()) {
    //         $username = Auth::user()->name;
    //         $user = User::findOrFail($id);
    //         return view('admin.editusers', ['title' => 'editusers', 'username' => $username]);
    //     }
    //     return redirect('/admin/users/edit/{$id}');
    // }

    // public function update(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->update($request->all());
    //     return redirect("/admin/users?search={$id}")->with('success', 'User updated successfully');
    // }
    
    // 





    

    // public function manageUsers()
    // {
    //     // Logika untuk manajemen pengguna
    //     return view('admin.manage_users');
    // }

    // public function settings()
    // {
    //     // Logika untuk halaman pengaturan
    //     return view('admin.settings');
    // }
}
