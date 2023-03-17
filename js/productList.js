$(document).ready(function()
{
    $.get("../controllers/list.php", function(data)
    {
      console.log(data)
      let products = JSON.parse(data)
      displayProducts(products)
    })
})