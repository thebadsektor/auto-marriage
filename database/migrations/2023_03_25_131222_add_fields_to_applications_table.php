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
        Schema::table('applications', function (Blueprint $table) {
            $table->date('sworn_date')->nullable();
            $table->string('sworn_place')->nullable();
            $table->string('ctc_no')->nullable();
            $table->date('ctc_date')->nullable();
            $table->string('ctc_place')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('sworn_date');
            $table->dropColumn('sworn_place');
            $table->dropColumn('ctc_no');
            $table->dropColumn('ctc_date');
            $table->dropColumn('ctc_place');
        });
    }
};
