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
        Schema::create('parquets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('description', 2500);
            $table->string('image', 400);
            $table->string('type', 200);
            $table->string('tree', 200);
            $table->string('covering', 200);
            $table->float('price');
            $table->integer('length');
            $table->integer('width');
            $table->integer('thickness');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parquets');
    }
};
