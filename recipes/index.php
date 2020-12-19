<?
    $slug = htmlspecialchars($_GET["slug"]);
    $type = htmlspecialchars($_GET["type"]);
    $json_file = file_get_contents("../json/" . $type . ".json");
    $recipes = json_decode($json_file, true);

    foreach ($recipes as $key => $value) {
        if ($value['slug'] == $slug) {
            $recipe = $value;
        }
    }
    $recipe_title = $recipe['title'];
    $page_title = $recipe_title . ' | PellegriniPage Recipes';
    $css_path = '../app.css';
    include '../includes/head.php';
?>

<body>
    <div class="wrapper recipe-details">
        <p>
            <a href="../index.php" title="Go home">
                <span class="link-icon">☚</span> Home
            </a>
        </p>

        <h1><?= $recipe_title ?></h1>

        <p>
            <span class="label <?= $recipe['type'] ?>"><?= $recipe['type'] ?></span>
        </p>

        <p class="recipe-description"><?= $recipe['about'] ?></p>

        <? if ($recipe['img']) { ?>
            <img src="<?= $recipe['img'] ?>" class="recipe-img" alt="" role="presentation" />
        <? } ?>

        <h3>Ingredients</h3>
        <ul class="ingredients">
            <? foreach ($recipe['ingredients'] as $ing_key => $ing_val) { ?>
                <li><?= $ing_val ?> </li>
            <? } ?>
        </ul>

        <h3 class="instructions-heading">Instructions</h3>
        <div class="instructions">
            <?
                $instructions_array = explode('##', $recipe['instructions']);
                foreach ($instructions_array as $step_num => $step_val) {
            ?>
                <p>
                    <span class="step-num">Step <?= $step_num + 1 ?></span>
                    <br />
                    <?= $step_val ?>
                </p>
            <? } ?>
        </div>
    </div>
    <? include '../includes/footer.php' ?>
</body>
</html>