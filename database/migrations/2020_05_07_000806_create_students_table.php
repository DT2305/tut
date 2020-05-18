<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('email', 100)->unique();
            $table->date('birthday');

            $table->string('identify_number')->unique();        /*Chứng minh nhân dân*/
            $table->string('id_number_date')->nullable();         /*Ngày cấp CMND*/
            $table->string('id_issue_place')->nullable()->default(1);         /*Nơi cấp CMND*/

            $table->string('phone_number')->unique();
            $table->string('avatar')->nullable();               /*Ảnh*/
            $table->string('address')->nullable();              /*Địa chỉ*/
            $table->string('student_code')->unique();           /*Mã sinh viên (Đăng nhập)*/
            $table->string('password');

            $table->foreignId('course_id')->nullable()->default(1)
                ->onDelete('set null')
                ->onUpdate('cascade');                             /*Mã lớp*/




            $table->date('start_date')->nullable();             /*Ngày vào trường*/
            $table->string('school_name')->nullable();          /*Địa chỉ cơ sở học tập*/
            $table->string('education_type')->nullable();       /*Loại hình đào tạo*/
            $table->string('education_level')->nullable();      /*Bậc đào tạo*/
            /*Nơi sinh*/
            $table->string('birth_province')->nullable()->default(1);       /*Tỉnh/Thành phố*/
//            $table->foreign('birth_province_code')->references('provinces_code')->on('provinces');
            $table->string('birth_district')->nullable()->default(1);       /*Quận/Huyện*/
//            $table->foreign('birth_district_code')->references('district_code')->on('districts');
            $table->string('birth_ward')->nullable()->default(1);           /*Phường/Xã*/
//            $table->foreign('birth_ward_code')->references('ward_code')->on('wards');
            /*Hộ khẩu thường trú*/
            $table->string('permanent_address')->nullable();    /*Địa chỉ thường trú*/
            $table->string('permanent_province')->nullable()->default(1);   /*Tỉnh/Thành phố*/
            $table->string('permanent_district')->nullable()->default(1);   /*Quận/Huyện*/
            $table->string('permanent_ward')->nullable()->default(1);       /*Phường/Xã*/

            $table->string('nation')->nullable()->default(1);               /*Dân tộc*/
            $table->string('religion')->nullable()->default(1);             /*Tôn giáo*/

            $table->string('parent_number')->nullable();        /*Số điện thoại phụ huynh*/

            $table->string('insurance_number')->nullable();     /*Số bảo hiểm y tế*/

            $table->string('bank_card')->nullable();            /*Mã thẻ ATM*/
            $table->string('bank')->nullable();                 /*Tên ngân hàng*/


            $table->string('position')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('students');
    }
}
