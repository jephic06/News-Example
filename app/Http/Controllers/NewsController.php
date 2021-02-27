<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\news;

class NewsController extends Controller
{

  public function index()
  {
    $newsCount = news::where('statusID', 1)->count();

    return view('news', compact('newsCount'));
  }

  public function load()
  {
    $offset = request('offset');
    $limit = request('limit');
    $newsResults = news::where('statusID', 1)->skip($offset)->take($limit)->get();

    foreach ($newsResults as $key => $value) {
      $imgArr = [];
      foreach (explode(',', $value->newsImages) as $imageKey => $imageValue) {
        array_push($imgArr, asset('images/'.$imageValue));
      }
      $imgArr = implode(',', $imgArr);

      $newsResults[$key]['newsCategory'] = $value->newsCategory->newsCategory;
      $newsResults[$key]['newsImages'] = $imgArr;
      $newsResults[$key]['newsDatetime'] = Carbon::create($value->createdDateTime)->diffForHumans();
    }

    return $newsResults;
  }

}
