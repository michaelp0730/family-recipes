<?
	function get_all_breakfast() {
		$query = "SELECT * FROM recipes WHERE Type = 'breakfast' ORDER BY Title";
		$results = mysql_query($query);
		while ($data = mysql_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}

	function get_all_salads() {
		$query = "SELECT * FROM recipes WHERE Type = 'salads' ORDER BY Title";
		$results = mysql_query($query);
		while ($data = mysql_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}

	function get_all_soups() {
		$query = "SELECT * FROM recipes WHERE Type = 'soups' ORDER BY Title";
		$results = mysql_query($query);
		while ($data = mysql_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}

	function get_all_entrees() {
		$query = "SELECT * FROM recipes WHERE Type = 'entrees' ORDER BY Title";
		$results = mysql_query($query);
		while ($data = mysql_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}

	function get_all_sides() {
		$query = "SELECT * FROM recipes WHERE Type = 'sides' ORDER BY Title";
		$results = mysql_query($query);
		while ($data = mysql_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}

	function get_all_desserts() {
		$query = "SELECT * FROM recipes WHERE Type = 'desserts' ORDER BY Title";
		$results = mysql_query($query);
		while ($data = mysql_fetch_assoc($results)) {
			$recipes[] = $data;
		}

		return $recipes;
	}
