<?php

class ERelief extends \Eloquent {
	/*
	use \Traits\Encryptable;


	protected $encryptable = [

		'relief_amount',
		
	];
	*/

public $table = "employee_relief";

public static $rules = [
		'employee' => 'required',
		'relief' => 'required',
		'amount' => 'required|regex:/^[0-9]{1,3}(,[0-9]{3})*\.[0-9]+$/',
	];

public static $messages = array(
        'employee.required'=>'Please select employee!',
        'relief.required'=>'Please select relief type!',
        'amount.required'=>'Please insert amount!',
        'amount.regex'=>'Please insert a valid amount!',
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function employee(){

		return $this->belongsTo('Employee');
	}
	public function relief(){

		return $this->belongsTo('Relief');
	}

}