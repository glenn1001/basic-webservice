<?php

class Post extends Model {
	protected $fillable = ['title', 'body'];
	protected $model = 'post';

	public function author() {
		return $this->belongsTo('Author');
	}

	public function comments() {
		return $this->hasMany('Comment');
	}

	public static function relations() {
		return ['author', 'comments'];
	}
}