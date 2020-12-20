<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$page_title = 'Pellegrini Page | Family Recipes';
	$css_path = './app.css';
	include './includes/head.php';
	include './includes/get_recipes.php';

	if( isset($_GET['recipes-search']) ) {
		$search_term = strtolower(htmlentities($_GET['recipes-search']));
		$search_results = search_recipes($search_term);
		$breakfast_recipes = array_filter($search_results, 'get_breakfast_recipes');
		$salad_recipes = array_filter($search_results, 'get_salad_recipes');
		$soup_recipes = array_filter($search_results, 'get_soup_recipes');
		$entree_recipes = array_filter($search_results, 'get_entree_recipes');
		$sides_recipes = array_filter($search_results, 'get_sides_recipes');
		$dessert_recipes = array_filter($search_results, 'get_dessert_recipes');
	} else {
		$all_recipes = get_all_recipes();
		$breakfast_recipes = array_filter($all_recipes, 'get_breakfast_recipes');
		$salad_recipes = array_filter($all_recipes, 'get_salad_recipes');
		$soup_recipes = array_filter($all_recipes, 'get_soup_recipes');
		$entree_recipes = array_filter($all_recipes, 'get_entree_recipes');
		$sides_recipes = array_filter($all_recipes, 'get_sides_recipes');
		$dessert_recipes = array_filter($all_recipes, 'get_dessert_recipes');
	}

	$recipes_array = array(
		'breakfast' => $breakfast_recipes,
		'salads' => $salad_recipes,
		'soups' => $soup_recipes,
		'entrees' => $entree_recipes,
		'sides' => $sides_recipes,
		'desserts' => $dessert_recipes
	);
?>

<body>
	<div class="wrapper">
		<h1>Family <span>Recipes</span></h1>
		<div class="group">
			<span class="index-subheading">This is a collection of recipes from our family and friends. Lots of special stuff in here. Please enjoy and eat well!</span>
			<form id="recipes-search-form" class="recipes-search-form" action="" method="get">
				<label for="recipes-search">Search recipes:</label>
				<input type="text" id="recipes-search" class="recipes-search" name="recipes-search" value="" />
				<button type="submit">Search</button>
			</form>
		</div>

		<?php if( $search_term ) { ?>
			<h2>Search Results:</h2>
		<?php } ?>

		<?php
			foreach ($recipes_array as $recipe_type => $recipes) {
				if ($recipes) {
		?>
					<section class="container group">
						<h2 class="label heading-label <?php echo $recipe_type ?>">
							<?php echo $recipe_type ?>
						</h2>
						<ul class="link-list">
							<?php
								foreach ($recipes as $key => $value) {
							?>
									<li>
										<a href="./recipes/?slug=<?php echo $value['Slug'] ?>">
											<?php echo $value['Title'] ?>
										</a>
									</li>
							<?php
								}
							?>
						</ul>
					</section>
		<?php
				}
			}
		?>
	</div>
	<?php include './includes/footer.php' ?>
</body>
</html>
