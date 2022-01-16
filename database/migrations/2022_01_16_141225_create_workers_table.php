<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('expertise');
            $table->string('portofolio_link')->nullable();
            $table->string('phone')->unique();
            $table->integer('provinsi_id');
            $table->integer('kota_id');
            $table->longText('about');
            $table->string('experience', 20)->nullable();
            $table->unsignedBigInteger('user_id')->unique();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kota')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
