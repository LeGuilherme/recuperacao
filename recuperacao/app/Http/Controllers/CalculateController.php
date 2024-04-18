<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculate($operation, $num1, $num2)
    {
        switch($operation)
        {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                if($num2 == 0)
                {
                    echo "<h1>Não é possível dividir por 0</h1>";
                }
                else
                {
                    $result = $num1 / $num2;
                }
            default:
                $result = "Operação desconhecida";
        }

        return view('calculate', ['result' => $result]);
    }
}
