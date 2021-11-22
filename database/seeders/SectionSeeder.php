<?php

namespace Database\Seeders;

use App\Models\section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{

    public function run()
    {
        DB::table('sections')->delete();
        $section = new section();
        $section->section_name = ['en'=>'Mobile','ar'=>'هواتف محموله'];
        $section->slug = 'mobile1';
        $section->image = 'default1.jpg';
        $section->desc = 'يوجد لدينا منتجات متعدده';
        $section->status = 1;
        $section->popular = 1;
        $section->save();
        $section = new section();
        $section->section_name = ['en'=>'computer','ar'=>'	أجهزة كمبيوتر '];
        $section->slug = 'computer';
        $section->image = 'default2.jpg';
        $section->desc = '	يوجد العديد من الاجهزة الحديثة';
        $section->status = 1;
        $section->popular = 1;
        $section->save();
        $section = new section();
        $section->section_name = ['en'=>'computer electronic','ar'=>'هواتف محموله'];
        $section->slug = 'computer electronic';
        $section->image = 'default3.jpg';
        $section->desc = '  يوجد العديد من ملحقات الاجهزة المميزة    ';	
        $section->status = 1;
        $section->popular = 1;
        $section->save();
    }
}
