<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        Admin::create([
            'name' => 'wolf',
            'email' => 'ahmedragabyasin2020@gmail.com',
            'password' => bcrypt('258258258'),
            // 'admin'    =>'1',
        ]);

        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name' => 'ahmed',
                'email' => 'ahmed@gmail.com',
                'password' => bcrypt('258258258'),
                'phone' => '01021493036',
                'address' => 'Egypt cairo',
                'image'=>'wolf.jpg',
            ],
            [
                'name' => 'dina',
                'email' => 'dina@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '01021493036',
                'address' => 'Phalastin Gaza',
                'image'=>'default.jpg',
            ],
             [
                'name' => 'Asmaa',
                'email' => 'asmaahosnyaly@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '01021493036',
                'address' => 'Egypt alex',
                'image'=>'default.jpg',
            ],
            // 'admin'    =>'0',
        ]);
    }
}
