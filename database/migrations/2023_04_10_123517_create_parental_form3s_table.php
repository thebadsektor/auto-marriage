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
        Schema::create('parental_form3s', function (Blueprint $table) {
            $table->id();
            $table->string('municipality')->nullable();
            $table->string('province')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('guardian')->nullable();
            $table->string('name2')->nullable();
            $table->string('address2')->nullable();
            $table->string('name3')->nullable();
            $table->string('name4')->nullable();
            $table->string('address3')->nullable();
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
        Schema::dropIfExists('parental_form3s');
    }
};
