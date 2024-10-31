<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Reservations', function ( Blueprint $table ){
            $table->increments('id');
            $table->char('uuid',50)->nullable();
            $table->float('Prix_total')->nullable();
            $table->integer('id_annonces')->nullable();
            $table->integer('id_calendrier')->nullable();
            $table->integer('id_user')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Reservations');
    }
};
