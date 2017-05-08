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

    /**
     * 使用$this->response->必须使用Response Builder 响应生成器
     *  use Dingo\Api\Routing\Helpers;
     *  use Illuminate\Routing\Controller;
     *
     *  class BaseController extends Controller
     *  {
     *     use Helpers;
     *  }
     */  
    public function article($id) {

        $article = Article::find($id);
        if(!$article){
            //自定义消息和状态码的普通错误
            // return $this->response->error('ddddd', 302);

            //一个没有找到自愿的额错误，可以自定义消息，状态码404
            // return $this->response->errorNotFound('3333');

            //bad request错误，可以自定义错误消息, 状态码400
            // return $this->response->errorBadRequest('请求错误');

            //服务器拒绝，可以自定义错误信息，状态码403
            // return $this->response->errorForbidden('服务器禁止访问');

            //内部错误，可以自定义错误信息，状态码500
            // return $this->response->errorInternal('内部错误');

            //未认证错误，可以自定义错误i信息，状态码401
            return $this->response->errorUnauthorized('未认证');
            // return response()->json(['error'=>'article not found']);
        }

        //响应一个数组
        // return $this->response->array($article->toArray());

        //响应一个元素
        // return $this->response->item($article, new ArticleTransformer);

        //响应一个元素集合
        // return $this->response->item(Article::all(), new ArticleTransformer);

        //分页响应
        // return $this->response->item(Article::paginate(1), new ArticleTransformer);

        //无内容响应
        // return $this->response->noContent();

        //创建了资源的响应,created($location) $location可选，提供创建的资源的位置参数
        // return $this->response->created($location);

        //添加额外头信息
        // return $this->response->item($article, new ArticleTransformer)->withHeader('x-test', 'hahhaah');

        //添加单个meta信息
        // return $this->response->item($article, new ArticleTransformer)->addMeta('testmeta', 'testmeta');

        /**
            //设置多个meta信息,替代调用多次addMeta方法
            $meta = [
                'meta1' => 'meta1',
                'meta2' => 'meta2',
            ];
            return $this->response->item($article, new ArticleTransformer)->setMeta($meta);
        */

        //设置响应状态码
        // return $this->response->item($article, new ArticleTransformer)->setStatusCode(200);

        /** 自定义响应格式
         * json(javascript object Notation) 数据交换格式
         * jsonp(json with padding) 非官方跨域数据交互协议
         * 修改dingo/config/api.php文件
         * 'formats' => [ 'json' => 'Dingo\Api\Http\Response\Format\Jsonp']

         * 或者修改lumen文件中的默认json格式替换成jsonp
         * Dingo\Api\Http\Response::addFormatter('json', new Dingo\Api\Http\Response\Format\Jsonp);
         *
         */   
        return $this->response->item($article, new ArticleTransformer)
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