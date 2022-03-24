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
        Schema::create('doors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('type', 100);
            $table->float('price');
            $table->string('description', 4000);
            $table->boolean('glass');
            $table->string('color', 100);
            $table->string('construction', 100);
            $table->string('doorTrim', 100);
            $table->integer('height');
            $table->integer('width');
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
        Schema::dropIfExists('doors');
    }
};
