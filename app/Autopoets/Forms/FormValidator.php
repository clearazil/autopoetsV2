<?php namespace Autopoets\Forms;

use Illuminate\Validation\Factory as Validator;

abstract class FormValidator {

	/**
	 * [$validator description]
	 * @var [type]
	 */
	protected $validator;

	protected $validation;

	/**
	 * @param Validator
	 */
	public function __construct(Validator $validator) 
	{
		$this->validator = $validator;
	}

	/**
	 * @param  array
	 * @return [type]
	 */
	public function validate(array $formData) {
		$this->validation = $this->validator->make($formData, $this->getValidationRules());

		if($this->validation->fails()) {
			throw new FormValidationException('Validation failed', $this->getValidationErrors());
		}

		return true;
	}

	protected function getValidationRules() {
		return $this->rules;
	}

	protected function getValidationErrors() {
		return $this->validation->errors();
	}

}