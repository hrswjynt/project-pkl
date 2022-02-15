<?php

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
            // $table->bugInteger('peralatan_id')->unsigned();
            // $table->foreignId('peralatan_id');
            $table->foreignIdFor(peralatan::class);
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
