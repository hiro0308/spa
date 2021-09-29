<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('answer_1');
            $table->string('answer_2');
            $table->string('answer_3');
            $table->string('answer_4');
            $table->integer('correct_answer');
            $table->text('commentary');
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('answers', function (Blueprint $table) {
        $table->dropForeign('answers_quiz_id_foreign');
      });
      Schema::dropIfExists('answers');
    }
}
