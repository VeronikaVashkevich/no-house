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
        Schema::create('paints', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('description', 2500);
            $table->string('image', 400);
            $table->string('color', 100);
            $table->string('type', 50);
            $table->string('appointment', 400);
            $table->string('material', 400);
            $table->float('weight');
            $table->float('price');
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
        Schema::dropIfExists('paints');
    }
};
