<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin.css'); ?>">
</head>

<body>
    <form action="" method="post" class="admin_navigation">
        <input type="search" placeholder="search" name="search">
        <select name="order_type">
            <option value="show_all">Show All</option>
            <option value="sadas">asdasd</option>
        </select>
    </form>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Billing Address</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            <tbody>
                <tr>
                    <td><a href="/orders/show/1">100</a></td>
                    <td>Bob</td>
                    <td>today</td>
                    <td>asdsadsd</td>
                    <td>$19.99</td>
                    <td>
                        <form action="" method="post">
                            <select name="order_status">
                                <option value="asdasd">asdsad</option>
                                <option value="100">asds</option>
                            </select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="">100</a></td>
                    <td>Bob</td>
                    <td>today</td>
                    <td>asdsadsd</td>
                    <td>$19.99</td>
                    <td>
                        <form action="" method="post">
                            <select name="order_status">
                                <option value="asdasd">asdsad</option>
                                <option value="100">asds</option>
                            </select>
                        </form>
                    </td>
                </tr>
            </tbody>
            </thead>
        </table>
    </div>

</body>

</html>