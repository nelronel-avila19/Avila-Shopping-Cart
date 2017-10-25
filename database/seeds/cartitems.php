<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class cartitems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartitems = array("1", "2", "3", "4", "5");
     echo "cart identifications";
      for( $i = 0; $i<5; $i++){
      		DB::table('cart_items')->insert([
      				'cart_id'=> $cartitems[$i] ,
      				'product_id' => rand(1,99),
      				'quantity' => "1",
      				'amount' => rand(1,99).".00" ,
      				'barcode' => "item",
      				
      			]);
      		echo "\n";
      		echo $i+1;
      		
      }

    }
}
