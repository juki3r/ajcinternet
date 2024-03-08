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
        Schema::create('luyo_poblacions', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('address')->default('Luyo Poblacion, Carles');
            $table->string('contact')->nullable();;
            $table->integer('plan');
            $table->integer('duedate');
            $table->integer('january')->nullable();
            $table->integer('febuary')->nullable();
            $table->integer('march')->nullable();
            $table->integer('april')->nullable();
            $table->integer('may')->nullable();
            $table->integer('june')->nullable();
            $table->integer('july')->nullable();
            $table->integer('august')->nullable();
            $table->integer('september')->nullable();
            $table->integer('october')->nullable();
            $table->integer('november')->nullable();
            $table->integer('december')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luyo_poblacions');
    }
};
