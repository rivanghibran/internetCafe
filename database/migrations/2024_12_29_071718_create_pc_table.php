<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcTable extends Migration
{
    public function up()
    {
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pc');
            $table->foreignId('jenis_id')->constrained('jenis_pcs')->onDelete('cascade'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('pcs');
    }
}