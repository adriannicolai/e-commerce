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
            /* This changes the background color when an element with a class div is being hovered */
            $('.card').hover(function() {
                $(this).css('background-color', 'silver');
            }, function() {
                $(this).css('background-color', 'white');
                $(this).siblings('a').hide();
            });
            /* This changes the background color when an element with class navigatioon was hovered on */
            $('.navigation').hover(function() {
                $(this).css('background-color', 'silver')
            }, function() {
                $(this).css('background-color', 'whitesmoke');
            });
            $(document).on('click', '.card', function() {
                window.location = '/products/show/' + $(this).attr('product_id');
            });
        });
    </script>
</head>

<body>
    <form action="" class="search">
        <input type="search" name="search" placeholder="Search in Dojo shop">
        <input type="image" src="<?= base_url('/user_guide/_images/search.png'); ?>" height=20 width=20>
    </form>
    <aside>
        <h1>Categories</h2>
            <a class="navigation" href="#">Tshirts</a>
            <a class="navigation" href="#">Tshirts</a>
            <a class="navigation" href="#">Tshirts</a>
            <a class="navigation" href="#">Tshirts</a>
    </aside>
    <div class="container">
        <div class="card" product_id='1'>
            <img src="<?= base_url('/user_guide/_images/keyboard.jpeg') ?>">
            <h1 class="price">$19.99</h1>
            <h1>asds</h1>
        </div>
        <div class="card" product_id='2'>
            <img src="<?= base_url('/user_guide/_images/keyboard.jpeg') ?>">
            <h1 class="price">$19.99</h1>
            <h1>asdqwe qweqweqwews</h1>

        </div>
        <div class="card" product_id='3'>
            <img src="<?= base_url('/user_guide/_images/keyboard.jpeg') ?>">
            <h1 class="price">$19.99</h1>
            <h1>asds</h1>
        </div>
        <div class="card" product_id='4'>
            <img src="<?= base_url('/user_guide/_images/search.png'); ?>">
            <h1 class="price">$19.99</h1>
            <h1>asds</h1>
        </div>
        <div class="card" product_id='5'>
            <img src="<?= base_url('/user_guide/_images/search.png'); ?>">
            <h1 class="price">$19.99</h1>
            <h1>asds</h1>
        </div>
    </div>
</body>

</html>