<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Quiz;

class QuizzesController extends Controller
{
    public function index(Request $request)
		{
			$category = $request->category;
      //配列形式へ
      $category = explode(',', $category);
      //パラメータで渡ったカテゴリーのクイズを10件取得
			$quizzes = Quiz::with(['answer', 'category'])
				->whereIn('quizzes.category_id', $category)
				->inRandomOrder()
				->limit(10)
				->get();
							
			return $quizzes;
		}
}
