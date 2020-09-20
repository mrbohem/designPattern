<?php 

namespace App;

abstract class Sub{

	public function make(){
		return $this
			->layBread()
			->addLettuce()
			->addPrimaryTopping();
	}

	private function layBread()
	{
		echo "laying down the bread";

		return $this;
	}

	private function addLettuce()
	{
		echo "add some lettuce";
		
		return $this;
	}

	abstract public function addPrimaryTopping();
}