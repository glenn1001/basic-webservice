<?php

class Author extends Model {
	protected $fillable = ['name', 'email'];
	protected $model = 'author';

	public function posts() {
		return $this->hasMany('Post');
	}

	public function creations() {
		return $this->belongsToMany('Creation');
	}

	public static function relations() {
		return ['creations', 'posts'];
	}
}