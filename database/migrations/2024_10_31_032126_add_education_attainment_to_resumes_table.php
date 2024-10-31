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
        Schema::table('resumes', function (Blueprint $table) {
            $table->string('education_attainment')->nullable(); // Adjust type and nullability as needed
        });
    }
    
    public function down()
    {
        Schema::table('resumes', function (Blueprint $table) {
            $table->dropColumn('education_attainment');
        });
    }
    
};
