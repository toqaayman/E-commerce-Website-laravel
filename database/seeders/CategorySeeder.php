<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Camera & Photo Products',
            'image' => 'categories/uIWsyvH9io6RHAd6kcvpWRUSS4rYMAuesxymSQ8d.jpg'
        ]);

        Category::create([
            'title' => 'Car & Vehicle Electronics',
            'image' => 'categories/G63jdPSuBQk1EnbHAppD0JwWqyE35GH8oljz6gco.jpg'
        ]);

        Category::create([
            'title' => 'Computers, Components & Accessories',
            'image' => 'categories/o2b8TCEqdBzqY8TbFcWVdsNfKGxxXlAoLP1xGFfP.jpg'
        ]);

        Category::create([
            'title' => 'eBook Readers & Accessories',
            'image' => 'categories/0Z8FvqiBIJtsRtdHuwXwUKYikjF2svqU0HXUXPfE.jpg'
        ]);

        Category::create([
            'title' => 'Headphones, Earbuds & Accessories',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Home Audio & Theater Products',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Batteries & Chargers',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Mobile Phones & Communication Products',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Portable Sound & Vision Products',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Electrical Power Accessories',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'GPS & Navigation Equipment',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Computer Tablets',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Telephones, VoIP & Accessories',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
        Category::create([
            'title' => 'Wearable Technology',
            'image' => 'categories/sLATQr72yKLRAbDeXM9PZoXZphYl0VfErif0kZGS.jpg'
        ]);
    }

}
