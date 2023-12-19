<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\ashyifa;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ashyifa', function (Blueprint $table) {
            $table->string('Nama_Pasukan');
            $table->string('Email');
            $table->string('Asal_Sekolah');
            $table->string('Asal_Daerah');
            $table->string('Nama_Pelatih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ashyifa');
    }
};