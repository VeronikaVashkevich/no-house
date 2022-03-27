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
        Schema::create('sinks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('type', 400);
            $table->string('description', 400);
            $table->float('price');
            $table->string('image', 400);
            $table->string('color', 200);
            $table->string('form', 100);
            $table->string('material', 200);
            $table->string('montage', 200);
            $table->integer('bowls');
            $table->boolean('wing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinks');
    }
};
