<?php

/* 
 * this validation rules apply on validation rules values.
 */
$phonePattern = '/\b\d{3}[-.]?\d{3}[-.]?\d{4}\b/';
return [
    'email'=>'required|string|email|emailformate',
    'unique_email'=> 'required|string|email|unique:users|emailformate',
    'password' => 'required|password8ulns',
    'confirm_password'=>'required|same:password',
    'old_password'=>'required|different:password',
    'name' => 'required|string',
    'name_with_space' => 'required|regex:/^[\pL\s]+$/u',
    'name_with_space_hyphens' => 'required|regex:/^[\pL\s\-]+$/u',
    'dob' => 'required|olderThan',
//    'dob' => 'required|olderThan:20',
    'age'=>'min:21',
    'gender' => 'required|in:male,female,other',
    'country_id' => 'required|integer',
    'country_code' => 'required|string',
    'contact_number' => 'required|integer',
    //-----(123-456-9874)-----//
//    'contact_number' => 'required|integer|regex:' . $phonePattern,
    'terms_condition' => 'integer|min:1',    
    'description' => 'required|string',
    'url' => 'url',
    'otp'=>'required|integer|min:6',
    'title'=>'required|string|min:3|max:200',
    'comments'=>'required|string',
    'address'=>'required|string|min:3|max:500',
];
