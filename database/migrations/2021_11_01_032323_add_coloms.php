<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColoms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ejlog_report_row', function (Blueprint $table) {
            $table->string('version')->after('installation_status');
            $table->string('summary')->after('version')->nullable();
            $table->dateTime('last_update_ej_online')->after('summary');
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
            $table->dropColumn(['version', 'summary', 'last_update_ej_online']);
        });
    }
}
