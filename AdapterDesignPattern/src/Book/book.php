<?php

namespace App\Book;

use App\Book\BookInterface;
/**
 * Book
 */

class Book implements BookInterface
{
	public function open()
	{
		echo "open the book<br>";
	}

	public function turnPage()
	{
		echo "turn the page<br>";
	}
}