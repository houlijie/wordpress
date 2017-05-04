<?php
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Exception;
/**
* 
*/
class ArticleController extends Controller
{
    public function createArticle(Request $request) {
        $article = Article::create($request->all());
        return response()->json($article);
    }

    public function updateArticle(Request $request, $id) {
        $article = Article::find($id);
        $article->content = $request->input('content');
        $article->title = $request->input('title');
        $article->save();

        return response()->json($article);
    }

    public function modifyArticle(Request $request, $id) {
        $article = Article::find($id);
        $article->title = $request->input('title', $article->title);
        $article->content = $request->input('content', $article->content);

        $article->save();

        return response()->json($article);
    }

    public function deleteArticle(Request $request, $id) {
        try{
            $article = Article::find($id);
            if(!$article){
                throw new Exception('article not exist!');   
            }
            $article->delete();
        }catch(Exception $e){
            return response()->json(['message'=>$e->getMessage()]);
        }       
        return response()->json('删除成功');
    }

    public function article($id) {
        return 222;
        $article = Article::find($id);
        if(!$article){
            return response()->json(['error'=>'article not found']);
        }

        return response()->json($article);
    }

    public function articleList() {
        $articles = Article::all();
        return response()->json($articles);
    }

    public function index(){
        $link = [
            'rel' => url('22'),
            'href' => url('api/v1/articles'),
            'title' => 'article api list',
        ];

        return response()->json($link);
    }
}