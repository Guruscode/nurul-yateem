<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ophans', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('midname');
            $table->string('lastname');
            $table->enum('gender', ['FEMALE', 'MALE', 'OTHERS']);
            $table->string('dob');
            $table->string('profile_img');
            $table->string('state_of_origin');
            $table->string('local_government');
            $table->enum('school_status', ['ACTIVE','INACTIVE']);
            $table->string('school_name');
            $table->string('school_phone_number');
            $table->string('school_email');
            $table->string('class');
            $table->string('guidian_affidavit');
            $table->string('other_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ophans');
    }
};
