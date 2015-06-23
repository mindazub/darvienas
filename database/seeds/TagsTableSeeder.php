<?php

use Illuminate\Database\Seeder;
use App\Tag;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TagsTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Tag::create([
            'name' => 'work'
        ]);
        Tag::create([
            'name' => 'personal'
        ]);
        Tag::create([
            'name' => 'management'
        ]);
        Tag::create([
            'name' => 'production'
        ]);

    }

}