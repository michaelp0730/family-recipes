<?php
	function get_all_recipes() {
		include($_SERVER['DOCUMENT_ROOT'] . '/family-recipes/_config/db_connect.php');
		$query = 'SELECT * FROM recipes ORDER BY Title';
		$results = mysqli_query($link, $query);
		while ($data = mysqli_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}

	function get_recipe($slug) {
		include($_SERVER['DOCUMENT_ROOT'] . '/family-recipes/_config/db_connect.php');
		$query = "SELECT * FROM recipes WHERE Slug='$slug'";
		$result = mysqli_query($link, $query);
		return mysqli_fetch_row($result);
	}

	function get_breakfast_recipes($array) {
		$stack = array();

		if ($array['Type'] === 'breakfast') {
			array_push($stack, $array);
		}
		return $stack;
	}

	function get_salad_recipes($array) {
		$stack = array();

		if ($array['Type'] === 'salads') {
			array_push($stack, $array);
		}
		return $stack;
	}

	function get_soup_recipes($array) {
		$stack = array();

		if ($array['Type'] === 'soups') {
			array_push($stack, $array);
		}
		return $stack;
	}

	function get_entree_recipes($array) {
		$stack = array();

		if ($array['Type'] === 'entrees') {
			array_push($stack, $array);
		}
		return $stack;
	}

	function get_sides_recipes($array) {
		$stack = array();

		if ($array['Type'] === 'sides') {
			array_push($stack, $array);
		}
		return $stack;
	}

	function get_dessert_recipes($array) {
		$stack = array();

		if ($array['Type'] === 'desserts') {
			array_push($stack, $array);
		}
		return $stack;
	}
?>
