<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // run migration
    public function up(): void
    {
        Schema::create('uts', function (Blueprint $table) {
            $table->id('uts_id'); // kolom uts_id jadi primary key
            $table->string('nama_matkul', 100);
            $table->integer('jumlah_sks');
            $table->text('keterangan')->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

   //reverse migration
    public function down(): void
    {
        Schema::dropIfExists('uts');
    }
};
