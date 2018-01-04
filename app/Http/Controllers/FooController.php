<?php

namespace App\Http\Controllers;

use App\Repository\FooRepository;
use Illuminate\Http\Request;

class FooController extends Controller
{

    public function foo(FooRepository $repository){
        return $repository->get(); 
    }
}
