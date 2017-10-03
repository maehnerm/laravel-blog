<?php

namespace App;

use App\Model;

class Post extends Model
{
		public function user()
		{
			return $this->belongsTo(User::class);
		}

		public function comments()
		{
			return $this->hasMany(Comment::class)->orderBy('created_at','desc');
		}

		public function getRouteKeyName()
		{
			return 'slug';
		}
}
