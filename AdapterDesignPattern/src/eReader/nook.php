<?php

namespace App\EReader;

use App\EReader\EReaderInterface;

class Nook implements EReaderInterface{

	public function turnOn(){
		echo "turn on Nook ";
	}

	public function clickNext(){
		echo "click on next button";
	}

}