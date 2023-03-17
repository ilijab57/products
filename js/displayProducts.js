function displayProducts(products){


    products.forEach(product => {

      let unit = ""
      let measure = ""
      let image = ""
      switch(product.product_type_id)
      {
        case 1:
          measure = "Size"
          unit = " MB"
          image = "/assets/images/dvd.avif"
        break;
        case 2:
          measure = "Dimension"
          image = "/assets/images/furniture.avif"
        break;
        case 3:
          measure = "Weight"
          unit = "KG"
          image = "/assets/images/books.jpg"
      }

        $("#products_list").append(`<div class="g-col-12 g-col-sm-6 g-col-md-3 product-card">
        <div class="product-image" style="background-image:url(${image})"></div> 
        <div class="mb-3 form-check">
            <input type="checkbox" value="${product.id}" name="deleteProduct" class="form-check-input delete-checkbox">
          </div>
          <div class="text-center">
            <h3 class="product-info-title">Product Info:</h3>
            <div>${product.sku}</div>
            <div>${product.name}</div>
            <div>${product.price} $</div>
            <div><strong>${measure}: </strong>${product.size}${unit}</div>
          </div>                  
    </div>`)
    });
}