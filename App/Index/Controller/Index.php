<?php
namespace App\Index\Controller;

class Index
{

	public function index()
	{
		\core\Log::write('Hello World');	
	}

}