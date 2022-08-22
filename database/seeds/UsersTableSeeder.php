<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 5)->create();
        /* User::create([
            'name' => 'Lucas Dantas',
            'email' => 'lucas.dantas@gmail.com',
            'password' => bcrypt('123456'),
        ]); */
    }
}