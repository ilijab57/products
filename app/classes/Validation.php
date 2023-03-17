<?php 

namespace App\Classes;

use app\database\ProductQueries;

class Validation
{
    private array $errors = [];

    public function checkSKU(string $input)
    {
        $query = new ProductQueries();
        $count = count($query->findProduct("sku", $input));
        if($count >= 1)
        {
            $uniqueSkuErr = "SKU value must be unique";
            $this->errors["uniqueSKU"] = $uniqueSkuErr;
        }
    }

    public function checkEmptyValues(array $inputs)
    {
        foreach($inputs as $inputName => $value)
        {
            if(is_array($value))
            {
                if(in_array("", $value))
                {
                    $emptyFieldErr = ucfirst($inputName) ." required";
                    $this->errors["{$inputName}Required"] = $emptyFieldErr;
                }
            }
            if(empty($value))
            {
                $emptyFieldErr = ucfirst($inputName) ." required";
                $this->errors["{$inputName}Required"] = $emptyFieldErr;
            }
        }
    }

    public function checkNumericalValues(... $inputs)
    {
        foreach($inputs as $key => $input)
        {
            if(is_array($input))
            {
                foreach($input as $value)
                {
                    if(!is_numeric($value) || $value < 0)
                    {
                        $numericErr = "Input must be number greater than 0.";
                        $this->errors["numericErr{$key}"] = $numericErr;
                    }
                }
            } else if
            (!is_numeric($input) || $input < 0)
            {
                $numericErr = "Input must be number greater than 0.";
                $this->errors["numericErr{$key}"] = $numericErr;
            }
        }
        
    }

    public function getErrors()
    {
        return $this->errors;
    }
}



?>