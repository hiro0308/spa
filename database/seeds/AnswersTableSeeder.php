<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
          [
            'answer_1' => 'daughter',
            'answer_2' => 'son',
            'answer_3' => 'mother',
            'answer_4' => 'grandmother',
            'correct_answer' => 2,
            'commentary' => '息子は英語で「son」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 1
          ],
          [
            'answer_1' => 'book',
            'answer_2' => 'apple',
            'answer_3' => 'fish',
            'answer_4' => 'green',
            'correct_answer' => 3,
            'commentary' => '魚は英語で「fish」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 2
          ],
          [
            'answer_1' => 'bookshelf',
            'answer_2' => 'link',
            'answer_3' => 'card',
            'answer_4' => 'application',
            'correct_answer' => 1,
            'commentary' => '本棚は英語で「bookshelf」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 3
          ],
          [
            'answer_1' => 'こんにちは',
            'answer_2' => '合意',
            'answer_3' => '川',
            'answer_4' => '犬',
            'correct_answer' => 2,
            'commentary' => '「agreement」は日本語で合意',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 4
          ],
          [
            'answer_1' => '怖い',
            'answer_2' => '寒い',
            'answer_3' => '眠い',
            'answer_4' => 'お腹の空いた',
            'correct_answer' => 1,
            'commentary' => '「scare」は日本語で怖い',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 5
          ],
          [
            'answer_1' => 'thunder',
            'answer_2' => 'hungry',
            'answer_3' => 'table',
            'answer_4' => 'session',
            'correct_answer' => 1,
            'commentary' => '雷は英語で「thunder」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 6
          ],
          [
            'answer_1' => 'elephant',
            'answer_2' => 'max',
            'answer_3' => 'easy',
            'answer_4' => 'storm',
            'correct_answer' => 4,
            'commentary' => '嵐は英語で「storm」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 7
          ],
          [
            'answer_1' => 'papper',
            'answer_2' => 'head',
            'answer_3' => 'tooth',
            'answer_4' => 'hand',
            'correct_answer' => 1,
            'commentary' => '紙は英語で「papper」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 8
          ],
          [
            'answer_1' => '机',
            'answer_2' => '革',
            'answer_3' => '枕',
            'answer_4' => '季節',
            'correct_answer' => 2,
            'commentary' => '「leather」は日本語で革',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 9
          ],
          [
            'answer_1' => 'cookie',
            'answer_2' => 'page',
            'answer_3' => 'file',
            'answer_4' => 'message',
            'correct_answer' => 4,
            'commentary' => '伝言は英語で「message」',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'quiz_id' => 10
          ],
        ]);
    }
}
