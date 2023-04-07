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
        Schema::create('parental_form1s', function (Blueprint $table) {
            $table->id();
            $table->string('municipality')->nullable();
            $table->string('province')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('name_partner')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('sworn_address')->nullable();
            $table->string('name2')->nullable();
            $table->string('name_partner2')->nullable();
            $table->string('publish_month')->nullable();
            $table->string('publish_year')->nullable();
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
        Schema::dropIfExists('parental_form1s');
    }
};
