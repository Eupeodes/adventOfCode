<?php

namespace Eupeodes\AdventOfCode\Y2024;

use Eupeodes\AdventOfCode\Day;

class D9 extends Day{
	private $dataFile = __DIR__.'/D9.txt';
	public function __construct(){
	}
	
	public function run(){
		$this->solution_1 = 0;
		$this->solution_2 = 0;
		$f = fopen($this->dataFile, 'r');
		while($line = fgets($f)){
			
		}
	}
}