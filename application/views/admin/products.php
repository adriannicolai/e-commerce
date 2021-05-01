<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            outline: 1px solid red;
        }

        /* This code is fpr the admin login form*/
        form {
            outline: 1px solid black;
            width: 30%;
            margin: auto;
            margin-top: 50px;
            padding: 1%;
            background-color: white;
        }

        form label,
        form input {
            display: inline-block;
            vertical-align: top;
            margin-bottom: 5px;
        }

        form h3 {
            margin: 0px;
            margin-bottom: 5px;
        }

        form label {
            width: 30%;
        }

        form input {
            width: 68%;
        }

        form input[type=submit] {
            width: 30%;
            border: none;
            display: flex;
            justify-content: center;
            float: right;
            height: 25px;
            margin-top: 10px;
        }

        * header {
            background-color: darkred;
            padding: 2px;
        }

        /* This code is for the header*/
        header * {
            display: inline-block;
            margin: 0px;
            font-size: 20px;
            padding: 5px;
            color: white;
            text-decoration: none;
        }

        header a {
            font-size: 15px;
        }

        header a.logoff {
            float: right;
            font-size: 15px;
        }

        div.container {
            margin: 0 5%;
        }

        form.admin_navigation {
            width: 100%;
            outline: none;
        }

        form.admin_navigation input {
            width: 20%;
            height: 5%;
        }

        form.admin_navigation select {
            width: 20%;
            height: 5%;
            float: right;
        }

        div.container table {
            width: 100%;
            text-align: left;
            margin-top: 3%;
            border-collapse: collapse;
        }

        div.container table tbody tr td form {
            display: inline-block;
            width: 100%;
            margin: 0;
            outline: none;
        }

        div.container table tbody tr td form select {
            display: inline-block;
            width: 100%;
            margin: 0;
        }

        div.container table th,
        div.container table td {
            padding: 5px;
            font-weight: 100;
        }

        div.container table th {
            background-color: darkred;
            color: white;
        }

        div.container table td {
            border-bottom: 1px solid darkred;
        }

        /* The code below is for the show order page in the admin module */
        aside * {
            font-weight: 100;
            margin: 0;
            margin-top: 2%;
        }

        aside {
            padding: 1%;
            margin: 1% 5%;
            width: 25%;
            display: inline-block;
            background-color: silver;
        }

        aside h3 {
            margin-top: 5%;
            font-weight: bold;
            width: 55%;
        }

        article {
            margin-top: 1%;
            display: inline-block;
            margin-right: 5%;
            vertical-align: top;
            width: 59%;
        }

        article table {
            border-collapse: collapse;
            width: 100%;
        }

        article table * {
            padding: 5px;
            text-align: left;
            font-weight: 100;
        }

        article table th {
            color: white;
            background-color: darkred;
        }

        article table td {
            border-bottom: 1px solid darkred;
        }

        article p {
            color: white;
            padding: 10px;
            display: inline-block;
            background-color: lime;
        }

        article p.cancelled {
            background-color: red;
        }

        article p.in_process {
            background-color: limegreen;
        }

        article div.receipt {
            margin-top: 16px;
            float: right;
        }

        article div.receipt * {
            font-weight: 100;
            margin: 0;
        }

        /* All code here are for the products page */
        form.admin_navigation a {
            text-decoration: none;
            padding: 7px;
            float: right;
            color: white;
            background-color: lightseagreen;
            font-size: 15px;
        }

        /* The table css for the products page is on the dashboard part, I recycled my code */

        div.container table tbody td.product_image {
            width: 9%;
        }

        div.modal-body form {
            margin: 0px;
            width: 100%;
        }

        div.modal-body form * {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="" method="post" class="admin_navigation">
        <input type="search" name="search">
        <a href="#" data-toggle="modal" data-target="#myModal">Add new product</a>
    </form>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Inventory Count</th>
                    <th>Quantity sold</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product_image"><img src="<?= base_url('/user_guide/_images/keyboard.jpeg') ?>" height=100 width=100></td>
                    <td>1</td>
                    <td>Red Dragon keyboard</td>
                    <td>123</td>
                    <td>1000</td>
                    <td><a href="">edit</a> <a href="">delete</a></td>
                </tr>
                <tr>
                    <td class="product_image"><img src="<?= base_url('/user_guide/_images/search.png') ?>" height=100 width=100></td>
                    <td>1</td>
                    <td>Red Dragon keyboard</td>
                    <td>123</td>
                    <td>1000</td>
                    <td><a href="">edit</a> <a href="">delete</a></td>
                </tr>
                <tr>
                    <td class="product_image"><img src="<?= base_url('/user_guide/_images/keyboard.jpeg') ?>" height=100 width=100></td>
                    <td>1</td>
                    <td>Red Dragon keyboard</td>
                    <td>123</td>
                    <td>1000</td>
                    <td><a href="">edit</a> <a href="">delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data">
                        <label for="name">Name:</label>
                        <input type="text" name="name">
                        <label for="description">Description</label>
                        <textarea name="description"></textarea>
                        <label for="categories">Categories</label>
                        <select name="categories">
                            <option value="asdasd">dasdas</option>
                            <option value="sadasdsa">adas</option>
                        </select>
                        <input type="text" placeholder="Or add a new category">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>

</html>