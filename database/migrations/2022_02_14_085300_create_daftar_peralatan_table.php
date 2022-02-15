<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPeralatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_peralatan', function (Blueprint $table) {
            $table->id();
            // $table->bugInteger('peralatan_id')->unsigned();
            $table->foreignId('peralatan_id')->constrained('peralatan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('kode_barang', 50);
            $table->integer('tahun_pengadaan')->nullable();
            $table->string('divisi', 50);
            $table->text('info')->nullabele();
            $table->timestamps();
        });

        // Schema::table('daftar_peralatan', function (Blueprint $table) {         
        //     $table->foreign('peralatan_id')->references('id')->on('peralatan')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_peralatan');
    }
}
