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
            var price = 19.99;
            $('#quantity').val(1);
            $('#quantity').change(function() {
                if ($('#quantity').val() <= 0) {
                    $('#quantity').val(1);
                    $('#price').val(price)
                } else {
                    $('#price').html('$' + (($(this).val()) * price).toFixed(2));
                }
            });
            /*This redirects the user to the selected product recommendation */
            $('.recommendation').click(function() {
                window.location = '/products/show/' + $(this).attr('product_id');
            });
        });
    </script>
</head>
<script>
    $(document).ready(function() {
        $('.sub_picture').click(function() {
            $('.main_picture').attr('src', $(this).attr('src'));
        });
    });
</script>

<body>
    <aside class="images">
        <img src="<?= base_url('/user_guide/_images/keyboard.jpeg'); ?>" class="main_picture">
        <img src="<?= base_url('/user_guide/_images/search.png'); ?>" class="sub_picture">
        <img src="<?= base_url('/user_guide/_images/keyboard.jpeg'); ?>" class="sub_picture">
        <img src="<?= base_url('/user_guide/_images/keyboard.jpeg'); ?>" class="sub_picture">
        <img src="<?= base_url('/user_guide/_images/keyboard.jpeg'); ?>" class="sub_picture">
        <img src="<?= base_url('/user_guide/_images/keyboard.jpeg'); ?>" class="sub_picture">
    </aside>
    <div class="container-show">
        <h1>Red Dragon Yama k550</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ligula neque, ultrices vel sollicitudin in, hendrerit quis lacus. Curabitur id
            condimentum ex. Vivamus a sem porta, vehicula sapien quis, venenatis mi. Quisque suscipit et odio vitae fermentum. Etiam rhoncus pretium ligula
            sed dignissim. Nullam vel mi massa. Pellentesque vitae interdum arcu. Sed risus odio, ornare et imperdiet id, imperdiet id eros. Ut ac faucibus
            sem. In varius vitae justo non pulvinar. Fusce lobortis mi quis ipsum scelerisque, at venenatis lacus bibendum.
            Fusce dapibus condimentum dolor ac fermentum. Aliquam feugiat massa ex, eu fringilla augue tempus vitae. In semper non mauris eget imperdiet.</p>
        <form action="#" method="post">
            <p id="price">$19.00</p>
            <input type="number" id="quantity" name="quantity">
            <input type="submit" value="Buy Now">
        </form>
    </div>
    <footer>
        <h2>Similar Items</h2>
        <img src="<?= base_url('/user_guide/_images/search.png'); ?>" class="recommendation" product_id="1">
        <img src="<?= base_url('/user_guide/_images/keyboard.jpeg'); ?> " class="recommendation" product_id="2">

    </footer>

</body>

</html>