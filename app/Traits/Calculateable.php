<?php

namespace App\Traits;

use \Exception;

trait Calculateable {

	public function validateValues($operandA, $operation, $operandB)
	{
		$valid_operations = ["+", "-", "x", "/", "sqrt"];

		if(!in_array($operation, $valid_operations)) {
			throw new Exception("Invalid Operation: " . $operation);
		}

		if($operation = "sqrt") {
			if(!is_numeric($operandA) || $operandA < 0) {
				throw new Exception("Invalid Operand: " . $operandA);
			}
		} else {
			if(!is_numeric($operandA) || !is_numeric($operandB)) {
				throw new Exception("Invalid Operand");
			}
			if($operation == "/") {
				if($operandB == 0) {
					throw new Exception("Division by Zero error");
				}
			}
		}

		return true;	
    }

    public function compute($operandA, $operation, $operandB)
    {
    	$result = 0;

        switch($operation) {
        	case "+":
        		$result = $operandA + $operandB;
        		break;
        	case "-":
        		$result = $operandA - $operandB;
        		break;
        	case "x":
        		$result = $operandA * $operandB;
        		break;
        	case "/":
        		$result = $operandA / $operandB;
        		break;
        	case "sqrt":
        		$result = sqrt($operandA);
        		break;
        	default:
        		throw new Exception("Invalid Operation: " . $operation);
        		break;
        }

        return $result;

    }

}