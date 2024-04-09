<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'name'=>'LG washing machine',
            'price'=>'15000',
            'category'=>'Electronics',
            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/ww80t504dax1tl/gallery/in-front-loading-washer-ww10t534daws1-374541-374541-ww80t504dax1tl-538070792?$650_519_PNG$',
            'description'=>'AI Ecobubble™  Bubble Soak & Quick Wash'

        ],
        [
            'name'=>'Samsung Led tv ',
            'price'=>'500000',
            'category'=>'Electronics',
            'gallery'=>'https://m.media-amazon.com/images/I/51qaLdeoJrL._SY300_SX300_QL70_FMwebp_.jpg',
            'description'=>'Screen Size	65 Inches'
        ],
        [
            'name'=>'Refrigertor',
            'price'=>'100000',
            'category'=>'Electronics',
            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/rs78cg8543s9hl/gallery/in-side-by-side-smart-conversion-449598-rs78cg8543s9hl-535107895?$650_519_PNG$',
            'description'=>'633 L Convertible 5in1 Side by Side'

        ],
        [
            'name'=>'Hrx clothes ',
            'price'=>'1500',
            'category'=>'Fabric',
            'gallery'=>'https://nimbuscluster.blob.core.windows.net/server01/hrx/subcatImage/subcatImage-xN5_diLHJrpoTOWl_7dBP-1692789575',
            'description'=>'LEVEL UP YOUR FITNESS'

        ]]);
    }
}
