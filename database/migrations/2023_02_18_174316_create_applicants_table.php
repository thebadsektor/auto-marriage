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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('birthdate');
            $table->string('sex');
            $table->string('citizenship');
            $table->string('house_no');
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('religion');
            $table->string('civil_status');
            $table->string('dissolved_reason');
            $table->string('dissolved_city');
            $table->string('dissolved_province');
            $table->string('dissolved_country');
            $table->date('dissolved_date');
            $table->string('relationship_degree');
            $table->string('father_firstname');
            $table->string('father_middlename');
            $table->string('father_lastname');
            $table->string('father_citizenship');
            $table->string('father_house_no');
            $table->string('father_street');
            $table->string('father_barangay');
            $table->string('father_city');
            $table->string('father_province');
            $table->string('father_country');
            $table->string('mother_firstname');
            $table->string('mother_middlename');
            $table->string('mother_lastname');
            $table->string('mother_citizenship');
            $table->string('mother_house_no');
            $table->string('mother_street');
            $table->string('mother_barangay');
            $table->string('mother_city');
            $table->string('mother_province');
            $table->string('mother_country');
            $table->string('consenting_person');
            $table->string('consenting_person_relationship');
            $table->string('consenting_person_citizenship');
            $table->string('consenting_person_house_no');
            $table->string('consenting_person_street');
            $table->string('consenting_person_barangay');
            $table->string('consenting_person_city');
            $table->string('consenting_person_province');
            $table->string('consenting_person_country');
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
        Schema::dropIfExists('applicants');
    }
};
