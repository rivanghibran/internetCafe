<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisPcTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_pcs', function (Blueprint $table) {
            $table->id(); 
            $table->string('jenis'); 
            $table->float('harga');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_pcs');
    }
}