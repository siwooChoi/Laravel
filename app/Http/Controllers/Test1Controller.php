<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test1Controller extends Controller{

  public function list(){
    $tasks = [
            [ 'name'=>'1할일 음1',  'due_date' => '2017-02-09 14:34:35'],
            [ 'name'=>'2할일 음2',  'due_date' => '2017-02-09 14:34:35'],
            [ 'name'=>'3할일 음3',  'due_date' => '2017-02-09 14:34:35']
          ];

    return view('test.list')->with('tasks', $tasks);
  }

  public function param($id = 1, $arg = 'args'){
    return ['id' => $id, 'arg' => $arg];
  }

  public function param1(Request $req, $id = 1, $arg = 'args'){
      dump([
        'path' => $req->path(),
        'url' => $req->url(),
        'fullUrl' => $req->fullUrl(),
        'method' => $req->method(),
        'name' => $req->get('name'),
        'ajax' => $req->ajax(),
        'header' => $req->header(),
      ]);
  }
}
