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
            $table->string('gender');
            $table->string('phone_number');
            $table->string('dob');
            $table->string('alt_phn_number');
            $table->string('profile_img');
            $table->string('employment_status');
            $table->string('annual_income');
            $table->string('nature_of_occupation');
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('employer_phone');
            $table->string('mean_of_identity');
            $table->string('identity_number');
            $table->string('id_issue_date');
            $table->string('id_expiry_date');
            $table->string('marital_status');
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
