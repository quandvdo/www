<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SetupSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \App\Models\User::create([
            'name' => 'Compass R00tz',
            'email' => 'admin@compasstravel.vn',
            'password' => bcrypt('quan90'),
            'role' => 100
        ]);
        \App\Models\User::create([
            'name' => 'Quan Do Vu Dang',
            'email' => 'quandvdo@gmail.com',
            'password' => bcrypt('quan90'),
            'role' => 100
        ]);

        \App\Models\Utility\Option::create([
            'type' => 'global',
            'key' => 'intro',
            'value' => 'With wide knowledge about our own country and experience about customer service, we are proudly and confidently organized the best travel packages to discover the whole Vietnam. We not only provide you a trip but also follow your each steps to give you the best memory of Viet Nam.<br>
We can organize private tours or group tours, budget packages or luxury trip all depend on your requirements. ',
            'icon' => 'fa-google-plus-g'
        ]);

        \App\Models\Utility\Option::create([
            'type' => 'global',
            'key' => 'phone',
            'value' => '(+84) 933 450 123',
            'icon' => 'fa-map-marker-alt'
        ]);


        \App\Models\Utility\Option::create([
            'type' => 'global',
            'key' => 'address',
            'value' => '25 Yen Ninh, Hoan Kiem, Ha Noi',
            'icon' => 'fa-phone-square'
        ]);

        \App\Models\Utility\Option::create([
            'type' => 'global',
            'key' => 'email',
            'value' => 'hi@compasstravel.vn',
            'icon' => 'fa-envelope'
        ]);

        \App\Models\Utility\Option::create([
            'type' => 'social',
            'key' => 'facebook',
            'value' => 'https://www.facebook.com/compasstravelvietnam/',
            'icon' => 'fa-facebook-f'
        ]);
        \App\Models\Utility\Option::create([
            'type' => 'social',
            'key' => 'twitter',
            'value' => 'https://twitter.com/compasstravelvietnam/',
            'icon' => 'fa-twitter'
        ]);
        \App\Models\Utility\Option::create([
            'type' => 'social',
            'key' => 'googleplus',
            'value' => 'https://plus.google.com//compasstravelvietnam/',
            'icon' => 'fa-google-plus-g'
        ]);

        $cities = [
            'Ha Noi', 'Bac Can', 'Bac Ninh',
            'Cao Bang', 'Dien Bien', 'Ha Giang', 'Ha Nam',
            'Hoa Binh', 'Hung Yen', 'Lai Chau',
            'Lao Cai', 'Nam Dinh', 'Ninh Binh', 'Phu Tho',
            'Quang Binh', 'Quang Tri', 'Son La', 'Tuyen Quang',
            'Thai Binh', 'Thai Nguyen', 'Vinh Phuc',
            'Yen Bai', 'An Giang', 'Ba Ria - Vung Tau', 'Ben Tre',
            'Binh Phuoc', 'Binh Thuan', 'Can Tho', 'Da Nang',
            'Dac Lac', 'Dac Nong', 'Dak Lak', 'Dak Nong',
            'Dong Nai', 'Dong Thap', 'Hau Giang', 'Ho Chi Minh',
            'Kon Tum', 'Long An', 'Ninh Thuan', 'Quang Nam',
            'Quang Ngai', 'Soc Trang', 'Tay Ninh', 'Tien Giang',
            'Thua Thien Hue', 'Tra Vinh', 'Vinh Long',
            'Bac Giang', 'Ha Tinh', 'Hai Duong', 'Hai Phong',
            'Lang Son', 'Nghe An', 'Quang Ninh', 'Thanh Hoa',
            'Bac Lieu', 'Binh Dinh', 'Binh Duong', 'Ca Mau',
            'Da Nang', 'Gia Lai', 'Kien Giang', 'Khanh Hoa',
            'Lam Dong', 'Phu Yen'
        ];
        $citiesSorted = collect($cities)->sort()->toArray();

        foreach ($citiesSorted as $city) {
            \App\Models\Utility\City::create([
                'country' => 'VN',
                'title' => $city . ' ' . $faker->words(3, true),
                'slug' => \App\Models\Utility\Helper::slug($city),
                'area' => rand(1, 50) . 'Km2',
                'description' => $faker->text(rand(2000, 6000)),
                'city' => $city,
                'long' => 0,
                'lat' => 0
            ]);
        }
        \App\Models\Utility\Category::create([
            'type' => 'General',
            'name' => 'Uncategorized',
            'description' => 'Not yet Categorized'
        ]);

        \App\Models\Utility\Category::create([
            'type' => 'Activity',
            'name' => 'Generic',
            'description' => 'Very Generic Tour'
        ]);
        \App\Models\Utility\Category::create([
            'type' => 'Activity',
            'name' => 'Adventure',
            'description' => 'Adventure travel is a type of niche tourism, involving exploration or travel with a certain degree of risk, and which may require special skills and physical exertion'
        ]);
        \App\Models\Utility\Category::create([
            'type' => 'Activity',
            'name' => 'Cultural',
            'description' => 'Cultural tourism is the subset of tourism concerned with a traveler\'s engagement with a country or region\'s culture, specifically the lifestyle of the people in those geographical areas, the history of those people, their art, architecture, religion(s), and other elements that helped shape their way of life.'
        ]);
        \App\Models\Utility\Category::create([
            'type' => 'Activity',
            'name' => 'Luxury',
            'description' => 'Luxury travel is a privilege truly experienced by few. To our private & custom tour clients it means having the right balance of local insight, independence and flexibility. They decide overnight locations in advance and choose daily from a menu of recommended sights, cultural experiences and personal leisure time.'
        ]);
        \App\Models\Utility\Category::create([
            'type' => 'Activity',
            'name' => 'Educational',
            'description' => 'Education tourism is a traveling activity undertaken by those, whom education and learning are the primary purpose of their trip. In other words, the main objective of traveling is to obtain knowledge on certain subject, rather than the experience of traveling itself.'
        ]);
        \App\Models\Utility\Category::create([
            'type' => 'Activity',
            'name' => 'Cuisine',
            'description' => 'Eat Like the Locals. At Classic Journeys, you\'ll find food is a foolproof way into the hearts, homes, and history of the places you visit, and you\'ll experience it with every meal. All breakfasts and many lunches are included. We treat you to many dinners, as well, often with complimentary wine. Thanks to the insider connections of your local guides and the small size of our groups, you can get you into the kind of terrific local cafes where the neighbors eat. In many restaurants, chefs prepare special meals for you. And so what if the menus aren’t in English? Your guide will translate, point you to favorite dishes, and pass on your compliments to the chef. '
        ]);
        factory(\App\Models\Utility\Category::class, 20)->create();

        \App\Models\Booking\Agent::create([
            'name' => 'Compass Travel',
            'phone' => '0933450123',
            'address' => '25 Yen Ninh, Hoan Kiem, Ha Noi',
            'email' => 'handle@compasstravel.vn',
            'cost' => 0
        ]);
    }
}
