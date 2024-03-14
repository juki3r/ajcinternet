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
        Schema::table('isla_surs', function (Blueprint $table) {
            $table->string('january')->nullable();
            $table->string('febuary')->nullable();
            $table->string('march')->nullable();
            $table->string('april')->nullable();
            $table->string('may')->nullable();
            $table->string('june')->nullable();
            $table->string('july')->nullable();
            $table->string('august')->nullable();
            $table->string('september')->nullable();
            $table->string('october')->nullable();
            $table->string('november')->nullable();
            $table->string('december')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('isla_surs', function (Blueprint $table) {
            $table->dropColumn('january');
            $table->dropColumn('febuary');
            $table->dropColumn('march');
            $table->dropColumn('april');
            $table->dropColumn('may');
            $table->dropColumn('june');
            $table->dropColumn('july');
            $table->dropColumn('august');
            $table->dropColumn('september');
            $table->dropColumn('october');
            $table->dropColumn('november');
            $table->dropColumn('december');
        });
    }
};
