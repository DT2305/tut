<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_id')->nullable()->default(1)
                ->constrained('faculties')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('name');
            $table->integer('student_amount')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('year_start')->nullable();
            $table->string('course_code')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
