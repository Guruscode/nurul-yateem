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
        Schema::create('guidians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Foreign key linking to users table
            $table->enum('gender', ['FEMALE', 'MALE', 'OTHERS']);
            $table->string('phone_number');
            $table->string('dob');
            $table->string('alt_phn_number');
            $table->string('profile_img');
            $table->enum('employment_status', ['EMPLOYED', 'UNEMPLOYED', 'SELF_EMPLOYED']);
            $table->string('annual_income');
            $table->string('nature_of_occupation');
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('employer_phone');
            $table->enum('mean_of_identity', ['NATIONAL_ID', 'VOTERS_CARD', 'DRIVER_LICENCE', 'INTERNATIONAL_PASSWORD']);
            $table->string('identity_number');
            $table->string('id_issue_date');
            $table->string('id_expiry_date');
            $table->enum('marital_status', ['SINGLE', 'MARRIED', 'COMPLICATED']);
            $table->string('other_information')->nullable();
            $table->string('affidavit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guidians');
    }
};
