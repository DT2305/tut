<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable()->default(1)
                ->constrained('departments')
                ->onDelete('set null')
                ->onUpdate('cascade');
//            $table->string('department_id')->nullable();


            $table->string('name');
            $table->string('description')->nullable();
            $table->string('status')->nullable();

            $table->string('faculty_code')->nullable()->unique();

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
        Schema::dropIfExists('faculties');
    }
}
