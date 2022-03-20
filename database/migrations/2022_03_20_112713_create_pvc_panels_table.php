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
        Schema::create('pvc_panels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 400);
            $table->string('description', 2500);
            $table->string('type', 100);
            $table->string('texture', 100);
            $table->string('color', 100);
            $table->string('mounting', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pvc_panels');
    }
};
