$(document).ready(function(){
    $('.add-to-cart').click(function(){
        const productId = $(this).data('product-id');
        const quantity = $(this).prev('input').val();

        $.ajax({
            url: 'add_to_cart.php',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ product_id: productId, quantity: quantity }),
            success: function(response){
                alert(response.message);
            },
            error: function(){
                alert('Failed to add item to cart.');
            }
        });
    });
});
