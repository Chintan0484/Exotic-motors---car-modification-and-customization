<?php
session_start();
include 'db.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Products</h2>
        <div class="gallery_section_2">
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img">
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            </div>
                            <h3 class="types_text"><?php echo $product['name']; ?></h3>
                            <p class="looking_text">Price: ₹<?php echo $product['price']; ?></p>
                            <label for="quantity-<?php echo $product['id']; ?>">Quantity:</label>
                            <input type="number" id="quantity-<?php echo $product['id']; ?>" name="quantity" value="1" min="1"><br>
                            <button class="add-to-cart" data-product-id="<?php echo $product['id']; ?>">Add to Cart</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var productID = $(this).data('product-id');
                var quantity = $('#quantity-' + productID).val();
                
                $.ajax({
                    url: 'add_to_cart.php',
                    type: 'POST',
                    data: {
                        product_id: productID,
                        quantity: quantity
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            });
        });
    </script>
</body>
</html>
