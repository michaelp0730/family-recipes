<?
    $page_title = 'Pellegrini Page | Family Recipes';
    $css_path = './app.css';

    $breakfast_file = file_get_contents("./json/breakfast.json");
    $salads_file = file_get_contents("./json/salads.json");
    $soups_file = file_get_contents("./json/soups.json");
    $entrees_file = file_get_contents("./json/entrees.json");
    $sides_file = file_get_contents("./json/sides.json");
    $desserts_file = file_get_contents("./json/desserts.json");

    $breakfast_json = json_decode($breakfast_file, true);
    $salads_json = json_decode($salads_file, true);
    $soups_json = json_decode($soups_file, true);
    $entrees_json = json_decode($entrees_file, true);
    $sides_json = json_decode($sides_file, true);
    $desserts_json = json_decode($desserts_file, true);

    if( isset($_GET['recipes-search']) ) {
        $search_val = strtolower(htmlentities($_GET['recipes-search']));
    }

    include './includes/head.php';
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

        <section id="section-breakfast" class="container group">
            <h2 class="breakfast heading-label label">Breakfast</h2>
            <ul class="link-list">
                <?
                    foreach ($breakfast_json as $key => $breakfast_value) {
                        if (!$search_val || strpos(strtolower($breakfast_value['title']), $search_val) !== false) {
                ?>
                        <li>
                            <a href="./recipes/?slug=<?= $breakfast_value['slug'] ?>&type=<?= $breakfast_value['type'] ?>">
                                <?= $breakfast_value['title'] ?>
                            </a>
                        </li>
                <?
                        }
                    }
                ?>
            </ul>
        </section>

        <section id="section-salads" class="container group">
            <h2 class="salads heading-label label">Salads</h2>
            <ul class="link-list">
                <?
                    foreach ($salads_json as $key => $salad_value) {
                        if (!$search_val || strpos(strtolower($salad_value['title']), $search_val) !== false) {
                ?>
                    <li>
                        <a href="./recipes/?slug=<?= $salad_value['slug'] ?>&type=<?= $salad_value['type'] ?>">
                            <?= $salad_value['title'] ?>
                        </a>
                    </li>
                <?
                        }
                    }
                ?>
            </ul>
        </section>

        <section id="section-soups" class="container group">
            <h2 class="soups heading-label label">Soups</h2>
            <ul class="link-list">
            <?
                foreach ($soups_json as $key => $soup_value) {
                    if (!$search_val || strpos(strtolower($soup_value['title']), $search_val) !== false) {
            ?>
                <li>
                    <a href="./recipes/?slug=<?= $soup_value['slug'] ?>&type=<?= $soup_value['type'] ?>">
                        <?= $soup_value['title'] ?>
                    </a>
                </li>
            <?
                    }
                }
            ?>
            </ul>
        </section>

        <section id="section-entrees" class="container group">
            <h2 class="entrees heading-label label">Entrees</h2>
            <ul class="link-list">
                <?
                    foreach ($entrees_json as $key => $entree_value) {
                        if (!$search_val || strpos(strtolower($entree_value['title']), $search_val) !== false) {
                ?>
                    <li>
                        <a href="./recipes/?slug=<?= $entree_value['slug'] ?>&type=<?= $entree_value['type'] ?>">
                            <?= $entree_value['title'] ?>
                        </a>
                    </li>
                <?
                        }
                    }
                ?>
            </ul>
        </section>

        <section id="section-sides" class="container group">
            <h2 class="sides heading-label label">Sides</h2>
            <ul class="link-list">
                <?
                    foreach ($sides_json as $key => $side_value) {
                        if (!$search_val || strpos(strtolower($side_value['title']), $search_val) !== false) {
                ?>
                    <li>
                        <a href="./recipes/?slug=<?= $side_value['slug'] ?>&type=<?= $side_value['type'] ?>">
                            <?= $side_value['title'] ?>
                        </a>
                    </li>
                <?
                        }
                    }
                ?>
            </ul>
        </section>

        <section id="section-desserts" class="container group">
            <h2 class="desserts heading-label label">Desserts</h2>
            <ul class="link-list">
                <?
                    foreach ($desserts_json as $key => $dessert_value) {
                        if (!$search_val || strpos(strtolower($dessert_value['title']), $search_val) !== false) {
                ?>
                    <li>
                        <a href="./recipes/?slug=<?= $dessert_value['slug'] ?>&type=<?= $dessert_value['type'] ?>">
                            <?= $dessert_value['title'] ?>
                        </a>
                    </li>
                <?
                        }
                    }
                ?>
            </ul>
        </section>
    </div>
    <? include './includes/footer.php' ?>
</body>
</html>