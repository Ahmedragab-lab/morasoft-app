<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [


            ['key' => 'comp_name', 'value' => 'MoraSoft Company'],
            ['key' => 'about', 'value' => 'شركة مورا سوفت لخدمات النقل والشحن بمختلف الطرق .. تعمل الشركة على خدمتك على مدار الساعة ونقل شحناتك وتوصيلها عبر أأمن الطرق وافضل الاسعار'],
            ['key' => '', 'value' => 'المملكة العربية السعودية'],
            ['key' => 'address2', 'value' => 'مخرج 14 , طريق عمر بن عبدالعزيز , الرياض'],
            ['key' => 'phone1', 'value' => '+ 0500699206'],
            ['key' => 'phone2', 'value' => '+ 0560032681'],
            ['key' => 'email', 'value' => 'admin@morasoft.net'],
            ['key' => 'websiteLink', 'value' => 'www.morasoft.net'],
            ['key' => 'FBLink', 'value' => 'www.morasoft.net'],
            ['key' => 'LinLink', 'value' => 'www.morasoft.net'],
            ['key' => 'YoutubeLink', 'value' => 'www.morasoft.net'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];

        DB::table('settings')->insert($data);
    }

}
