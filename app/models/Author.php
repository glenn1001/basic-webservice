<?php

class Author extends Model {
	protected $fillable = ['name', 'email'];
	protected $model = 'author';

	public function posts() {
		return $this->hasMany('Post');
	}

	public static function relations() {
		return ['posts'];
	}
}