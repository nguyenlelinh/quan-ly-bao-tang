<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('khai test_catalogue_khai test', function (Blueprint $table) {
    $table->unsignedBigInteger('khai test_catalogue_id');
    $table->unsignedBigInteger('khai test_id');
    $table->foreign('khai test_catalogue_id')->references('id')->on('khai test_catalogues')->onDelete('cascade');
    $table->foreign('khai test_id')->references('id')->on('khai tests')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('khai test_catalogue_khai test');
    }
};