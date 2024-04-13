<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Article;

class ArticleController extends Controller
{
    protected array $articles =[
        1=>[
            'title'=>'TITLE1',
            'content'=>'A LOT OF RANDOM TEXT1'
        ],
        2=>[
            'title'=>'TITLE2',
            'content'=>"RANDOM TEXT KAKASKA 2"
        ]
        ];

        public function index(): View{
            return view('articles.index', ['articles'=>$this->articles]);
        }

        public function show(int $id): View{
            abort_if(!isset($this->articles[$id]),404);
            return view('articles.show',['article'=>$this->articles[$id]]);
        }
}
