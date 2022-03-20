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
        Schema::create('wallpapers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('type', 100);
            $table->string('texture', 100);
            $table->string('color', 100);
            $table->boolean('is_3d');
            $table->string('basis', 100);
            $table->float('price');
            $table->string('description', 2500);
            $table->string('image', 400);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallpapers');
    }
};
