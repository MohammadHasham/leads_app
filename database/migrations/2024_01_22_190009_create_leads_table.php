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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name');
            $table->string('title')->nullable();
            $table->string('industry_domain')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('mobile_no')->nullable();
            $table->string('person_linkedin')->nullable();
            $table->string('domain_linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
