<?php

use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog\Category::create([
            'name' => 'Uncategorized',
            'description' => 'Not yet Categorized'
        ]);

        \App\Models\Activity\Category::create([
            'name' => 'Generic',
            'description' => 'Very Generic Tour'
        ]);
        \App\Models\Activity\Category::create([
            'name' => 'Adventure',
            'description' => 'Adventure travel is a type of niche tourism, involving exploration or travel with a certain degree of risk, and which may require special skills and physical exertion'
        ]);
        \App\Models\Activity\Category::create([
            'name' => 'Cultural',
            'description' => 'Cultural tourism is the subset of tourism concerned with a traveler\'s engagement with a country or region\'s culture, specifically the lifestyle of the people in those geographical areas, the history of those people, their art, architecture, religion(s), and other elements that helped shape their way of life.'
        ]);
        \App\Models\Activity\Category::create([
            'name' => 'Luxury',
            'description' => 'Luxury travel is a privilege truly experienced by few. To our private & custom tour clients it means having the right balance of local insight, independence and flexibility. They decide overnight locations in advance and choose daily from a menu of recommended sights, cultural experiences and personal leisure time.'
        ]);
        \App\Models\Activity\Category::create([
            'name' => 'Educational',
            'description' => 'Education tourism is a traveling activity undertaken by those, whom education and learning are the primary purpose of their trip. In other words, the main objective of traveling is to obtain knowledge on certain subject, rather than the experience of traveling itself.'
        ]);
        \App\Models\Activity\Category::create([
            'name' => 'Cuisine',
            'description' => 'Eat Like the Locals. At Classic Journeys, you\'ll find food is a foolproof way into the hearts, homes, and history of the places you visit, and you\'ll experience it with every meal. All breakfasts and many lunches are included. We treat you to many dinners, as well, often with complimentary wine. Thanks to the insider connections of your local guides and the small size of our groups, you can get you into the kind of terrific local cafes where the neighbors eat. In many restaurants, chefs prepare special meals for you. And so what if the menus aren’t in English? Your guide will translate, point you to favorite dishes, and pass on your compliments to the chef. '
        ]);

        $cities = [
            'Ha Noi', 'Bac Can', 'Bac Kan', 'Bac Ninh',
            'Cao Bang', 'Dien Bien', 'Ha Giang', 'Ha Nam',
            'Ha Noi', 'Hoa Binh', 'Hung Yen', 'Lai Chau',
            'Lao Cai', 'Nam Dinh', 'Ninh Binh', 'Phu Tho',
            'Quang Binh', 'Quang Tri', 'Son La', 'Tuyen Quang',
            'Thai Binh', 'Thai Nguyen', 'Thua Thien Hue', 'Vinh Phuc',
            'Yen Bai', 'An Giang', 'Ba Ria - Vung Tau', 'Ben Tre',
            'Binh Phuoc', 'Binh Thuan', 'Can Tho', 'Da Nang',
            'Dac Lac', 'Dac Nong', 'Dak Lak', 'Dak Nong',
            'Dong Nai', 'Dong Thap', 'Hau Giang', 'Ho Chi Minh',
            'Kon Tum', 'Long An', 'Ninh Thuan', 'Quang Nam',
            'Quang Ngai', 'Soc Trang', 'Tay Ninh', 'Tien Giang',
            'Tra Vinh', 'Thua Thien Hue', 'Tra Vinh', 'Vinh Long',
            'Bac Giang', 'Ha Tinh', 'Hai Duong', 'Hai Phong',
            'Lang Son', 'Nghe An', 'Quang Ninh', 'Thanh Hoa',
            'Bac Lieu', 'Binh Dinh', 'Binh Duong', 'Ca Mau',
            'Da Nang', 'Gia Lai', 'Kien Giang', 'Khanh Hoa',
            'Lam Dong', 'Phu Yen'
        ];

        foreach ($cities as $city){
            \App\Utilities\City::create([
                'country' => 'VN',
                'city' => $city,
                'long' => 0,
                'lat' => 0
            ]);
        }
        \App\User::create([
            'name' => 'Quan Do Vu Dang',
            'email' => 'quandvdo@gmail.com',
            'password' => bcrypt('quan90')
        ]);

        \App\Models\Utilties\Option::create([
            'key' => 'phone'
        ])

    }
}
