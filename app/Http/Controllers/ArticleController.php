<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware("auth")->only(["store","update","destroy"]);
    }
    public function index()
    {
        //
        $articles = Article::all();
        return view ("articles/index",["articles"=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users =User::all();
     //   dump($users);

        return view("articles/create",["users"=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      // $form_data = request()->all();
       // dump($form_data);
       dump($request->all());

       $request->validate([
        "title"=> "required",
        "body"=> "required|min:5|max:50",
       ]);
       $image = $request->file("image");
 //      dump($image);
       if($image){
           $imageDestinationPath ="uploads/images/";
           $articleimage = date("YmdHis").".".$image->getClientOriginalExtension();
           dump($image->getClientOriginalExtension());
           dump($articleimage);
           $image->move($imageDestinationPath,$articleimage);
           $request->image = $articleimage;
       }
       //dump(Auth::user());
       $user_id= Auth::user()["id"];
       dump($user_id);
      Article::create([
      "title"=>$request->title,
     "body"=>$request->body,
      "image"=>$request->image,
     "user_id"=>$user_id
     ]);
     return redirect()->route("articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view("articles/show",["article"=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view("articles/edit",["article"=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $logged_user =Auth::user()["id"];
        if($article->user_id == $logged_user ){
        //
     //   dump($request->all());
     //   dump($article);

        $request->validate([
            "title"=> "required",
            "body"=> "required|min:5|max:50",
           ]);

           $request_data =$request->all();
       $image = $request->file("image");
       if($image){
        $imageDestinationPath ="uploads/images/";
        $articleimage = date("YmdHis").".".$image->getClientOriginalExtension();
        $image->move($imageDestinationPath,$articleimage);
     //   $request->image= $articleimage;  
        $request_data["image"]=$articleimage;
       }
   ///    $article->update([
      //  "title"=>$request->title,
        //"body"=>$request->body,
      //  "image"=>$request->image
      // ]);
      $article->update($request_data);
       return redirect()->route("articles.show",$article);
    }
    return "You are not authorized to delete you are not the creator of it";
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $logged_user =Auth::user()["id"];
        $img_name =$article->image;
        unlink("uploads/images/{$img_name}");
        if($article->user_id == $logged_user ){
        //
        $article->delete();
        return redirect()->route('articles.index');
    }
    return "You are not authorized to delete you are not the creator of it";
}
}
