<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function task(){
        echo "Task Done complete";
    }
    public function otherTask(){
        echo "Do Other Task";
    }
}
