<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainAreaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_substances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->timestamps();
        });
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('active_substance_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->string('name');
            $table->integer('price')->comment('in cents');
            $table->timestamps();

            $table->foreign('active_substance_id')
                ->references('id')
                ->on('active_substances')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
        Schema::dropIfExists('manufacturers');
        Schema::dropIfExists('active_substances');
    }
}
