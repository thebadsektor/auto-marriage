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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('registry_no');
            $table->integer('groom_id');
            $table->integer('bride_id');
            $table->string('province');
            $table->string('city');
            $table->string('rec_by');
            $table->date('receipt_date');
            $table->string('license_no');
            $table->date('issuance_date');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
