$(document).ready(function()
{
    $("#product_form").submit(function(e)
    {
        e.preventDefault()

        let sku = $("#sku").val()
        let name = $("#name").val()
        let price = $("#price").val()
        let productType = $("#productType").val()

        let dimensionsCount = $("[name=dimensions]").length
        let dimensions

        if(dimensionsCount > 1)
        {
            dimensions = []
            $("[name=dimensions]").each(function(){
                dimensions.push($(this).val())
            })
        } else 
        {
            dimensions = $("[name=dimensions]").val()
        }
        
        let inputsData = {sku: sku, name: name, price:price, type: productType, dimensions: dimensions}
        console.log(inputsData)
        $.ajax({
            url: "/store-product",
            method: 'POST',
            data: inputsData,
            success: function(data){
                if(JSON.parse(data) === "saved")
                {
                    location.href = "/"
                } else 
                {
                    errors = JSON.parse(data)
                    console.log(errors)
                    $(".error").text("")
                    let keys = Object.keys(errors)
                    keys.forEach(key => {
                        $(`#${key}`).text(errors[key])
                    });
                }

            }
        })

    })
})