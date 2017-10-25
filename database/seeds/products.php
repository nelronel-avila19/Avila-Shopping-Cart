<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $headset = array("Samsung", "Asus", "Lenovo", "Cherry Mobile", "Oppo");
     echo "headset";
      for( $i = 0; $i<5; $i++){
      		DB::table('products')->insert([
      				'name'=> $headset[$i] ,
      				'description' => "This is a product",
      				'category_id' => "1",
      				'price' => rand(1,99).".00" ,
      				'barcode' => "item",
      				'stock' => rand(4,10),
      				'created_at' => Carbon::now()
      			]);
      		echo "\n";
      		echo $i+1;
      		
      }


      $charger = array("Nokia", "HTC", "ZH&K", "My Phone", "Acer");
      echo "\n"."charger";
       for( $i = 0; $i<5; $i++){
      		DB::table('products')->insert([
      				'name'=> $charger[$i] ,
      				'description' => "This is a product",
      				'category_id' => "1",
      				'price' => rand(1,99).".00" ,
      				'barcode' => "item",
      				'stock' => rand(4,10),
      				'created_at' => Carbon::now()
      			]);
      		
      		echo "\n";
      		echo $i+1;

      }


      $tripod = array("ClassA", "ClassB", "ClassC", "ClassD", "ClassE");
      echo "\n"."tripod";
       for( $i = 0; $i<5; $i++){
      		DB::table('products')->insert([
      				'name'=> $tripod[$i] ,
      				'description' => "This is a product",
      				'category_id' => "1",
      				'price' => rand(1,99).".00" ,
      				'barcode' => "item",
      				'stock' => rand(4,10),
      				'created_at' => Carbon::now()
      			]);
      		
      		echo "\n";
      		echo $i+1;
      }


       $phonecases = array("Slim Armor", "Transparent", "Neon", "Shock Absorber", "Shell");
       echo "\n"."phone cases";
       for( $i = 0; $i<5; $i++){
      		DB::table('products')->insert([
      				'name'=> $phonecases[$i] ,
      				'description' => "This is a product",
      				'category_id' => "1",
      				'price' => rand(1,99).".00" ,
      				'barcode' => "item",
      				'stock' => rand(4,10),
      				'created_at' => Carbon::now()
      			]);
      		
      		echo "\n";
      		echo $i+1;
      }

       $screenprotector = array("Tempered Glass", "Plastic", "Mirror", "Shock Absorber", "Other");
       echo "\n"."screen protector";
       for( $i = 0; $i<5; $i++){
      		DB::table('products')->insert([
      				'name'=> $screenprotector[$i] ,
      				'description' => "This is a product",
      				'category_id' => "1",
      				'price' => rand(1,99).".00" ,
      				'barcode' => "item",
      				'stock' => rand(4,10),
      				'created_at' => Carbon::now()
      			]);
      		
      		echo "\n";
      		echo $i+1;
      }

    }
}
