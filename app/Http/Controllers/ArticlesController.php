<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Repositories\ArticlesRepository;

class ArticlesController extends Controller
{
    private $articlesRepository;

    public function __construct(ArticlesRepository $articlesRepository){
        $this->articlesRepository = $articlesRepository;
    }
    public function search(Request $request){
        $q = $request->get('q');

        $articles = $q ? $this->articlesRepository->search($q) : Article::all();

        return view('dashboard', ['articles' => $articles]);
    }
}
