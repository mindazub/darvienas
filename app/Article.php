<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = ['title', 'body', 'published_at', 
	'user_id' // temporary
	];

	protected $dates = ['published_at'];

	public function scopePublished($query){
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query){
		$query->where('published_at', '>', Carbon::now());
	}
	
	//setNameAttribute
	//setAddressAttribute
	public function setPublishedAtAttribute($date) {
		// $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
		$this->attributes['published_at'] = Carbon::parse($date);
	}


	public function getPublishedAtAttribute($date){
		// return new Carbon($date);
		return Carbon::parse($date)->format('Y-m-d');
	}
	
	
		

		public function user() {
			return $this->belongsTo('App\User');
	}
	
	/*
	*
	*/

	public function tags() {
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}


	public function getTagListAttribute() {
		return $this->tags->lists('id');
	}
	
	
	
	
		

}
