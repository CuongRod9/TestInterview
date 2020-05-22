<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class TestInterview extends Controller
{
    // array
    public function arrayComparison($array1,$array2){
        if($array1 === array_intersect($array1, $array2) && $array2 === array_intersect($array2, $array1)) {
            return true;
        } else {
            return false;
        }
    }
    public function array(){
        Log::info($this->arrayComparison([1,2],[1,2]));
        return $this->arrayComparison([1,2],[1,2]);
    }
    // string
    public function normalize($string){
        $trim = trim($string);
        $str = preg_replace('/\s+/', ' ', $trim);
        return $str;
    }
    public function string(){
        Log::info($this->normalize("   ab  ----       -----  cd e   "));
        return $this->normalize("   ab  ----       -----  cd    e   ");
    }
    // Randomize an array of n elements
    public function random($number){
        $array = array();
        for($i = 1; $i<=$number;$i++){
            $array[] = $i;
        }
        for ($i = count($array) - 1; $i > 0; $i--) {
            $rand = rand(0,$number-1);
            [$array[$i], $array[$rand]] = [$array[$rand], $array[$i]];
        }
        return $array;
    }
    public function randArray(){
        return $this->random(6);
    }
}
