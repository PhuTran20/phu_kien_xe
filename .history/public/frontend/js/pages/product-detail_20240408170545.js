$(document).ready(function () {
    $(".add-to-cart").click(function () {
        const id = $(this).data("id_product");
        let cart_product_id = $(".cartproduct_id_" + id).val();
        let cart_product_name = $(".cart_product_name_" + id).val();
        alert(cart_product_name);
    });
});
