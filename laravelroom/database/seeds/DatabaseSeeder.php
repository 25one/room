<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Room;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // User
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => str_random(10),
                'api_token' => str_random(8),
            ]
        ); 
        User::create(
            [
                'name' => 'alex',
                'email' => 'alex@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'redac',               
                'remember_token' => str_random(10),
                'api_token' => str_random(8),                   
            ]
        ); 
        User::create(
            [
                'name' => 'serg',
                'email' => 'serg@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',                
                'remember_token' => str_random(10),
                'api_token' => str_random(8),                  
            ]
        ); 
        User::create(
            [
                'name' => 'helen',
                'email' => 'helen@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',                
                'remember_token' => str_random(10),
                'api_token' => str_random(8),                   
            ]
        );

        // Room
        Room::create( //1
            [
                'name' => 'The Victoria',
                'price' => 374662,
                'bedrooms' => 4,
                'bathrooms' => 2,
                'storeys' => 2,
                'garages' => 2,                
            ]
        ); 
        Room::create( //2
            [
                'name' => 'The Xavier',
                'price' => 513268,
                'bedrooms' => 4,
                'bathrooms' => 2,
                'storeys' => 1,
                'garages' => 2,                
            ]
        ); 
        Room::create( //3
            [
                'name' => 'The Como',
                'price' => 454990,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'storeys' => 2,
                'garages' => 3,                
            ]
        );                
        Room::create( //4
            [
                'name' => 'The Aspen',
                'price' => 384356,
                'bedrooms' => 4,
                'bathrooms' => 2,
                'storeys' => 2,
                'garages' => 2,                
            ]
        );          
        Room::create( //5
            [
                'name' => 'The Lucretia',
                'price' => 572002,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'storeys' => 2,
                'garages' => 2,                
            ]
        );          
        Room::create( //6
            [
                'name' => 'The Toorak',
                'price' => 521951,
                'bedrooms' => 5,
                'bathrooms' => 2,
                'storeys' => 1,
                'garages' => 2,                
            ]
        );          
        Room::create( //7
            [
                'name' => 'The Skyscape',
                'price' => 263604,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'storeys' => 2,
                'garages' => 2,                
            ]
        );          
        Room::create( //8
            [
                'name' => 'The Clifton',
                'price' => 386103,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'storeys' => 1,
                'garages' => 1,                
            ]
        );          
        Room::create( //9
            [
                'name' => 'The Geneva',
                'price' => 390600,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'storeys' => 2,
                'garages' => 2,                
            ]
        );          

    }
}
