<?php

/**
 * getEquilibriums()
 *
 * Cette fonction permet de calculer les indices des équilibres.
 *
 * This function is used to calculate equilibrium indexes.
 *
 * @param Array $arr A set of numbers to compare to determine equilibrium indexes.
 * @return Array $output If there are no equilibrium indexes, this will return an empty array. Otherwise, there will be values here.
 */
function getEquilibriums($arr) {
	$output = array();
	$right = array_sum($arr);
	$left = 0;
	foreach($arr as $key => $value) {
		$right -= $value;
		if ($left == $right) $output[] = $key;
		$left += $value;
	}
	return $output;
}