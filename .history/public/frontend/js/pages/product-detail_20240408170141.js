$(document).ready(function () {
    $(".add-to-cart").click(function () {
        const id = $(this).data("id_product");
        alert(id);
        const cart_product_id = $("cart_product_id_" + id);
    });
});
