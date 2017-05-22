<?php

use Illuminate\Database\Seeder;
use crud54\product; 
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//total de seeders que va insertar 80
        factory(product:: class, 80)->create();
    }
}
