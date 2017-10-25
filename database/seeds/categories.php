<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = array("headset","charger", "tripod", "phone cases", "screen protector");
       $i = 0;
       while( $i<5){
       		DB::table('products_categories')->insert([
       				'name' => $categories[$i] ,
       				'created_at' => Carbon::now()
       			]);
       		$i++;
       		echo $i;
       		echo "\n";
       }
    }
}
