$(document).ready(function () {
    $(".add-to-cart").click(function () {
        const id = $(this).data("id_product");
        let cart_product_id = $(".cart_product_id_" + id).val();
        let cart_product_name = $(".cart_product_name_" + id).val();
        let cart_product_img = $(".cart_product_image_" + id).val();
        let cart_product_price = $(".cart_product_price_" + id).val();
        let cart_product_qty = $(".cart_product_qty_" + id).val();
        let _token = $("input[name='_token']").val();

        $.ajax({
            url: "{{route('addCart')}}",
            method: "POST",
            data: {
                cart_product_id: cart_product_id,
                cart_product_name: cart_product_name,
                cart_product_img: cart_product_img,
                cart_product_price: cart_product_price,
                cart_product_qty: cart_product_qty,
                _token: _token,
            },
            success: function (data) {
                console.log(data);
            },
            error: function (data, textStatus, errorThrown) {
                console.log(data);
            },
        });
    });
});
