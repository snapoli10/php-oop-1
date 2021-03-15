<?php
	class Store {
		public $name;
		private $videogames = [];

		public function __construct($name) {
        $this->name = $name;
    }

		public function addVideogame(Videogame $videogame) {
			$this->videogames[] = $videogame;
		}
	}


	class Videogame {
		public $title;
		public $producer;
		public $genre;
		public $price;

		public function __construct($title, $producer, $genre, $price) {
			$this->title = $title;
			$this->producer = $producer;
			$this->genre = $genre;
			$this->price = $price;
		}
	}

	$storeOne = new Store('store1');

	$videogameOne = new Videogame('aaa', 'pippo', 'adventure', '20€');
	echo $videogameOne->title . '<br />';
	echo $videogameOne->producer . '<br />';
	echo $videogameOne->genre . '<br />';
	echo $videogameOne->price . '<br /><br/ >';

	$videogameTwo = new Videogame('bbb', 'paperino', 'rpg', '10€');
	echo $videogameTwo->title . '<br />';
	echo $videogameTwo->producer . '<br />';
	echo $videogameTwo->genre . '<br />';
	echo $videogameTwo->price . '<br /><br/ >';

	$videogameThree = new Videogame('ccc', 'pluto', 'action', '5€');
	echo $videogameThree->title . '<br />';
	echo $videogameThree->producer . '<br />';
	echo $videogameThree->genre . '<br />';
	echo $videogameThree->price . '<br /><br/ >';

	$storeOne->addVideogame($videogameOne);
	$storeOne->addVideogame($videogameTwo);
	$storeOne->addVideogame($videogameThree);

	print_r($storeOne);
