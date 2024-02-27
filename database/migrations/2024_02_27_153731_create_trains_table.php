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
            $table->string('departure station',64)->charset('latin-1');
            $table->string('arrival station',64)->charset('latin-1');
            $table->float('departure time',4,2)->unsigned();
            $table->float('arrival time',4,2)->unsigned();
            $table->integer('train code',10)->unsigned();
            $table->integer('number of coaches',2)->unsigned();
            $table->boolean('in time')->default('true');
            $table->boolean('deleted')->default('true');
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
