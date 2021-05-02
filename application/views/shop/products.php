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
            function hover_change_color() {
                $('.card').hover(function() {
                    $(this).css('background-color', 'silver');
                }, function() {
                    $(this).css('background-color', 'white');
                });
            }

            /* This changes the background color when an element with class navigatioon was hovered on */
            $('.navigation').hover(function() {
                $(this).css('background-color', 'silver')
            }, function() {
                $(this).css('background-color', 'whitesmoke');
            });
            $(document).on('click', '.card', function() {
                window.location = '/products/show/' + $(this).attr('product_id');
            });
            /* Get all categopries if document is ready */
            $.get('/products/get_categories', function(categories) {
                $('aside').html(categories);
            });
            /* Get all of he products aftert form submit */
            $('form').submit(function() {
                $(document).on('submit', 'form', function() {
                    $.post($(this).attr('action'), $(this).serialize(), function(products) {
                        $('div.container').html(products);
                        hover_change_color();
                    });
                    return false;
                });
            });
            $('form').submit();
        });
    </script>
</head>

<body>
    <form action="/products/get_products" class="search" method="post">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <input type="search" name="search" placeholder="Search in Dojo shop">
        <input type="image" src="<?= base_url('/user_guide/_images/search.png'); ?>" height=20 width=20>
    </form>
    <aside>
    </aside>
    <div class="container">
    </div>
</body>

</html>