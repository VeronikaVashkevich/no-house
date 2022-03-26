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
        Schema::create('tiles', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100);
            $table->float('price');
            $table->string('description', 2500);
            $table->string('image', 400);
            $table->string('color', 100);
            $table->string('form', 100);
            $table->boolean('frost_resistance');
            $table->string('wear_class', 50);
            $table->string('purpose', 200);
            $table->integer('width');
            $table->integer('height');
            $table->integer('depth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiles');
    }
};
