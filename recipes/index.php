<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include '../includes/get_recipes.php';
	$slug = htmlspecialchars($_GET['slug']);
	$recipe = get_recipe($slug);
	$recipe_title = $recipe[1];
	$recipe_type = $recipe[2];
	$page_title = $recipe_title . ' | PellegriniPage Recipes';
	$css_path = '../app.css';
	include '../includes/head.php';
?>

<body>
	<div class="wrapper recipe-details">
		<p>
			<a href="/family-recipes" title="Go home">
				<span class="link-icon">☚</span> Home
			</a>
		</p>

		<h1><?php echo $recipe_title ?></h1>

		<p>
			<span class="label <?php echo $recipe_type ?>"><?php echo $recipe_type ?></span>
		</p>

		<p class="recipe-description"><?php echo $recipe[3] ?></p>

		<?php if ($recipe[6]) { ?>
			<img src="<?php echo $recipe[6] ?>" class="recipe-img" alt="" role="presentation" />
		<?php } ?>

		<h3>Ingredients</h3>
		<ul class="ingredients">
			<?php
				$ingredients_array = explode('##', $recipe[4]);
				foreach ($ingredients_array as $ing_key => $ing_val) {
			?>
				<li><?php echo $ing_val ?> </li>
			<?php
				}
			?>
		</ul>

		<h3 class="instructions-heading">Instructions</h3>
		<div class="instructions">
			<?php
				$instructions_array = explode('##', $recipe[5]);
				foreach ($instructions_array as $step_num => $step_val) {
			?>
				<p>
					<span class="step-num">Step <?php echo $step_num + 1 ?></span>
					<br />
					<?php echo $step_val ?>
				</p>
			<?php } ?>
		</div>
	</div>
	<?php include '../includes/footer.php' ?>
	<script type="text/javascript">
		(function () {
			const headingEl = document.querySelector('h1');
			const headingArr = headingEl.innerText.split(' ');
			const span = document.createElement('span');
			const em = document.createElement('em');
			span.innerText = `${headingArr[0]} `;
			em.innerText = headingArr.splice(1).join(' ');
			headingEl.innerHTML = '';
			headingEl.appendChild(span);
			headingEl.appendChild(em);
		})();
	</script>
</body>
</html>
