<?php

require_once realpath("vendor/autoload.php");

use App\Book\Book;
use App\Book\BookInterface;
use App\EReader\Kindle;
use App\EReader\Nook;
use App\EReader\EReaderInterface;
use App\EReader\EReaderAdapter;
/**
 * 
 */
class Person
{
	public function readBook(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}

(new Person)->readBook(new EReaderAdapter(new Nook));