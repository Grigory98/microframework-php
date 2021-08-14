<?php
	use \Core\Route;
	
	return [
                new Route('/start/', 'start', 'actionIndex'),
                new Route('/about/', 'start', 'actionAbout'),
                new Route('/contact/', 'start', 'actionContact'),
	];
	
