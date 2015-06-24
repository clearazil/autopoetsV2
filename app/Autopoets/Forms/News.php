<?php namespace Autopoets\Forms;

class News extends FormValidator {

	/**
	 * Validation rules for a new news item
	 * @var [type]
	 */
	protected $rules = [
		'title' => 'required',
		'file'	=> 'required',
		'message' => 'required'
	];
}