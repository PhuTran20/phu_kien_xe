$(document).ready(function () {
    $(".add-to-cart").click(function () {
        var id = $(this).data("id_product");
        var cart_product_id = $(".cart_product_id_" + id).val();
        var cart_product_name = $(".cart_product_name_" + id).val();
        alert(cart_product_name);
    });
});
