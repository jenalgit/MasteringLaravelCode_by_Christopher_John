<?php


class LaravelDoc
{
    public function RequestLifeCycle(){
        /*
         *1. index.php file loads the Composer generated autoloader definition, and then retrieves an
         *   instance of the Laravel application from bootstrap/app.php script.
         *
         *2. HTTP kernel, which is located in app/Http/Kernel.php.
         *
         *3. Kernel bootstrapping actions is loading the service providers for your application.
         *
         *4. The register method will be called on all providers. Then Boot Maethod will be called.
         *
         *5. Request will be handed off to the router for dispatching.
         *
         *6. The resources directory contains your views, raw assets (LESS, SASS, CoffeeScript), and localiza-tion files.
         *
         *7.
         *        *  */
    }

    public function ServiceProvider(){
        /*
         * 1. But, what do we mean by “bootstrapped”? In general, we mean registering things,
         *    including registering service container bindings, event listeners, middleware, and even routes.
         *    Service providers are the central place to configure your application.
         *
         * 2. public function register()
                {
                     $this->app->singleton(Connection::class, function ($app) {
                     return new Connection(config('riak'));
                });
             }

        3. Registering Provide and Defer provider.

        4. $this->app->bind('HelpSpot\API', function ($app) {
                 return new HelpSpot\API($app['HttpClient']);
            })

       5.
        */
    }
    public function Bindings(){
        /*
         *1. Te container via the $this->app instance
         *2. $this->app->bind('HelpSpot\API', function ($app) {
             return new HelpSpot\API($app['HttpClient']);
             });


             Binding Interfaces To Implementations ==>
         3. $this->app->bind('App\Contracts\EventPusher', 'App\Services\RedisEventPusher');
             This tells the container that it should inject the RedisEventPusher when a class needs an
             implementation of EventPusher. Now we can type-hint the EventPusher interface in a constructor, or any
             other location where dependencies are injected by the service container:

         4.  Contextual Binding.
              $this->app->when('App\Handlers\Commands\CreateOrderHandler')
                        ->needs('App\Contracts\EventPusher')
                        ->give('App\Services\PubNubEventPusher');


         5. Binding Primitives==>

         6. Tagging :
            $this->app->bind('SpeedReport', function () {
             });

         7. $fooBar = $this->app->make('FooBar');

        8.  Container Event :
            The service container fires an event each time it resolves an object. You may listen to this event
            using the resolving method :
            $this->app->resolving(FooBar::class, function (FooBar $fooBar, $app) {
                // Called when container resolves objects of type "FooBar"...
             });

        9.  Illuminate\Contracts\Queue\Queue contract defines the methods needed for
            queueing jobs, while the Illuminate\Contracts\Mail\Mailer contract defines the methods needed
            for sending e-mail.

        10.
 */

    }
    public function Contracts(){
        /*
         * Loose Coupling :
         * Simplicity :
         * How To Implement Contract ??
         *
         * */
    }
    public function Facades(){
        /*
         * 1. Facades  Illuminate\Support\Facades\Facade
         * 2. A facade class only needs to implement a single method: getFacadeAccessor.
         *    It’s the getFacadeAccessor method’s job to define what to resolve from the container.
         * 3.
         **/
    }
    public function Auth(){
        /*
         * 1.Route::get('profile', [
                'middleware' => 'auth',
                'uses' => 'ProfileController@show'
           ]);

         * 2.
         *


        */
    }
    public function Authorization(){
        /*
         * Authorization :
         *
         * public function boot(GateContract $gate)
            {
                 $this->registerPolicies($gate);

                 $gate->define('update-post', function ($user, $post) {
                 return $user->id === $post->user_id;
                  });
             }

        */
    }
    public function LaravelCashier(){

    }
    public function Collections(){
        /*
         *
         *
         *
         *
         *
         *
         *
         * $collection = collect([1, 2, 3, 4, 5, 6, 7]);
2
3            $chunks = $collection->chunk(4);
4
5            $chunks->toArray();
6
7 //        [[1, 2, 3, 4], [5, 6, 7]]




         * */
         method= chunk();
         $Var = "@foreach ($products->chunk(3) as $chunk)
                             <div class=\"row\">
                    @foreach ($chunk as $product)
                            <div class=\"col-xs-4\">{{ $product->name }}</div>
                     @endforeach
                             </div>
                @endforeach";


        method=collapse();
        method= contains();

        zip(){#collection-method}

    }
}