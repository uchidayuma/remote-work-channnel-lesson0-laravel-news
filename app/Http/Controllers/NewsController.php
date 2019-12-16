<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $model = new News();
        $news = $model->getNews();
        $articles = $news['articles'];

        $business = $model->getNews('business');
        $business_articles = $business['articles'];

        $entertainment = $model->getNews('entertainment');
        $entertainment_articles = $entertainment['articles'];

        $sports = $model->getNews('sports');
        $sports_articles = $sports['articles'];

        return view('index', compact('articles', 'business_articles', 'entertainment_articles', 'sports_articles'));
    }
}
