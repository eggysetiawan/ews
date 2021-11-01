<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EjlogReportRowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejlog_report_row', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('index')->nullable();
            $table->string('dbname')->nullable();
            $table->string('kanwil')->nullable();
            $table->string('tid')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('branch2')->nullable();
            $table->string('pengelola')->nullable();
            $table->string('brand')->nullable();
            $table->string('type')->nullable();
            $table->string('row_ej')->nullable();
            $table->string('row_ej_table')->nullable();
            $table->string('last_index_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ejlog_report_row', function (Blueprint $table) {
            //
        });
    }
}
