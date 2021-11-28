<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();
        $serv = new Service();
        $serv->serve_name = ['en'=>'warehousing','ar'=>'نقل برى'];
        $serv->image = '1.jpg';
        $serv->desc = 'The forms of transportation vary, and their locations and ways of transportation vary, including land transportation, which mainly depends on wheeled vehicles such as cars, buses, trucks, and trains, while ships, boats and water vehicles are considered one of the most important types of water transportation,
        and air transportation mainly depends on aircraft that Transporting people from one country to another by air.';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'Air Freight','ar'=>'نقل جوى'];
        $serv->image = '2.jpg';
        $serv->desc = 'The National Transport and Logistics Strategy has set a number of objectives in the air transport sector, which are:
• Improving airport infrastructure and facilities.
• Increased access to transportation options at airports.
• Raising the cargo capacity to 4.5 million tons of goods by 2030.
• The aviation sector aims to transport 330 million passengers by 2030.
• Strengthening partnerships between public and private sector operators within the sector.';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'Ocean Freight','ar'=>'نقل بحرى'];
        $serv->image = '3.jpeg';
        $serv->desc = 'Maritime transport, which is responsible for transporting 90% of the total volume of world trade, is truly the lifeblood of the global economy. We can imagine that without shipping, we will be unable to complete commercial transactions between the various continents of the world. Whether it is related to raw materials, food or manufactured products. Which means that half of the world will starve to death while the other half will freeze!
         Ships are among the most valuable assets, with a single ship costing more than $150 million to build.';
        $serv->status = 1;
        $serv->save();

        // $services = [
        //     ['en'=> 'xxxxxxxxxxx', 'ar'=> 'نقل برى','default.jpg','desc1',1],
        //     ['en'=> 'ccccccccccccc', 'ar'=> 'نقل جوى','default.jpg','desc1',1],
        //     ['en'=> 'vvvvvvvvvv', 'ar'=> 'نقل بحرى','default.jpg','desc1',1],
        // ];

        // foreach ($services as $service) {
        //     Service::create(['serve_name' => $service]);
        // }

        // DB::table('services')->insert([
        //     'serve_name' =>['en'=> 'xxxxxxxxxxx', 'ar'=> 'نقل برى'],
        //     'image' => 'default.jpg',
        //     'desc' => 'يوجد لدينا خدمات متعدده',
        //     'status' => 1,
        // ]);
    }
}
