<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
        [
          [
            'name' => '英語',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'name' => '歴史',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'name' => '地理',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
      ]
    );
  }
}
