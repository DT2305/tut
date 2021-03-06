<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->date('birthday')->nullable();

            $table->string('email',100)->unique()->nullable();
            $table->string('phone_number')->unique();

            $table->string('identity_number')->unique();        /*Chứng minh nhân dân*/
            $table->string('id_number_date')->nullable();         /*Ngày cấp CMND*/
            $table->string('id_issue_place')->nullable()->default(1);         /*Nơi cấp CMND*/

            $table->string('avatar')->nullable();
            $table->string('password');

//            $table->integer('math')->nullable()->default(0);
//            $table->integer('physic')->nullable()->default(0);
//            $table->integer('chemistry')->nullable()->default(0);
//            $table->integer('biology')->nullable()->default(0);
//            $table->integer('english')->nullable()->default(0);
//            $table->integer('literature')->nullable()->default(0);

            $table->string('address')->nullable();
            /*Nơi sinh*/
            $table->string('birth_province')->nullable()->default(1);       /*Tỉnh/Thành phố*/
            $table->string('birth_district')->nullable()->default(1);       /*Quận/Huyện*/
            $table->string('birth_ward')->nullable()->default(1);           /*Phường/Xã*/
            /*Hộ khẩu thường trú*/
            $table->string('permanent_address')->nullable();    /*Địa chỉ thường trú*/
            $table->string('permanent_province')->nullable()->default(1);   /*Tỉnh/Thành phố*/
            $table->string('permanent_district')->nullable()->default(1);   /*Quận/Huyện*/
            $table->string('permanent_ward')->nullable()->default(1);       /*Phường/Xã*/

            $table->string('nation')->nullable();               //Dân tộc
            $table->string('religion')->nullable();             //Tôn giáo
            /*Hình thức xét tuyển*/
            $table->string('admission_form')->nullable();
            /*Ngành ứng tuyển*/
//            $table->string('major_1')->nullable()->default(1);
//            $table->string('major_2')->nullable()->default(1);
//            $table->string('major_3')->nullable()->default(1);
            $table->string('major_1')->nullable();
            $table->string('major_2')->nullable();
            $table->string('major_3')->nullable();
            /*Tổ hợp môn*/
            $table->string('subject_combination_1')->nullable();
            $table->string('subject_combination_2')->nullable();
            $table->string('subject_combination_3')->nullable();
            /*Điểm*/
            $table->integer('total_point_1')->nullable()->default(0);
            $table->integer('total_point_2')->nullable()->default(0);
            $table->integer('total_point_3')->nullable()->default(0);
            $table->integer('total_point_HCM')->nullable()->default(0);

            /*Học lực*/
            $table->string('study_point')->nullable();
            /*Hạng kiểm*/
            $table->string('active_point')->nullable();

            /*Ảnh xác thực điểm*/
            $table->string('point_img')->nullable();
            /*Ưu tiên và khu vực ưu tiên*/
            $table->integer('priority')->nullable()->default(1);
            $table->integer('area')->nullable()->default(1);

            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('is_student')->nullable();

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
