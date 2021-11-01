<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKanwilName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ejlog_report_row', function (Blueprint $table) {
            $table->string('kanwil_name')->after('kanwil');
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
            $table->dropColumn('kanwil');
        });
    }
}
