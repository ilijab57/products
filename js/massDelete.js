$(document).ready(function(){

    $("#delete-product-btn").click(function(e){

        e.preventDefault()

        let productIds = [];
        $.each($("input:checkbox[name='deleteProduct']:checked"), function(){
            productIds.push($(this).val());
        })

        $.post("product-delete", {productIds}).then(function(data){
            let products = JSON.parse(data)
            $("#products_list").html("")
            displayProducts(products)
        })

    })

})