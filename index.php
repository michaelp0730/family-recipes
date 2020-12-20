<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$page_title = 'Pellegrini Page | Family Recipes';
	$css_path = './app.css';
	include './includes/head.php';
	include './includes/get_recipes.php';

	$all_recipes = get_all_recipes();
	$breakfast_recipes = array_filter($all_recipes, 'get_breakfast_recipes');
	$salad_recipes = array_filter($all_recipes, 'get_salad_recipes');
	$soup_recipes = array_filter($all_recipes, 'get_soup_recipes');
	$entree_recipes = array_filter($all_recipes, 'get_entree_recipes');
	$sides_recipes = array_filter($all_recipes, 'get_sides_recipes');
	$dessert_recipes = array_filter($all_recipes, 'get_dessert_recipes');

	// if( isset($_GET['recipes-search']) ) {
	// 	$search_val = strtolower(htmlentities($_GET['recipes-search']));
	// }
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

		<section class="container group">
			<h2 class="breakfast heading-label label">Breakfast</h2>
			<ul class="link-list">
				<?php
					foreach ($breakfast_recipes as $key => $value) {
				?>
						<li>
							<a href="./recipes/?slug=<?php echo $value['Slug'] ?>&type=<?php echo $value['Type'] ?>">
								<?php echo $value['Title'] ?>
							</a>
						</li>
				<?php
					}
				?>
			</ul>
		</section>

		<section class="container group">
			<h2 class="salads heading-label label">Salads</h2>
			<ul class="link-list">
				<?php
					foreach ($salad_recipes as $key => $salad_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $salad_value['Slug'] ?>&type=<?= $salad_value['Type'] ?>">
								<?= $salad_value['Title'] ?>
							</a>
						</li>
				<?php
					}
				?>
			</ul>
		</section>

		<section class="container group">
			<h2 class="soups heading-label label">Soups</h2>
			<ul class="link-list">
				<?php
					foreach ($soup_recipes as $key => $soup_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $soup_value['Slug'] ?>&type=<?= $soup_value['Type'] ?>">
								<?= $soup_value['Title'] ?>
							</a>
						</li>
				<?php
					}
				?>
			</ul>
		</section>

		<section class="container group">
			<h2 class="entrees heading-label label">Entrees</h2>
			<ul class="link-list">
				<?php
					foreach ($entree_recipes as $key => $entree_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $entree_value['Slug'] ?>&type=<?= $entree_value['Type'] ?>">
								<?= $entree_value['Title'] ?>
							</a>
						</li>
				<?php
					}
				?>
			</ul>
		</section>

		<section class="container group">
			<h2 class="sides heading-label label">Sides</h2>
			<ul class="link-list">
				<?php
					foreach ($sides_recipes as $key => $sides_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $sides_value['Slug'] ?>&type=<?= $sides_value['Type'] ?>">
								<?= $sides_value['Title'] ?>
							</a>
						</li>
				<?php
					}
				?>
			</ul>
		</section>

		<section class="container group">
			<h2 class="desserts heading-label label">Desserts</h2>
			<ul class="link-list">
				<?php
					foreach ($dessert_recipes as $key => $dessert_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $dessert_value['Slug'] ?>&type=<?= $dessert_value['Type'] ?>">
								<?= $dessert_value['Title'] ?>
							</a>
						</li>
				<?php
					}
				?>
			</ul>
		</section>
	</div>
	<?php include './includes/footer.php' ?>
</body>
</html>
