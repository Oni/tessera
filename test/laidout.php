<?php
require '../tessera.php';

class LaidOutApp extends Tessera {

	// use views/layout.html as a layout
	var $layout = 'layout';
	
	function main() {
		// pass $lyrics to the view
		// the view is in views/main.html
		$this->set('lyrics', "Deep down, deep down, dadi dadu dadu dadi dada");
	}
	
}

$basic = new LaidOutApp(array(
	'/' => 'main',
));
