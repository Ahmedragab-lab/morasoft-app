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
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();

        $product = new Product();
        $product->section_id = 1;
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
        $product->section_id = 1;
        $product->product_name = ['en'=>' tv samsung','ar'=>' شاشه سامسونج'];
        $product->slug = 'smart tv';
        $product->small_desc = 'smart tv ';
        $product->desc = 'يوجد لدينا منتجات متعدده';
        $product->original_price = '15000';
        $product->selling_price = '14000';
        $product->qty = '100';
        $product->tax = '50';
        $product->image = 'default2.jpg';
        $product->status = 1;
        $product->trending = 1;
        $product->save();
    }
}
