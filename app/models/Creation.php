<?php

class Creation extends Model {
	protected $fillable = ['title', 'image'];
	protected $model = 'creation';

	public function authors() {
		return $this->belongsToMany('Author');
	}

	public static function relations() {
		return ['authors'];
	}
}