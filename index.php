<?php

function isBalanced($str ='') {
	$open_chars = ['{','[','('];
	$closed_chars = ['}',']',')'];
	$reverse_chars = [
		'}' => '{',
		']' => '[',
		')' => '(',
	];
	if(!$str)
		return true;
	$return = '';
	$array = str_split($str);
	foreach($array as $value){
		if(!in_array($value,$open_chars) && !in_array($value,$closed_chars))
			continue;
		if(!$return && in_array($value,$closed_chars))
			return false;
		if($return){
			if(in_array($value, $closed_chars) && substr($return, -1) == $reverse_chars[$value]){
				$return = substr($return, 0, -1);
			}else
				$return .= $value; 
		}else
			$return .= $value; 
		
	}
	
	if($return)
		return false;
	else
		return true;
}

function arrayMultiply($array = [], $multiplier = 1) {
    if(!is_array($array))
        return false;
    $result = [];
    foreach($array as $value){
        if(!is_array($value))
            $result[] = $value * $multiplier;
        else 
            $result[] = arrayMultiply($value, $multiplier);
    }
    return $result;
}

//Tests

echo 'isBalanced($str) test :</br>';
echo '$str = "mary (had a [little] lamb)";</br>';
echo 'result :' . (isBalanced('mary (had a [little] lamb)') ? 'true' : 'false') . '</br>';
echo '$str = "mary (had a [little) lamb]";</br>';
echo 'result : ' . (isBalanced('mary (had a [little) lamb]') ? 'true' : 'false') . '</br>';
echo '</br>';

echo 'arrayMultiply($array, $multiplier) test :</br>';
echo '$array =  [1, 2, [10, [100, 200], 20, 30], 3, [40, 50]];</br>';
echo '$multiplier = 2;</br>';
echo 'result : </br>';
echo '<pre>';
print_r(arrayMultiply([1, 2, [10, [100, 200], 20, 30], 3, [40, 50]], 2));
echo '</pre>';