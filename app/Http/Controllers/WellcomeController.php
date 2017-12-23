<?php
/**
 * Created by PhpStorm.
 * User: tient
 * Date: 24/12/2017
 * Time: 2:12
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WellcomeController extends Controller{
    public function index(){

    }
    public function show(){
        return view('info');
    }
}