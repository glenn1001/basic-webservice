<?php

class Model extends \Eloquent {

	protected $model = '';

	public static function relations() {
		return [];
	}

	public function toArray() {
		$extension = explode('.', $_SERVER['REQUEST_URI']);
		$extension = count($extension) > 1 ? '.' . $extension[count($extension) - 1] : '';

		$array = parent::toArray();
		$array['link'] = [
			'collection' 	=> 'http://' . $_SERVER['HTTP_HOST'] . '/' . $this->model . $extension,
			'self' 			=> 'http://' . $_SERVER['HTTP_HOST'] . '/' . $this->model . '/' . $array['id'] . $extension
		];

		return $array;
	}

}