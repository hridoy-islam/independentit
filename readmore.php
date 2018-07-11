$p = "I am ridoy I am ridoyI am ridoyI am ridoyI am ridoyI am ridoyI am ridoyI am ridoyI am ridoy";

	function readmore($p){
		$ary = explode(' ', $p);

		$bad = array_slice($ary, 0, 3);

		return implode(' ', $bad);
	}

	echo readmore($p);
