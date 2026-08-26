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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string ('first_name');   
            $table->string ('last_name'); 
            $table->string ('email');
            $table->string ('gender');
            $table->date ('birthday');
            $table->string('program');
            $table->integer('yr_level');
            $table->integer('age')->nullable();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
