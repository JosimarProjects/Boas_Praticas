<?php

namespace Database\Seeders;

use \Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'jo030191@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456')
        ]);



        \App\Models\Order::factory(20)->create();



        // \App\Models\Models\Order::factory(10)->create();
        //$this->call(OrdersTableSeeder::class);
    }
}
