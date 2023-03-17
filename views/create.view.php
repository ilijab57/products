<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Add Product</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>

    <div class="container-fluid main-container">

        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="/">Product Add</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar-btns">
                          <button class="btn btn-primary" id="save-product-button" form="product_form">Save</button>
                          <a href="/" role="button" class="btn btn-danger">Cancel</a>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>

        </div>

        <div class="row">
            <div class="col-6">
                <form id="product_form">
                    <div class="row mb-3">
                      <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                      <div class="col-sm-6">
                        <input type="text" name="sku" class="form-control" id="sku">
                        <div id="uniqueSKU" class="error"></div>
                        <div id="skuRequired" class="error"></div>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="name" class="form-control" id="name">
                          <div id="nameRequired" class="error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                        <div class="col-sm-6">
                          <input type="text" name="price" class="form-control" id="price">
                          <div id="priceRequired" class="error"></div>
                          <div id="numericErr0" class="error"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="productType" class="col-sm-2 col-form-label">Type of Product</label>
                        <div class="col-sm-6">
                            <select class="form-select" name="type" id="productType">
                                <option disabled selected>Select product type</option>
                                <option value="dvd">DVD</option>
                                <option value="furniture">Furniture</option>
                                <option value="book">Book</option>
                              </select>
                              <div id="typeRequired" class="error"></div>
                              <div id="numericErr1" class="error"></div>
                        </div>
                    </div>

                    <div id="typeSpecificInputs">

                    </div>

                  </form>
            </div>
        </div>


        <div class="row footer-container">
            <div class="col-12">
                <footer class="text-center footer mt-5">
                    <strong>Scandiweb Test Assignment</strong>
                </footer>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> 
<script src="js/addProduct.js"></script> 
<script src="js/saveProduct.js"></script>   
</html>