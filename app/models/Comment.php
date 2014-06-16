<?php

class Comment extends \Model {
	protected $fillable = ['body'];
	protected $model = 'comment';

	public function post() {
		return $this->belongsTo('Post');
	}

	public static function relations() {
		return ['post'];
	}
}