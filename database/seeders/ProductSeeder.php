<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $product = new Product();
        $product->section_id = 1;
        $product->product_name = ['en'=>'samsung','ar'=>'سامسونج'];
        $product->slug = 'samsung';
        $product->small_desc = 'smart phone ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '5000';
        $product->selling_price = '4500';
        $product->qty = '0';
        $product->tax = '50';
        $product->image = 'default.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();

        $product = new Product();
        $product->section_id = 2;
        $product->product_name = ['en'=>'laptop msi','ar'=>'لاب توب '];
        $product->slug = 'laptop';
        $product->small_desc = 'smart pc ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '19500';
        $product->selling_price = '18500';
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default3.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();

        $product = new Product();
        $product->section_id = 3;
        $product->product_name = ['en'=>' tv samsung','ar'=>' شاشه سامسونج'];
        $product->slug = 'smart tv';
        $product->small_desc = 'smart tv ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '15000';
        $product->selling_price = '14000';
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default4.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();

        $product = new Product();
        $product->section_id = 4;
        $product->product_name = ['en'=>' Joy stick ps4','ar'=>' ذراع العاب'];
        $product->slug = 'ps4';
        $product->small_desc = 'ps4 ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '2500';
        $product->selling_price = '2000';
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default5.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();

        $product = new Product();
        $product->section_id = 3;
        $product->product_name = ['en'=>' tv samsung','ar'=>' شاشه سامسونج'];
        $product->slug = 'smart tv';
        $product->small_desc = 'smart tv ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '11000';
        $product->selling_price = '9000';
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default6.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();

        $product = new Product();
        $product->section_id = 5;
        $product->product_name = ['en'=>' bed room','ar'=>' غرفه نوم'];
        $product->slug = 'bed room';
        $product->small_desc = 'bed room ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '20000';
        $product->selling_price = '15000';
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default7.jpg';
        $product->status = 0;
        $product->trending = 0;
        $product->save();
    }
}
