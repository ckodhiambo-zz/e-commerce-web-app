var $j = jQuery.noConflict();
$(document).ready(function () {
    $('.addToCartBtn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('product-id').val();
        var product_quantity = $(this).closest('.product_data').find('qty-input').val();

        alert(product_id);
        alert(product_quantity);

    })
});
