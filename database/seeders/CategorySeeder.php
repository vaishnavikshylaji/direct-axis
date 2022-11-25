<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $category = new Category();
        $category->name = 'Cloths';
        $category->save();

        $category = new Category();
        $category->name = 'Mens';
        $category->save();

        $category = new Category();
        $category->name = 'Womens';
        $category->save();
    }
}
