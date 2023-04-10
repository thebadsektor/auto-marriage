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
        Schema::create('parental_form2s', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('name_male')->nullable();
            $table->string('name_female')->nullable();
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
        Schema::dropIfExists('parental_form2s');
    }
};
