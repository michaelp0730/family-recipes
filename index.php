<?
	$page_title = 'Pellegrini Page | Family Recipes';
	$css_path = './app.css';
	include './includes/head.php';
	include './_config/db_connect.php';
	include './includes/get_recipes.php';

	$breakfast_recipes = get_all_breakfast();
	$salad_recipes = get_all_salads();
	$soup_recipes = get_all_soups();
	$entree_recipes = get_all_entrees();
	$sides_recipes = get_all_sides();
	$dessert_recipes = get_all_desserts();

	if( isset($_GET['recipes-search']) ) {
		$search_val = strtolower(htmlentities($_GET['recipes-search']));
	}
?>

<body>
	<div class="wrapper">
		<h1>Family <span>Recipes</span></h1>
		<div class="group">
			<span class="index-subheading">This is a collection of recipes from our family and friends. Lots of special stuff in here. Please enjoy and eat well!</span>
			<form id="recipes-search-form" class="recipes-search-form" action="" method="get">
				<label for="recipes-search">Search recipes:</label>
				<input type="text" id="recipes-search" class="recipes-search" name="recipes-search" value="<?= $search_val ?>" />
				<button type="submit">Search</button>
			</form>
		</div>

		<? if ($search_val) { ?>
			<h2>Search Results:</h2>
		<? } ?>

		<section class="container group">
			<h2 class="breakfast heading-label label">Breakfast</h2>
			<ul class="link-list">
				<?
					foreach ($breakfast_recipes as $key => $breakfast_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $breakfast_value['Slug'] ?>&type=<?= $breakfast_value['Type'] ?>">
								<?= $breakfast_value['Title'] ?>
							</a>
						</li>
				<?
					}
				?>
			</ul>
		</section>

		<section id="section-salads" class="container group">
			<h2 class="salads heading-label label">Salads</h2>
			<ul class="link-list">
				<?
					foreach ($salad_recipes as $key => $salad_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $salad_value['Slug'] ?>&type=<?= $salad_value['Type'] ?>">
								<?= $salad_value['Title'] ?>
							</a>
						</li>
				<?
					}
				?>
			</ul>
		</section>

		<section id="section-soups" class="container group">
			<h2 class="soups heading-label label">Soups</h2>
			<ul class="link-list">
				<?
					foreach ($soup_recipes as $key => $soup_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $soup_value['Slug'] ?>&type=<?= $soup_value['Type'] ?>">
								<?= $soup_value['Title'] ?>
							</a>
						</li>
				<?
					}
				?>
			</ul>
		</section>

		<section id="section-entrees" class="container group">
			<h2 class="entrees heading-label label">Entrees</h2>
			<ul class="link-list">
				<?
					foreach ($entree_recipes as $key => $entree_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $entree_value['Slug'] ?>&type=<?= $entree_value['Type'] ?>">
								<?= $entree_value['Title'] ?>
							</a>
						</li>
				<?
					}
				?>
			</ul>
		</section>

		<section id="section-sides" class="container group">
			<h2 class="sides heading-label label">Sides</h2>
			<ul class="link-list">
				<?
					foreach ($sides_recipes as $key => $sides_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $sides_value['Slug'] ?>&type=<?= $sides_value['Type'] ?>">
								<?= $sides_value['Title'] ?>
							</a>
						</li>
				<?
					}
				?>
			</ul>
		</section>

		<section id="section-desserts" class="container group">
			<h2 class="desserts heading-label label">Desserts</h2>
			<ul class="link-list">
				<?
					foreach ($dessert_recipes as $key => $dessert_value) {
				?>
						<li>
							<a href="./recipes/?slug=<?= $dessert_value['Slug'] ?>&type=<?= $dessert_value['Type'] ?>">
								<?= $dessert_value['Title'] ?>
							</a>
						</li>
				<?
					}
				?>
			</ul>
		</section>
	</div>
	<? include './includes/footer.php' ?>
</body>
</html>
