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
		// butinai tagus pirma reikia seedint!!!! Nes kitaip foregin key constraint
		$this->call('TagsTableSeeder');
        $this->call('ArticlesTableSeeder');        
        $this->call('ArticlesTagsTableSeeder');
	}

}
