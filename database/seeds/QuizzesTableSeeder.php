<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('quizzes')->insert([
        [
          'title' => '息子を英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '魚は英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '本棚は英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '「agreement」はなんと訳す？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '「scare」はなんと訳す？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '雷を英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '嵐は英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '紙は英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '「leather」はなんと訳す？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        [
          'title' => '伝言を英語でなんという？',
          'category_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
      ]);
    }
}
