<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	protected $fillable = [
		'title',
		'body',
		'published_at',
		'user_id'
	];
	
	 /**
     * Get the User that owns the Article.
     */
    public function post()
    {
        return $this->belongsTo('App\User');
    }

}
