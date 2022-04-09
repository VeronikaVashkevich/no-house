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
        Schema::table('baths', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('doors', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('laminates', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('linoleums', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('mixers', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('paints', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('parquets', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('pvc_panels', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('sinks', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('tiles', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('varnishes', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });

        Schema::table('wallpapers', function (Blueprint $table) {
            $table->string('routeName', 50)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
