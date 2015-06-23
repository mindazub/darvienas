<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\databse\seeds\ArticlesTableSeeder;
use App\databse\seeds\TagsTableSeeder;
class DatabaseSeeder extends Seeder {


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

//        $this->call('UsersTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('ArticlesTagsTableSeeder');
	}

}
