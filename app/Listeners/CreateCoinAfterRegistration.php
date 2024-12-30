<?php

namespace App\Listeners;

use App\Models\Coin;
use Illuminate\Auth\Events\Registered;

class CreateCoinAfterRegistration
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // Dapatkan user yang baru terdaftar
        $user = $event->user;

        // Buat coin baru untuk user dengan jumlah awal, misalnya 100 coin
        Coin::create([
            'user_id' => $user->id,
            'coin' => 100, // atau nilai default yang diinginkan
        ]);
    }
}
