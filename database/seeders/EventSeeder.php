<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();
        $event = new Event();
        $event->event_title = ['en'=>'warehousing','ar'=>'حدث هام'];
        $event->image = 'default.jpg';
        $event->desc = 'يوجد لدينا احداث متعدده';
        $event->status = 1;
        $event->save();
        $event = new Event();
        $event->event_title = ['en'=>'warehousing','ar'=>'جدا حدث هام'];
        $event->image = 'default.jpg';
        $event->desc = 'يوجد لدينا احداث متعدده';
        $event->status = 1;
        $event->save();

    }
}
