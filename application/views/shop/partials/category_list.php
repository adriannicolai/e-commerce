<h1>Categories</h1>
<?php
foreach($categories as $category)
{
?>
    <a href="#"><?= $category['name']; ?></a>
<?php
}

?>