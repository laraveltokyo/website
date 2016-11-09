<?php namespace ApiSearch\Http\Controllers;

class SampleController extends BaseController {

	public function index()
	{
		return addon_view(addon_namespace(), 'sample');
	}

}
