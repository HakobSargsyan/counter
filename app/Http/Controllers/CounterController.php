<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CountRequest;
use InvalidArgumentException;
use Session;

class CounterController extends Controller
{
    /**
     * Increasing nesting function calls limit
     *
     */
    public function __construct(){
        ini_set('xdebug.max_nesting_level', 200);
    }

     /**
     * @param $request Array
     * @return counter()
     */
    public function newNumber(CountRequest $request){
        if($request->number >= 0 ){
            $count = $this->counter($request->number);
            return $this->showResult($count);
        }

        throw new InvalidArgumentException("Invalid argument,only positive Numbers");
    }

    /**
     * @param $number Number
     * @return result
     */
    private function counter($number){
        if($number <= 1){
            return $number;
        }else{
            return $this->counter($number - 1) + $number;
        }
    }

    /**
     * @param $count Number
     * @return \Illuminate\Http\Response
     */
    private function showResult($count){
         return view('counter.results',['count'=>$count]);
    }
}
