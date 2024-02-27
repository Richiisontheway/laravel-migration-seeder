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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('factory',64);
            $table->string('departure_station',64);
            $table->string('arrival_station',64);;
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('train_code')->unsigned();
            $table->smallInteger('number_of_coaches')->unsigned();
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
