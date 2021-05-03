<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Shop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/products.css');  ?>">
    <script>
        $(document).ready(function() {
            /* This code gets the price of the selected product and verifies thhe value of the input so it doen't go 0 or a negative number*/
            $('#quantity').val(1);
            $('#quantity').change(function() {
                var price = $('#price').attr('product_price');
                if ($('#quantity').val() <= 0) {
                    $('#quantity').val(1);
                    $('#price').val(price);
                } else {
                    $('#price').html('$' + (($(this).val()) * price).toFixed(2));
                }
            });
            /*This redirects the user to the selected product recommendation */
            function clickable_recommendation() {
                $('.recommendation').click(function() {
                    window.location = '/products/show/' + $(this).attr('product_id');
                });
            }
            /* if the document is loaded submit the form that gets all of the similar items  */
            $('#similar_items').submit(function() {
                $(document).on('submit', '#similar_items', function() {
                    $.post($(this).attr('action'), $(this).serialize(), function(similar_items) {
                        $('footer').html(similar_items);
                        clickable_recommendation();
                    });
                    return false;
                });
            });
            $('#similar_items').submit();
            /* Allows the large picture to be changed on click of an image */
            $('.sub_picture').click(function() {
                $('.main_picture').attr('src', $(this).attr('src'));
            });
        });
    </script>
</head>

<body>
    <aside class="images">
        <?php
        foreach ($product_images as $product_image) {
            if ($product_image['display_picture']) {
        ?>
                <img src="<?= base_url('/user_guide/_images/' . $product_image['image'] . ''); ?>" alt="<?= $product_image['image']; ?>" class="main_picture">
            <?php
            }
            ?>
            <img src="<?= base_url('/user_guide/_images/' . $product_image['image'] . ''); ?>" alt="<?= $product_image['image']; ?>" class="sub_picture">
        <?php
        }
        ?>
    </aside>
    <div class="container-show">
        <?php
        foreach ($product_infos as $product_info) {
        ?>
            <h1><?= $product_info['name']; ?></h1>
            <p><?= $product_info['description']; ?></p>

            <form action="#" method="post">
                <p id="price" product_price="<?= $product_info['price']; ?>">$<?= $product_info['price']; ?></p>
                <input type="number" id="quantity" name="quantity">
                <input type="submit" value="Buy Now">
            </form>
    </div>
    <form action="/products/get_similar_items" method="post" id="similar_items">
        <input type="hidden" name="selected_product" value="<?= $product_info['product_id']; ?>">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <input type="hidden" name="category_id" value="<?= $product_info['category_id']; ?>">
    </form>
<?php
        }
?>
<footer></footer>

</body>

</html>