<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varnishes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('image', 400);
            $table->string('description', 2500);
            $table->string('basis', 100);
            $table->string('color', 100);
            $table->string('material', 400);
            $table->float('price');
            $table->float('weight');
            $table->integer('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varnishes');
    }
};
