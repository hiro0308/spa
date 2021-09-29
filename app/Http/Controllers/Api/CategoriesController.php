<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Category;


class CategoriesController extends Controller
{
    public function index()
		{
      $category = Category::select('id', 'name')->get();
      
      // Log::debug('カテゴリー：'.print_r($category,true));
      
      return $category;
		}
}
