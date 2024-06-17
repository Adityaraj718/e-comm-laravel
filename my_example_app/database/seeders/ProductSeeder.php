<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'name' => 'Samsung 23Fe',
            "price"=>"40000",
            "description"=>"S23FE with new AI features",
            "category"=>"Smartphone",
            "gallery"=>"https://5.imimg.com/data5/SELLER/Default/2023/11/363004564/NA/QY/VQ/160478483/samsung-s23-fe-5g-s711bb-s23fe-8-128gb.jpg"
            ],
            [
                'name' => 'Go Pro',
                "price"=>"50000",
                "description"=>"Small and tiny that can capture landsacpe view in 4k HD",
                "category"=>"Cameras",
                "gallery"=>"https://5.imimg.com/data5/SELLER/Default/2021/1/MY/MU/WI/33221763/action-camera-gopro.jpg"
            ],
            [
                    'name' => 'LG TV',
                    "price"=>"60000",
                    "description"=>"New LG supersmart AI TV with 60 inch display",
                    "category"=>"TV",
                    "gallery"=>"https://www.hindustantimes.com/ht-img/img/2024/04/10/550x309/best_lg_smart_tv_1712739297410_1712739311554.jpg"
            ],
            [
                'name' => 'HP LaserJet',
                "price"=>"10000",
                "description"=>"New printer that connects to wifi",
                "category"=>"Printer",
                "gallery"=>"https://www.printersindia.in/wp-content/uploads/2020/02/Y5S47A-1_T1561014052.jpg"
            ],
        ]);
    }
}
