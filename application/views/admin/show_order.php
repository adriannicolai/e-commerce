<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin.css'); ?>">
</head>

<body>
    <aside>
        <h3>Order ID: 1</h3>
        <h3>Customer Shipping Info:</h3>
        <h4>Name: <span>Bob</span></h4>
        <h4>address: <span>asdasdas</span></h4>
        <h4>State: <span>asdasds</span></h4>
        <h4>Zipcode: <span>asdasd</span></h4>
        <h3>Customer Billing Info</h3>
        <h4>Name: <span>Bob</span> </h4>
        <h4>address: <span>asdasdas</span></h4>
        <h4>State: <span>asdasds</span></h4>
        <h4>Zipcode: <span>asdasd</span></h4>
    </aside>
    <article>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>35</td>
                    <td>Cup</td>
                    <td>$9.99</td>
                    <td>2</td>
                    <td>$9.99</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Cup</td>
                    <td>$9.99</td>
                    <td>2</td>
                    <td>$9.99</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Cup</td>
                    <td>$9.99</td>
                    <td>2</td>
                    <td>$9.99</td>
                </tr>
            </tbody>
        </table>
        <p>Shipped </p>
        <p class="in_process">In Process</p>
        <p class="cancelled">Cancelled</p>
        <div class="receipt">
            <h4>Subtotal: $6867</h4>
            <h4>Shipping: $100</h4>
            <h4>Total Price: $9999</h4>
        </div>
    </article>

</body>

</html>