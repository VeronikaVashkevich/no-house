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
        Schema::create('mixers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('purpose', 100);
            $table->string('description', 2500);
            $table->string('image', 400);
            $table->string('color', 200);
            $table->string('material', 200);
            $table->string('mechanism', 200);
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
        Schema::dropIfExists('mixers');
    }
};
