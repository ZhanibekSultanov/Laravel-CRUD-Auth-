<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
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

    public function edit(Worker $worker){
        return view('workers.edit',compact('worker'));
    }

    public function update(UpdateRequest $request,Worker $worker){
        $data = $request->validated();

        $worker->update($data);
        return redirect()->route('workers.show',$worker->id);
    }

    public function delete(Worker $worker){
        $worker->delete();

        return redirect()->route('workers.index');
    }

    public function trashed(){
        $workers = Worker::onlyTrashed()->get();

        return view('workers.trashed',compact('workers'));
    }

    public function restore($worker){
        $worker = Worker::withTrashed()->find($worker);

        $worker->restore();

        return redirect()->route('workers.trashed');
    }
}
