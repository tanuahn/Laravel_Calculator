<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    const ADD = "+";
    const SUB = "-";
    const MUL = "*";
    const DIV = "/";

    public function caculate(Request $request)
    {
        $numberOne = $request->number_1;
        $numberTwo = $request->number_2;
        $result = 10;
        $calculation = $request->caculator;

        switch ($calculation){
            case self::ADD:
                $result = $numberOne + $numberTwo;
                break;
            case self::SUB:
                $result = $numberOne - $numberTwo;
                break;
            case self::MUL:
                $result = $numberOne * $numberTwo;
                break;
            case self::DIV:
                if ($numberTwo != 0){
                    $result = $numberOne / $numberTwo;
                } else
                    $result = "Số bị chia phải khác 0";
                break;
        }
        return view('result', compact('result'));
    }
}
