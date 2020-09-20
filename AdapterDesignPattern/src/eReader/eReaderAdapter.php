<?php

namespace App\EReader;

use App\EReader\EReaderInterface;
use App\Book\BookInterface;

class EReaderAdapter implements BookInterface{

	private $eReader;

	public function __construct(EReaderInterface $eReader)
	{
		$this->eReader = $eReader;
	}

	public function open()
	{
		return $this->eReader->turnOn();
	}

	public function turnPage()
	{
		return $this->eReader->clickNext();
	}

}