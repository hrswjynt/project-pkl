<?php

use App\Models\Merk;
use App\Models\Seri;
use App\Models\Jenis;
use App\Models\peralatan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // $table->foreignIdFor(peralatan::class);
            $table->foreignIdFor(Jenis::class);
            $table->foreignIdFor(Merk::class);
            $table->foreignIdFor(Seri::class);
            $table->string('kode_barang', 50);
            $table->integer('tahun_pengadaan')->nullable();
            $table->string('divisi', 50);
            $table->text('info')->nullable();
            $table->timestamps();
            // $table->foreign('peralatans_id')->references('id')->on('peralatans');
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
