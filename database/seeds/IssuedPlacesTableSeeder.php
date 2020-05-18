<?php

use Illuminate\Database\Seeder;

class IssuedPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issued_places')->insert([
        [
            'id'=> '1',
            'name'=> 'Nơi cấp CMND',
            'code'=> '0',
        ],
        [
            'id'=> '2',
            'name'=> 'Bộ Công AN',
            'code'=> '0',
        ],
        [
            'id'=> '3',
            'name'=> 'An Giang',
            'code'=> '89',
        ],
        [
            'id'=> '4',
            'name'=> 'Bà Rịa Vũng Tàu',
            'code'=> '77',
        ],
        [
            'id'=> '5',
            'name'=> 'Bắc Giang',
            'code'=> '24',
        ],
        [
            'id'=> '6',
            'name'=> 'Bắc Kạn',
            'code'=> '6',
        ],
        [
            'id'=> '7',
            'name'=> 'Bạc Liêu',
            'code'=> '95',
        ],
        [
            'id'=> '8',
            'name'=> 'Bắc Ninh',
            'code'=> '27',
        ],
        [
            'id'=> '9',
            'name'=> 'Bến Tre',
            'code'=> '83',
        ],
        [
            'id'=> '10',
            'name'=> 'Bình Định',
            'code'=> '52',
        ],
        [
            'id'=> '11',
            'name'=> 'Bình Dương',
            'code'=> '74',
        ],
        [
            'id'=> '12',
            'name'=> 'Bình Phước',
            'code'=> '70',
        ],
        [
            'id'=> '13',
            'name'=> 'Bình Thuận',
            'code'=> '60',
        ],
        [
            'id'=> '14',
            'name'=> 'Cà Mau',
            'code'=> '96',
        ],
        [
            'id'=> '15',
            'name'=> 'Cần Thơ',
            'code'=> '92',
        ],
        [
            'id'=> '16',
            'name'=> 'Cao Bằng',
            'code'=> '4',
        ],
        [
            'id'=> '17',
            'name'=> 'Đắc Nông ',
            'code'=> '67',
        ],
        [
            'id'=> '18',
            'name'=> 'ĐắkLắk',
            'code'=> '66',
        ],
        [
            'id'=> '19',
            'name'=> 'Điện Biên',
            'code'=> '11',
        ],
        [
            'id'=> '20',
            'name'=> 'Đồng Nai',
            'code'=> '75',
        ],
        [
            'id'=> '21',
            'name'=> 'Đồng Tháp',
            'code'=> '87',
        ],
        [
            'id'=> '22',
            'name'=> 'Gia Lai',
            'code'=> '64',
        ],
        [
            'id'=> '23',
            'name'=> 'Hà Giang',
            'code'=> '2',
        ],
        [
            'id'=> '24',
            'name'=> 'Hà Nam',
            'code'=> '35',
        ],
        [
            'id'=> '25',
            'name'=> 'Hà Tĩnh',
            'code'=> '42',
        ],
        [
            'id'=> '26',
            'name'=> 'Hải Dương',
            'code'=> '30',
        ],
        [
            'id'=> '27',
            'name'=> 'Hậu Giang              ',
            'code'=> '93',
        ],
        [
            'id'=> '28',
            'name'=> 'Hoà Bình',
            'code'=> '17',
        ],
        [
            'id'=> '29',
            'name'=> 'Hưng Yên',
            'code'=> '33',
        ],
        [
            'id'=> '30',
            'name'=> 'Khánh Hoà',
            'code'=> '56',
        ],
        [
            'id'=> '31',
            'name'=> 'Kiên Giang',
            'code'=> '91',
        ],
        [
            'id'=> '32',
            'name'=> 'Kon Tum',
            'code'=> '62',
        ],
        [
            'id'=> '33',
            'name'=> 'Lai Châu',
            'code'=> '12',
        ],
        [
            'id'=> '34',
            'name'=> 'Lâm Đồng',
            'code'=> '68',
        ],
        [
            'id'=> '35',
            'name'=> 'Lạng Sơn',
            'code'=> '20',
        ],
        [
            'id'=> '36',
            'name'=> 'Lao Cai',
            'code'=> '10',
        ],
        [
            'id'=> '37',
            'name'=> 'Long An',
            'code'=> '80',
        ],
        [
            'id'=> '38',
            'name'=> 'Nam Định',
            'code'=> '36',
        ],
        [
            'id'=> '39',
            'name'=> 'Nghệ An',
            'code'=> '40',
        ],
        [
            'id'=> '40',
            'name'=> 'Ninh Bình',
            'code'=> '37',
        ],
        [
            'id'=> '41',
            'name'=> 'Ninh Thuận',
            'code'=> '58',
        ],
        [
            'id'=> '42',
            'name'=> 'Phú Thọ',
            'code'=> '25',
        ],
        [
            'id'=> '43',
            'name'=> 'Phú Yên',
            'code'=> '54',
        ],
        [
            'id'=> '44',
            'name'=> 'Quảng Bình',
            'code'=> '44',
        ],
        [
            'id'=> '45',
            'name'=> 'Quảng Nam',
            'code'=> '49',
        ],
        [
            'id'=> '46',
            'name'=> 'Quảng Ngãi',
            'code'=> '51',
        ],
        [
            'id'=> '47',
            'name'=> 'Quảng Ninh',
            'code'=> '22',
        ],
        [
            'id'=> '48',
            'name'=> 'Quảng Trị',
            'code'=> '45',
        ],
        [
            'id'=> '49',
            'name'=> 'Sóc Trăng',
            'code'=> '94',
        ],
        [
            'id'=> '50',
            'name'=> 'Sơn La',
            'code'=> '14',
        ],
        [
            'id'=> '51',
            'name'=> 'Tây Ninh',
            'code'=> '72',
        ],
        [
            'id'=> '52',
            'name'=> 'Thái Bình',
            'code'=> '34',
        ],
        [
            'id'=> '53',
            'name'=> 'Thái Nguyên',
            'code'=> '19',
        ],
        [
            'id'=> '54',
            'name'=> 'Thanh Hoá',
            'code'=> '38',
        ],
        [
            'id'=> '55',
            'name'=> 'Thừa Thiên Huế',
            'code'=> '46',
        ],
        [
            'id'=> '56',
            'name'=> 'Tiền Giang',
            'code'=> '82',
        ],
        [
            'id'=> '57',
            'name'=> 'TP. Đà Nẵng',
            'code'=> '48',
        ],
        [
            'id'=> '58',
            'name'=> 'TP. Hà Nội',
            'code'=> '1',
        ],
        [
            'id'=> '59',
            'name'=> 'TP. Hải Phòng',
            'code'=> '31',
        ],
        [
            'id'=> '60',
            'name'=> 'TP. Hồ Chí Minh',
            'code'=> '79',
        ],
        [
            'id'=> '61',
            'name'=> 'Trà Vinh',
            'code'=> '84',
        ],
        [
            'id'=> '62',
            'name'=> 'Tuyên Quang',
            'code'=> '8',
        ],
        [
            'id'=> '63',
            'name'=> 'Vĩnh Long',
            'code'=> '86',
        ],
        [
            'id'=> '64',
            'name'=> 'Vĩnh Phúc',
            'code'=> '26',
        ],
        [
            'id'=> '65',
            'name'=> 'Yên Bái',
            'code'=> '15'
        ]
    ]);

    }
}
