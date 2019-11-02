<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
            ['name' => 'Camisas de Time', 'slug' => 'camisas-de-time', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Camisas Surf', 'slug' => 'camisas-surf', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Acessórios', 'slug' => 'acessorios', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bermudas', 'slug' => 'bermudas', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bonés', 'slug' => 'bones', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Moda Feminina', 'slug' => 'moda-feminina', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Inverno', 'slug' => 'inverno', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Perfumes', 'slug' => 'perfumes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tênis', 'slug' => 'tenis', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
