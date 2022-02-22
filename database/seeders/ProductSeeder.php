<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\True_;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "title" => "engineering mathematics",
            "image" => "TBek77nbhoOP2SIFzlI3LCNqR4Ja7OYXYyMkaHUd.jpg",
            "about" => "engineering mathematics book | introduction | math |  engineers | books",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 1,
            "Manufacturer" => 'Apple',
            "new" => 1
        ]);

        Product::create([
            "title" => "robotics",
            "image" => "ekQPt5SXNo1K7pHxdFBrC6E3zgaX03IufyvrdvZl.jpg",
            "about" => "robotics for dummies | books | robot building",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 1,
            "Manufacturer" => 'Apple',
            "new" => 1        ]);

        Product::create([
            "title" => "bluetooth audio receiver",
            "image" => "2.jpg",
            "about" => "Bluetooth 3.0 Audio Receiver Module",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 2,
            "Manufacturer" => 'Apple',
            "new" => 1        ]);

        Product::create([
            "title" => "ammonia",
            "image" => "ruxxrpOHq3Neu63s9AAgSYtDhzWFVt76yxfh6jX8.jpg",
            "about" => "ammonia | chemical | rockets",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 3,
            "Manufacturer" => 'Apple',
            "new" => 1        ]);

        Product::create([
            "title" => "lithium batteries",
            "image" => "8Wd35AlQEKlmi3lnGCq7SWdFiiBqZX4jQYOqFqDS.jpg",
            "about" => "lithium battery | batteries | energizer",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 2,
            "Manufacturer" => 'Apple',
            "new" => 1        ]);

        Product::create([
            "title" => "liquid nitrogen",
            "image" => "poPREEwR9ltCyhfHb6uvHyU5NVK0zZS16PDw9UAQ.jpg",
            "about" => "liquid nitrogen | gas | cooling | container",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 3,
            "Manufacturer" => 'Apple' ,
            "new" => 1       ]);

        Product::create([
            "title" => "map milky way",
            "image" => "U9sNO8kFlUmtDTNcPAYn5Pr2K2X0PEjmV0dCkOq7.jpg",
            "about" => "map | milky way | galaxy | astronomy",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 4,
            "Manufacturer" => 'Apple' ,
            "new" => 1       ]);

        Product::create([
            "title" => "mini telescope",
            "image" => "ea1M7t6v34K4pBhWBY2XtG7nsLgyPL4Im6NtjPGT.jpg",
            "about" => "telescope | hand | golden | mini",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 4,
            "Manufacturer" => 'Apple' ,
            "new" => 1       ]);

        Product::create([
            "title" => "screw driver set",
            "image" => "cBJDkfi2ZL4HKdd2xM2Kxw1KZxcxD8Ye4iW0S6Ws.jpg",
            "about" => "impact screw drive set | multiple | blue",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 5,
            "Manufacturer" => 'Apple'  ,
            "new" => 1      ]);

        Product::create([
            "title" => "bolts hex m6",
            "image" => "SneYB2r7u6WuJuCGMpUux3jwwnQRSzV5KLmFZptr.jpg",
            "about" => "bolts hex m6 | assorted | mini | for metals",
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 5,
            "Manufacturer" => 'Apple',
            "new" => 1
        ]);

        Product::create([
            "title" => "argon",
            "image" => "St6lBumjeU5EQwWDalTvi9xzZgYPHrz7YvNdtxjy.jpg",
            "about" => "argon gas | ampoule",
            "Manufacturer" => 'Apple' ,
            "price" => rand(10, 5000),
            "stock_quantity" => rand(2, 15),
            "discount" => rand(1, 16) * 5,
            "category_id" => 3,
            "new" => 1
                   ]);

    }
}
