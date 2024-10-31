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
            $table->text('hobbies')->nullable(); // For hobbies
            $table->string('address')->nullable(); // For address
            $table->string('education_attainment')->nullable(); // For education attainment
        });
    }
    
    public function down()
    {
        Schema::table('resumes', function (Blueprint $table) {
            $table->dropColumn(['hobbies', 'address', 'education_attainment']);
        });
    }
    
};
