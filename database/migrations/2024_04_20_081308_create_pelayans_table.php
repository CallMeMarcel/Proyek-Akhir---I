<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('khotbah');
            $table->string('liturgis');
            $table->string('warta');
            $table->string('persembahan');
            $table->string('organis');
            $table->string('song');
            $table->string('multimedia');
            $table->string('doa');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayans');
    }
};
