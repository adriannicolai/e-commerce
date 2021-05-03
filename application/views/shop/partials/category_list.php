<h1>Categories</h1>
<?php
foreach ($categories as $category) {
?>
    <a href="#" category_id="<?= $category['id']; ?>"><?= $category['category_name']; ?> (<?= $category['category_count']; ?>)</a>
<?php
}

?>
