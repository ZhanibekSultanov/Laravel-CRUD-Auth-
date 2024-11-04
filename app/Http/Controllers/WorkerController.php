<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(){
        $workers = Worker::all();

        return view('workers.index',compact('workers'));
    }

    public function show($worker){
        $worker = Worker::find($worker);

        return view('workers.show',compact('worker'));
    }
}
