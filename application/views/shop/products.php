<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Shop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/products.css');  ?>">
    <style>
        body {
            margin: 0px;
            background-color: whitesmoke;
        }

        :focus {
            outline: none;
        }

        body * {
            overflow: hidden;
            box-sizing: border-box;
            /* outline: 1px solid red; */
        }

        header {
            background-color: black;
            padding: 2px;
        }

        header * {
            display: inline-block;
            margin: 0px;
            font-size: 20px;
            padding: 5px;
            color: white;
            text-decoration: none;
        }

        header a.cart {
            float: right;
            font-size: 15px;
        }

        form input {
            height: 35px;
            vertical-align: top;
        }

        form {
            text-align: center;
            padding: 10px;
            background-color: white;
            margin: 0px;
        }

        form input[type=search] {
            width: 60%;
            background-color: silver;
            border: none;
        }

        form input[type=image] {
            width: 3%;
            background-color: lightblue;
        }

        aside {
            margin-left: 5%;
            display: inline-block;
            width: 15%;
            background-color: whitesmoke;
        }

        aside h1 {
            font-size: 20px;
        }

        aside * {
            margin: 0px;
            display: block;
            text-decoration: none;
            color: black;
            font-size: 13px;
            padding: 2px;
        }

        /* hover in a element */
        aside a:hover {
            background-color: silver;
        }

        div.container {
            background-color: whitesmoke;
            margin-right: 5%;
            vertical-align: top;
            display: inline-block;
            width: 74%;
        }

        div.container div.card {
            display: inline-block;
            width: 19%;
            margin: 5px 3px 3px 3px;
            padding: .5%;
            background-color: white;
            position: relative;
            top: 0px;
            transition: top ease 0.5s;
        }

        div.container div.card:hover {
            top: -10px;
        }

        div.container div.card img {
            width: 100%;
        }

        div.container div.card h1 {
            margin: 0px;
            font-weight: 100;
        }

        div.container div.card,
        aside.images img.sub_picture {
            cursor: pointer;
            display: table-cell;
        }

        img.recommendation {
            cursor: pointer;
        }

        div.container div.card h1 {
            font-size: 15px;
        }

        div.container div.card h1.price {
            text-align: right;
        }

        /* the code below is for the show page*/

        aside.images {
            background-color: white;
            width: 30%;
            min-height: 100px;
            padding: .5%;
        }

        aside.images img.main_picture {
            width: 100%;
            height: 50%;
        }

        aside.images img.sub_picture {
            width: 19%;
            display: inline-block;
            vertical-align: middle;
            outline: 0px;
        }

        div.container-show {
            padding: 1%;
            width: 54.67%;
            margin-right: 10%;
            display: inline-block;
            vertical-align: top;
        }

        div.container-show form {
            background-color: transparent;
        }

        footer {
            margin-left: 5%;
        }

        footer img {
            display: inline-block;
            width: 5%;
        }

        /*  white-space: pre-wrap;  /* <-- THIS PRESERVES THE LINE BREAKS */

        /* This is for the cart page */
        div.container-cart {
            margin: 5% 5%;
        }

        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-size: 20px;
        }

        table th,
        table td {
            padding: 5px;
        }

        table th {
            background-color: black;
            color: white;
            font-weight: 100;
        }

        table td {
            border-bottom: 1px solid black;
            font-size: 17px;
        }

        div.container-cart p,
        div.container-cart a {
            text-decoration: none;
            text-align: right;
            margin: 0px;
            margin-top: 10px;
            display: block;
        }

        div.container-cart table tr td a,
        div.container-cart table tr td p {
            color: black;
            display: inline-block;
            vertical-align: top;
            margin: 0;
        }

        div.container-cart a.redirect {
            float: right;
            color: white;
            background-color: silver;
            padding: 5px;
        }

        section {
            width: 50%;
        }

        section form {
            background-color: whitesmoke;
        }

        section form label,
        section form input {
            display: inline-block;
            height: 25px;
            padding: 5px;
        }

        section form label {
            width: 30%;
            text-align: right;
        }

        section form input {
            width: 69%;
        }

        section form h1 {
            text-align: left;
            display: block;
        }

        section form div.form_helper {
            display: flex;
            justify-content: flex-start;
        }

        section form input[type=checkbox] {
            width: 4%;

        }
    </style>
    <script>
        $(document).ready(function() {
            /* This changes the background color when an element with a class div is being hovered */
            $('.card').hover(function() {
                $(this).css('background-color', 'silver');
            }, function() {
                $(this).css('background-color', 'white');
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
            /* Get all categopries if document is ready */
            $.get('/products/get_categories', function(categories) {
                $('aside').html(categories);
            });
            /* Get all of he products aftert form submit */
            $('form').submit(function() {
                $(document).on('submit', 'form', function() {
                    $.post($(this).attr('action'), $(this).serialize(), function(products) {
                        $('div.container').html(products);
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