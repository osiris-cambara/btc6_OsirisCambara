<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		  $data['mydata1']="testing1";
                  $data['mydata2']="testing2";
		return view('form',$data);
		return view('welcome_message');
	}
}
