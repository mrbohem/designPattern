<?php
namespace App\EReader;

use App\EReader\EReaderInterface;

class kindle implements EReaderInterface{
	public function turnOn(){
		echo "turn on kindle";
	}

	public function clickNext(){
		echo "click on next button";
	}
}