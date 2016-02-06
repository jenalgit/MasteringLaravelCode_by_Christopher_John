<?php

class TutsNotes
{

//   Table : From Tinker

    public function Tips(){
        /*
         * 1. Variable with plural and singular must be used based on there on Quantity
         * 2. Class Name and function name must have some meaning association .
         * 3. => .env file use
         * 4.
         *
         * */
    }
    public function Database()
    {
        /*NOTe :
                 1. Create Migration Based on timestamp migration ill take
                    place.
                 2. Create Model for calling table:
         */

        $article = App\Article::where('title', 'First Change')->get();

        $article = App\Article::find(2);

        $article->update(['title' => 'Third Change', 'body' => 'body']);

        // To populate At single time
        App\Article::create();


        /*  Tips And Tricks :
         *
         *
           1.   SCOPE for used in Model :
                Help ur code more readable than using it for other things :
         *      public function scopePublished($query);
         *      public function scopeUnpublished($query)
         *      Usage : $articles = Article::latest('published_at')->published()->get();
         *
         * 2.   Model class provide to ==$dates== to Mutates attribute to Carbon format :
         *
         * 3.   Many to Many relationship : http://laraveldaily.com/pivot-tables-and-many-to-many-relationships/
         *
         * 4.   Schema::getColumnListing('reservations');
         *
         * 5.   http://www.easylaravelbook.com/blog/2015/01/21/creating-polymorphic-relations-in-laravel-5/
         *
        */





/*      Simplest Way to Populate an Article :

        $article = new App\Article;
        $article->title = "Second";
        $article->body = "Second Body HAHAHA";
        $article->published_at = Carbon\Carbon::now();
        $article->save();*/



    }


    public function ChapterRoute()
    {
        //{id} is Used not $id
        Route::get('articles/{id}', 'ArticlesController@show');

        /* Useful Notes :
         *  1: <a href = "{{ url('/articles', $article->id) }}"                >
         *        <a href = "/articles/{{ ($article->id)}}"                       >
         *        <a href = "{{action('ArticleController@show', [$article->id])}}">
         *
         *        Output : <a href="http://localhost:8000/articles/1">First Change</a>
         *
         *  2: What If get request comes as articles/create ?? Situation below :
         *        Route::get('articles/{id}', 'ArticlesController@show'); ==> "Wild Card"
         *        Route::get('articles/create', 'ArticlesController@create');
         *
         *     Explanation : ==> In this show method is called first over create method u can see {id} takes
         *     anything,better try to avoid something like this to optimize performance and loading :
         *
         *  3:
         *
         * */

    }
    public function Middleware(){
        // For Entire Controller Trigger Auth Middleware :
        // Second parameter array applies to Create Methods : 'except' or 'Only' Keyword
        $this->middleware('auth', ['only'=>'create']);
        /*
         * HTTP\Kernel.php
         * */
    }

    public function Issues(){
        /*
         * 1. Migration doest work properly try :
         *     >> composer dump-autoload
         *
         * 2. Authentication condition in User model dont use
         *
             public function getAuthIdentifier(){
                    $this->getKey();
                }

                public function getAuthPassword(){
                    return $this->password;
                }

                public function getEmailForPasswordReset(){
                    return $this->email;
    }
         * */
    }

    public function LaravelKeyword(){
        dd();
        var_dump();


    }


    public function Forms(){
        /*
         * 1. For Using Form in Class ==>composer require illuminate/html;
         *
         * 2. method PATCH will add Hidden Value by itself ;
         *
         * 3. Form::model() binding binds inputs with Model object to populate somethings :
         *
         * 4. @include('articles.form', ['submitButtonText' => 'Update Article'])
         *    // $submitButton -> Update Article :
         *
         * 5. Why ===> {!! Form::hidden('user_id', 1) !!} vs {{ Form::hidden('user_id', 1) }} ???

           6. 'Exists variable :
         $rules = array(

            'new_album' => 'required|numeric|exists:albums,id',
            'photo'     => 'required|numeric|exists:aimages,id'

        );

         *
         *
         *
         * */
    }

    public function FacadesTips(){
        /*
         * 1. Facades are references to underline instances class .
         *      Ex Route, Auth please get More Information :
         *
         * 2.
         * */
    }

    public function WebSiteResource(){

        $urls=[
                'http://eddmann.com/posts/how-static-facades-and-ioc-are-used-in-laravel/',
                ''
                ]

        /*
         *
         * */
    }

    public function Exilir(){
        /*
         * Asset Management Video by Jeffrey way : Really Important for any Developer :
         *
         * Features:
         * 1.   Cache busting to reflect changed in cache version at user end for new CSS addition :
         * 2.   Creating  Production Version file by merging all changes in single file :
         * 3.
         *
         * */
    }
}








