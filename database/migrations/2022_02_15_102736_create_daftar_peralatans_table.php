<?php

use App\Models\Peralatan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPeralatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_peralatans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Peralatan::class);
            $table->string('kode_barang', 50);
            $table->integer('tahun_pengadaan')->nullable();
            $table->string('divisi', 50);
            $table->text('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_peralatans');
    }
}
