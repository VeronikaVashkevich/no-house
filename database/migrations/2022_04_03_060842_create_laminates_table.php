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
        Schema::create('laminates', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('description', 2500);
            $table->float('price');
            $table->string('image', 400);
            $table->string('color', 200);
            $table->string('abrasionResistanceClass', 200);
            $table->string('loadClass', 200);
            $table->boolean('vShape');
            $table->string('lockClass', 200);
            $table->string('corkLayer', 200);
            $table->integer('width');
            $table->integer('length');
            $table->integer('height');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laminates');
    }
};
