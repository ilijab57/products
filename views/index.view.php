<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Products List</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container-fluid main-container">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="/">Product List</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar-btns">
                         <a class="btn btn-primary" href="add-product" id="add-product-button" role="button">Add</a>
                        <button class="btn btn-danger" id="delete-product-btn">Mass Delete</button>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>

        </div>

        <div class="row">
            <div class="grid gap-3" id="products_list">

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
<script src="js/displayProducts.js"></script>
<script src="js/productList.js"></script>
<script src="js/massDelete.js"></script>
</html>