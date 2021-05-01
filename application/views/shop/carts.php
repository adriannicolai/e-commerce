<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carts</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/products.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#form_helper_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('div.billing_information input').prop('readonly', true);
                    $('input[name=first_name_billing]').val($('input[name=first_name]').val());
                    $('input[name=last_name_billing]').val($('input[name=last_name]').val());
                    $('input[name=address_billing]').val($('input[name=address]').val());
                    $('input[name=address2_billing]').val($('input[name=address2]').val());
                    $('input[name=city_billing]').val($('input[name=city]').val());
                    $('input[name=state_billing]').val($('input[name=state]').val());
                    $('input[name=zipcode_billing]').val($('input[name=zipcode]').val());
                } else {
                    $('div.billing_information input').prop('readonly', false);
                }
            });
        });
    </script>
</head>

<body>
    <div class="container-cart">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Black Belt for staff</td>
                    <td>$19.99</td>
                    <td>
                        <p>1</p> <a href="update">update</a> <a href="">delete</a>
                    </td>
                    <td>$19.99</td>
                </tr>
            </tbody>
        </table>
        <p>Total: $49.98</p>
        <a class="redirect" href="/">Continue Shopping</a>
        <section>
            <h1>Shipping Information</h1>
            <form action="#" id="shipping_info">
                <label for="first_name">First name:</label>
                <input type="text" name="first_name">
                <label for="last_name">Last name:</label>
                <input type="text" name="last_name">
                <label for="address">Address:</label>
                <input type="text" name="address">
                <label for="address2">Address2:</label>
                <input type="text" name="address2">
                <label for="city">City:</label>
                <input type="text" name="city">
                <label for="state">State:</label>
                <input type="text" name="state">
                <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode">
                <div class="form_helper">
                    <input type="checkbox" id="form_helper_checkbox" name="same_shipping">
                    <label for="checkbox">Same as Shipping Adress
                </div>
                <div class="billing_information">
                    <h1>Billing Information</h1>
                    <label for="first_name">First name:</label>
                    <input type="text" name="first_name_billing">
                    <label for="last_name">Last name:</label>
                    <input type="text" name="last_name_billing">
                    <label for="address">Address:</label>
                    <input type="text" name="address_billing">
                    <label for="address2">Address2:</label>
                    <input type="text" name="address2_billing">
                    <label for="city">City:</label>
                    <input type="text" name="city_billing">
                    <label for="state">State:</label>
                    <input type="text" name="state_billing">
                    <label for="zipcode">Zipcode:</label>
                    <input type="text" name="zipcode_billing">
                </div>

            </form>

        </section>

    </div>

</body>

</html>