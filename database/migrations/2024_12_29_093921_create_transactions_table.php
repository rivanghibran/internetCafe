<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->foreignId('pc_id')->constrained()->onDelete('cascade'); // Relasi ke tabel pcs
            $table->dateTime('waktu'); // Waktu mulai
            $table->integer('jam'); // Durasi dalam jam
            $table->dateTime('waktu_berhenti')->nullable(); // Waktu berhenti (otomatis)
            $table->decimal('total', 10, 2); // Total harga
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}