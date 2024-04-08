const { method } = require("lodash");

$(document).ready(function () {
    $(".add-to-cart").click(function () {
        const id = $(this).data("id_product");
        let cart_product_id = $(".cart-product-id_" + id).val();
        let cart_product_name = $(".cart-product-name_" + id).val();
        let cart_product_img = $(".cart-product-image_" + id).val();
        let cart_product_price = $(".cart-product-price_" + id).val();
        let cart_product_qty = $(".cart-product-qty_" + id).val();
        let _token = $("input[name='_token']").val();
        $("input[name='_token]").val();
        alert(_token);
        // $.ajax({
        //     url: "{{url('/add-cart-ajax')}}",
        //     method: post,
        //     data: {
        //         cart_product_id: cart_product_id,
        //         cart_product_name: cart_product_name,
        //         cart_product_img: cart_product_img,
        //         cart_product_price: cart_product_price,
        //         cart_product_qty: cart_product_qty,
        //     },
        //     su,
        // });
    });
});
