<?php

class APIController extends \BaseController {

	public function index($model, $extension = 'json') {
		$model = ucfirst($model);

		return Response::json($model::with($model::relations())->get());
	}

	public function show($model, $id, $extension = 'json') {
		$model = ucfirst($model);

		return Response::json($model::with($model::relations())->findOrFail($id));
	}

}