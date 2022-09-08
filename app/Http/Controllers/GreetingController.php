<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($time){
    switch($time){
    case "morning": 
        $time  = "朝";
        $greet = "おはようございます";
        break;
    case "afternonn":
        $timer = "昼";
        $greet = "こんにちは";
        break;
    case "evening":
        $time = "夕方";
        $greet = "こんばんは";
        break;
    case "night":
        $time = "夜";
        $greet = "おやすみ";
        break;
    }
    return view("greeting",["time" => $time, "greet" => $greet]);
}
    public function freedom($word){
    return view ("freedom", ["word" => $word]);
    }

    public function random(){
    $greets = ["おはよう", "こんにちは", "こんばんは", "おやすみ"];
    $greet = $greets[array_rand($greets, 1)];
    return view("random", ["greet" => $greet]);
    }
}
