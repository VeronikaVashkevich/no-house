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
        Schema::create('linoleum', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('description', 2500);
            $table->string('image', 400);
            $table->string('color', 200);
            $table->string('material', 200);
            $table->string('appointment', 200);
            $table->string('base', 200);
            $table->integer('length');
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linoleum');
    }
};
