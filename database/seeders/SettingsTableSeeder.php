<?php

namespace Database\Seeders;

use App\Models\Setting;
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
        $settings = new Setting();

        $settings->comp_name =  'MoraSoft Company';
        $settings->about =  'شركة مورا سوفت لخدمات النقل والشحن بمختلف الطرق .. تعمل الشركة على خدمتك على مدار الساعة ونقل شحناتك وتوصيلها عبر أأمن الطرق وافضل الاسعار';
        $settings->phone1 = '111111111';
        $settings->phone2 = '222222222';
        $settings->country = 'المملكة العربية السعودية';
        $settings->city = 'مخرج 14 , طريق عمر بن عبدالعزيز , الرياض';
        $settings->email = 'admin@morasoft.net';
        $settings->websiteLink =  'www.morasoft.net';
        $settings->FBLink =  'www.morasoft.net';
        $settings->LinLink = 'www.morasoft.net';
        $settings->YoutubeLink =  'www.morasoft.net';
        $settings->image= '1.jpg';
        $settings->save();



        // $data = [


        //     ['key' => 'comp_name', 'value' => 'MoraSoft Company'],
        //     ['key' => 'about', 'value' => 'شركة مورا سوفت لخدمات النقل والشحن بمختلف الطرق .. تعمل الشركة على خدمتك على مدار الساعة ونقل شحناتك وتوصيلها عبر أأمن الطرق وافضل الاسعار'],
        //     ['key' => 'country', 'value' => 'المملكة العربية السعودية'],
        //     ['key' => 'city', 'value' => 'مخرج 14 , طريق عمر بن عبدالعزيز , الرياض'],
        //     ['key' => 'phone1', 'value' => '+ 0500699206'],
        //     ['key' => 'phone2', 'value' => '+ 0560032681'],
        //     ['key' => 'email', 'value' => 'admin@morasoft.net'],
        //     ['key' => 'websiteLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'FBLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'LinLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'YoutubeLink', 'value' => 'www.morasoft.net'],
        //     ['key' => 'logo', 'value' => '1.jpg'],
        // ];

        // DB::table('settings')->insert($data);

      
    }

}
