<?php

use Illuminate\Database\Seeder;
use App\Article;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ArticlesTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
//        \Illuminate\Support\Facades\DB::table('articles')->truncate();
        Article::create([
            'title' => 'Better Integration Testing in Laravel 5.1: Model Factories',
            'user_id' => '1',
            'body' => 'The body of the forst article stays interestingly empty...',
            'published_at'=> \Carbon\Carbon::now()
        ]);
        Article::create([
            'title' => 'Better Integration Testing in Laravel 5.1: DatabaseMigrations, DatabaseTransactions, and WithoutMiddleware',
            'user_id' => '1',
            'body' => 'Elektros sistemų pereinamieji procesai',
            'published_at'=> \Carbon\Carbon::now()
        ]);
        Article::create([
            'title' => 'Laravel and Stripe',
            'user_id' => '1',
            'body' => 'Over the past few years, I’ve implemented Laravel and Stripe on multiple occasions. Everything from subscriptions to one-off purchases. When I started, Laravel Cashier wasn’t invented yet and it was a totally different beast, but now with Cashier it takes a lot of the pain away by having a simple API.',
            'published_at'=> \Carbon\Carbon::now()
        ]);

    }

}