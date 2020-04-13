<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('email',100)->unique();
            $table->date('birthday');
            $table->string('identify_number')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();

//            $table->integer('math')->nullable()->default(0);
//            $table->integer('physic')->nullable()->default(0);
//            $table->integer('chemistry')->nullable()->default(0);
//            $table->integer('biology')->nullable()->default(0);
//            $table->integer('english')->nullable()->default(0);
//            $table->integer('literature')->nullable()->default(0);


            $table->string('major_1')->nullable();
            $table->string('major_2')->nullable();
            $table->string('major_3')->nullable();
            $table->integer('point_1')->nullable()->default(0);
            $table->integer('point_2')->nullable()->default(0);
            $table->integer('point_3')->nullable()->default(0);
            $table->string('point_img')->nullable();
            $table->string('priority')->nullable();
            $table->string('area')->nullable();

//            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
