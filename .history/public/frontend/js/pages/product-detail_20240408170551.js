$(document).ready(function () {
    $(".add-to-cart").click(function () {
        const id = $(this).data("id_product");
        let cart_product_id = $(".cart-product_id_" + id).val();
        let cart_product_name = $(".cart-product_name_" + id).val();
        alert(cart_product_name);
    });
});
