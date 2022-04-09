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
            $table->string('routeName', 50)->default('baths')->change();
        });

        Schema::table('doors', function (Blueprint $table) {
            $table->string('routeName', 50)->default('doors')->change();
        });

        Schema::table('laminates', function (Blueprint $table) {
            $table->string('routeName', 50)->default('laminate')->change();
        });

        Schema::table('linoleums', function (Blueprint $table) {
            $table->string('routeName', 50)->default('linoleum')->change();
        });

        Schema::table('mixers', function (Blueprint $table) {
            $table->string('routeName', 50)->default('mixers')->change();
        });

        Schema::table('paints', function (Blueprint $table) {
            $table->string('routeName', 50)->default('paint')->change();
        });

        Schema::table('parquets', function (Blueprint $table) {
            $table->string('routeName', 50)->default('parquet')->change();
        });

        Schema::table('pvc_panels', function (Blueprint $table) {
            $table->string('routeName', 50)->default('pvcPanels')->change();
        });

        Schema::table('sinks', function (Blueprint $table) {
            $table->string('routeName', 50)->default('sinks')->change();
        });

        Schema::table('tiles', function (Blueprint $table) {
            $table->string('routeName', 50)->default('tiles')->change();
        });

        Schema::table('varnishes', function (Blueprint $table) {
            $table->string('routeName', 50)->default('varnishes')->change();
        });

        Schema::table('wallpapers', function (Blueprint $table) {
            $table->string('routeName', 50)->default('wallpapers')->change();
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
