<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
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

    public function create(){

        return view('workers.create');
    }

    public function store(StoreRequest $request,Worker $worker){
        $data = $request->validated();

        $worker->create($data);
        return redirect()->route('workers.index');
    }
}
