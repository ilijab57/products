$(document).ready(function(){


    $("#productType").on("change", function(){
        $("#typeSpecificInputs").html('')
        let selectedType = $(this).val()

        switch(selectedType) {
            case "dvd":
                $("#typeSpecificInputs").html(`<div id="dvdSpecificInput" class="typeInput">
                <div class="row mb-3">
                    <label for="dvdsize" class="col-sm-2 col-form-label">Size (MB)</label>
                    <div class="col-sm-6">
                      <input type="text" name="dimensions" class="form-control" id="dvdsize">
                      <div id="dimensionsRequired" class="error"></div>
                      <div class="mt-2 additionalProductInfo">* Please provide the size of the DVD in MBs</div>
                      </div>
                </div>
            </div>`)
                break;
            case "furniture":
                $("#typeSpecificInputs").html(`<div id="furnitureSpecificInput" class="typeInput">
                <div class="row mb-3">
                    <label for="furnitureHeight" class="col-sm-2 col-form-label">Height (CM)</label>
                    <div class="col-sm-6">
                      <input type="text" name="dimensions" class="form-control" id="furnitureHeight">
                      </div>
                </div>
                <div class="row mb-3">
                    <label for="furnitureWidth" class="col-sm-2 col-form-label">Width (CM)</label>
                    <div class="col-sm-6">
                      <input type="text" name="dimensions" class="form-control" id="furnitureWidth">
                      </div>
                </div>
                <div class="row mb-3">
                    <label for="furnitureLength" class="col-sm-2 col-form-label">Length (CM)</label>
                    <div class="col-sm-6">
                      <input type="text" name="dimensions" class="form-control" id="furnitureLength">
                      <div id="dimensionsRequired" class="error"></div>
                      <div class="mt-2 additionalProductInfo">* Please provide the dimensions in HxWxL format</div>
                      </div>
                </div>
            </div>`)
                break;
            case "book":
                $("#typeSpecificInputs").html(`<div id="bookSpecificInput" class="typeInput">
                <div class="row mb-3">
                    <label for="bookWeight" class="col-sm-2 col-form-label">Weight (KG)</label>
                    <div class="col-sm-6">
                      <input type="text" name="dimensions" class="form-control" id="bookWeight">
                      <div id="dimensionsRequired" class="error"></div>
                      <div class="mt-2 additionalProductInfo">* Please provide the weight of the book in KGs</div>
                      </div>
                </div>
            </div>`)
        }
    })





})