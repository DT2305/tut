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

            /*Hình thức xét tuyển*/
            $table->string('admission form')->nullable();
            /*Ngành ứng tuyển*/
            $table->string('major_1')->nullable();
            $table->string('major_2')->nullable();
            $table->string('major_3')->nullable();
            /*Tổ hợp môn*/
            $table->string('subject_combination_1')->nullable();
            $table->string('subject_combination_2')->nullable();
            $table->string('subject_combination_3')->nullable();
            /*Điểm*/
            $table->integer('point_1')->nullable()->default(0);
            $table->integer('point_2')->nullable()->default(0);
            $table->integer('point_3')->nullable()->default(0);
            /*Ảnh xác thực điểm*/
            $table->string('point_img')->nullable();
            /*Ưu tiên và khu vực ưu tiên*/
            $table->integer('priority')->nullable()->default(0);
            $table->integer('area')->nullable()->default(0);

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
