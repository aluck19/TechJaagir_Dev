<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
//use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Tag;

class ArticlesController extends Controller
{


    //apply auth middleware for every route of article
    // auth refer to authenticate.php, look in kernel.php
    /**
     * Create a new articles controller instance.
     *
     * ArticlesController constructor.
     */
    public function __construct()
    {
        //$, this->middleware('auth'); -- for all the router
         $this->middleware('auth',['only'=>'create']); //auth only on create
       // $this->middleware('auth',['except'=>'index']); //except index, auth for all other routes
    }

    /**
     * Show all articles.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
       ///$articles = Article::latest()->get();
        //$articles = Article::order_by('published_at', 'desc')->get();
        //$articles = Article::latest('published_at')->get();
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

        //FETCH THE AUTHENTICATE USER
        //return \Auth::user();
        //return \Auth::user()->name;
        //At no user return null,
        // return \Auth::user()->name; //null

        $articles = Article::latest('published_at')->published()->get();
    //    $latest = Article::latest()->first();

        //$articles = Article::latest('published_at')->unpublished()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show a single article.
     *
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article){
       // $article = Article::findOrFail($id);

        //dd($article->published_at);

        //propery only works on carbon function
        // dd($article->created_at->year);
        //dd($article->created_at->addDays(8));
       // dd($article->created_at->format('Y-m'));
       // dd($article->created_at->addDays(2)->diffForHumans());

       // dd($article->published_at); -- made carbon instance using $dates merge

        return view('articles.show', compact('article'));
       // dd($article); to show nullable in return

//        if(is_null($article)){
//            abort(404);
//        }

      // return $article;


    }

    public function  create(){

        // AUTHENTICATION FOR A SINGLE PAGE - NOT USE - REDUNDANT CODE FOR EVERY PAGE
        //SHOULD BE WRITTEN
//        if(Auth::guest()){
//            return redirect('articles');
//        }

        //creating the tagslist to ass to articles create view
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    /**
     * Save a new article.
     *
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    //A: FIRST WAY TO VALIDATE USING THE  REQUEST - REQUEST FACADE NOT REQUIRED
    public function  store(ArticleRequest $request){
//        //validation needs to be passed first, if not redirects to previous page
//
//        //fetch all from post or get super globals
//        //cheat
//       // $input['published_at'] = Carbon::now();
//
//        //Article::create(Request::all()); -- not using Request facade because using request class



        //---when an article is create we need user object and pass user id into database
        //---user_id=>Auth::id()
//       $request = $request->all();
//        $request['user_id'] = Auth::id();

           // $article = new Article($request->all()); //create article with att from form
        //Auth::user()->articles()->save($article); // bring user_id from auth using eloquent relatioship of Article mode

        //c. above a. and b. in a single line


       $this->createArticle($request);

       // dd($request->input('tags'));

      // $tagIds = $request->input('tags');



      //  $article->tags()->attach($request->input('tag_list'));



       //  Article::create($request->all()); //get all the request from the input form
        //published_at is scoped, above

        //Session facade to show the flash message
       //a. \Session::flash('flash_message', 'Your article has been created.');

        //b.session with flash_message_importatn
       // session()->flash('flash_message', 'Your article has been created.');
        //session()->flash('flash_message_important', true);

        //c. in place of above b
//        return redirect('articles')->with([
//            'flash_message' => 'Your article has been created.',
//            'flash_message_important' => true
//        ]);


        //d. using flash facade, first neeed to facade using composer
           // \Flash::info(); facade
            //flash('Your article has been created')->important();

        //flash()->success('Your article has been created');

        flash()->overlay('Your article has been created', 'Good Job');
        return redirect('articles');
    }

    //b: SECOND WAY TO VALIDATE THE REQUEST USING CONTROLLER - REQUEST FACADE REQUIRED
    //FOR BASIC STUFFS ITS GOOD AND FAST -- use request class of http

    //public function  store(Request $request){
    //validation needs to be passed first, if not redirects to previous page

    //fetch all from post or get super globals
    //cheat
   // $input['published_at'] = Carbon::now();

    //Article::create(Request::all()); -- not using Request facade becaue using request class

//    $this->validate($request,['title'=> 'required', 'body'=> 'required'] );
//
//    Article::create($request->all());
//
//    return redirect('articles');
//    }


    /**
     * Edit an exiting article.
     *
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
       // $article = Article::findOrFail($id);

        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update an article. -- ArticleRequest for validation
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request)
        //method injection, laravel
    {
      //  $article = Article::findOrFail($id);

        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return redirect('articles');
    }


    /**
     * Sync up the list of tags in the database.
     *
     * @param Article $article
     * @param array $tags
     */
    private function syncTags(Article $article, array $tags){
        $article->tags()->sync($tags);
    }

    /**
     * Save a new article.
     *
     * @param ArticleRequest $request
     * @return mixed
     */
    private function createArticle(ArticleRequest $request){
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return $article;

    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        $article->delete();

        Session::flash('flash_message', 'Article successfully deleted!');

        return redirect('articles');
    }
}
