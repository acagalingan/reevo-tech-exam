<?php

namespace App\Http\Controllers;

use App\Traits\Calculateable;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    use Calculateable;

    public function index(array $args = [])
    {
        if(isset($args['result'])) {
            $this->result = $args['result'];
        }
        return view("calculator.index");
    }

    public function calculate(Request $request)
    {
        $operandA = trim($request->inputA);
        $operandB = trim($request->inputB);
        $operation = trim($request->operation);

        $this->validateValues($operandA, $operation, $operandB);

        if($operation == "sqrt") {
            $operandB = null;
        }

        $result = $this->compute($operandA, $operation, $operandB);

        return view("calculator.results", ['result' => $result]);

    }
}
