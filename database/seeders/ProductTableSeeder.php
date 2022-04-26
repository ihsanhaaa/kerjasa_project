<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'category_id' => '3',
                'title'=> 'Jasa Sewa Zoom',
                'slug' => 'jasa-sewa-zoom',
                'package'=> 'Harian',
                'benefit' => '100 Orang',
                'price'=> '15000',
                'description' => 'lorem ipsum',
                'name_profil'=> 'Ihsan Haryansyah',
                'bio_profil' => 'Saya adalah seorang influenser',
                'fb_profil'=> 'www.instagram.com/ihsanhaaa',
                'ig_profil' => 'www.instagram.com/ihsanhaaa',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'category_id' => '1',
                'title'=> 'Desain Grafis',
                'slug' => 'desain-grafis',
                'package'=> 'Standart',
                'benefit' => 'Free Revisi',
                'price'=> '40000',
                'description' => 'lorem ipsum',
                'name_profil'=> 'Ihsan Harya',
                'bio_profil' => 'Saya adalah seorang influenser',
                'fb_profil'=> 'www.instagram.com/ihsanhaaa',
                'ig_profil' => 'www.instagram.com/ihsanhaaa',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'category_id' => '2',
                'title'=> 'Web Programming',
                'slug' => 'web-programming',
                'package'=> 'per project',
                'benefit' => 'free biaya maintenance',
                'price'=> '1000000',
                'description' => 'lorem ipsum',
                'name_profil'=> 'Haryansyah',
                'bio_profil' => 'Saya adalah seorang influenser',
                'fb_profil'=> 'www.instagram.com/ihsanhaaa',
                'ig_profil' => 'www.instagram.com/ihsanhaaa',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'category_id' => '2',
                'title'=> 'Full Stack Developer',
                'slug' => 'full-stack-developer',
                'package'=> 'per project',
                'benefit' => 'free biaya maintenance',
                'price'=> '1200000',
                'description' => 'lorem ipsum',
                'name_profil'=> 'Haryansyah',
                'bio_profil' => 'Saya adalah seorang influenser',
                'fb_profil'=> 'www.instagram.com/ihsanhaaa',
                'ig_profil' => 'www.instagram.com/ihsanhaaa',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];
        
        Product::insert($products);
    }
}
