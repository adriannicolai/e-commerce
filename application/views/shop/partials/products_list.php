<?php
foreach ($products as $product) {
?>
    <div class="card" product_id='<?= $product['product_id']; ?>'>
        <img src="<?= base_url('/user_guide/_images/'.$product['image']); ?>">
        <h1 class="price">$<?= $product['price']; ?></h1>
        <h1><?= $product['name']; ?></h1>
    </div>
<?php
}
?>