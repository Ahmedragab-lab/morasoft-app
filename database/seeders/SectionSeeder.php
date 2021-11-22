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
        $section->slug = 'mobile';
        $section->image = 'default2.jpg';
        $section->desc = 'يوجد لدينا منتجات متعدده';
        $section->status = 1;
        $section->popular = 1;
        $section->save();
        $section = new section();
        $section->section_name = ['en'=>'computer','ar'=>'كمبيوتر'];
        $section->slug = 'mobile';
        $section->image = 'default3.jpg';
        $section->desc = 'يوجد لدينا منتجات متعدده';
        $section->status = 1;
        $section->popular = 1;
        $section->save();
        $section = new section();
        $section->section_name = ['en'=>'tv screen','ar'=>'شاشات اسمارت'];
        $section->slug = 'smart tv';
        $section->image = 'default.jpg';
        $section->desc = 'يوجد لدينا منتجات متعدده';
        $section->status = 1;
        $section->popular = 1;
        $section->save();
    }
}
