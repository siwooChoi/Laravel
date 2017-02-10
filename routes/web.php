<?php
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  // 아래쪽 Route 는  config폴더의 app.php 안에 별칭으로 선언해져있음
Route::get('/', function () { //  get방식( url : /  , 익명함수_collback_closure() )
    return view('welcome');
    // return "test";
});

Route::get('test', function(){
  return "Test";
});


Route::get('test/testOftest', function(){
  return "TestOfTest";
});


Route::get('test2/{name?}', function($par = "1"){
  return "hello!".$par;
}); //-> where(['name'=>'정규표현식']);


// < <  request, response Test  > >
Route::get('test/php/{name?}', function($par = 'Test'){
  // 문자열 자체를 출력하는게 아니라 Respons객체를 반환
  $res = new Response('안녕하세요. '.$par, 200);
  $res->header('Content-Type', 'text/plain');
  return $res;
});


Route::get('test/php1/{name?}', function($name='ttt') {
  return response('또 너냐 =ㅅ = ... '.$name, 200)->header('Content-Type', 'text/plain');
});

Route::get('test/php2/{name?}', function($name='no_name') {
  return response('또 너냐2 =ㅅ = ... '.$name, 200)->header('Content-Type', 'text/plain')->header('Cache-Control', 'max_age='. 60*60 .", must-revalidate");
});

Route::get('test/json', function(){
  $data = ['name'=>'또 너냐!', 'gender'=>'알수없음'];  // json의 php표현법
  return response()->json($data);
});

Route::get('test/heredoc', function(){
  $content = <<<HTML

  <!Doctype html>
    <html>
      <head>
        <title>Heredoc히아독</title>
        <meta charset='UTF-8'>
      </head>

      <body>
        <h1>롸롸벨</h1>
        <h3>로아로아베루</h3>
      </body>
    </html>
HTML;
  return $content;
});

Route::get('test/heredoc1', function(){
  return View::make('test.heredoc');  // 라우터관련:  resources폴더의 views폴더의 test폴더의 heredoc.php 를 실행
});

Route::get('test/heredoc2', function(){
  return view('test.heredoc1');      //  뷰 관련  :  resources폴더의 views폴더의 test폴더의 heredoc.php 를 실행
});

Route::get('test/compact', function(){
  $task = ['name'=>'해야할일1', 'due_date'=>'2017-02-08 15:22:32'];
  return view('test.view', compact('task'));
});

// Route::get('test/compact', function(){
//   $task = ['name'=>'해야할일1', 'due_date'=>'2017-02-08 15:22:32'];
//   return view('test.view', array('task' => $task));
// });

Route::get('test/with', function(){
  $task = ['name'=>'해야할일2', 'due_date'=>'2017-02-08 15:22:32'];

  return view('test.view')->with('task', $task);

  // return view('test.view')->with('task', $task)
  //                         ->with('users', $user)
  //                         ->with('number', $number);   이런식으로 여러개의 값을 여러 변수의 형태로 던질수도 있다.
});

Route::get('test/alert', function(){
  $task = [ 'name' => '라라벨 예제 작성',
            'due_date' => '2017-02-09 14:34:35',
            'comment' => '<script>alert("welcome! =_= ")</script>'

          ];
  return view('test.alert')->with('task', $task);
});

Route::get('calc/{num}', function($num){
  return view('calc')->with('num', $num);
});

Route::get('test/list', function(){

  $tasks = [
          [ 'name'=>'할일1: 음1',  'due_date' => '2017-02-09 14:34:35'],
          [ 'name'=>'할일2: 음2',  'due_date' => '2017-02-09 14:34:35'],
          [ 'name'=>'할일3: 음3',  'due_date' => '2017-02-09 14:34:35']
        ];

  return view('test.list')->with('tasks', $tasks);
});

Route::get('test/list1', function(){

  $tasks = [
          [ 'name'=>'할일1: ㄱ1',  'due_date' => '2017-02-09 14:34:35'],
          [ 'name'=>'할일2: ㄴ2',  'due_date' => '2017-02-09 14:34:35'],
          [ 'name'=>'할일3: ㄷ3',  'due_date' => '2017-02-09 14:34:35']
        ];

  return view('test.list1')->with('tasks', $tasks);
});

// usage inside a laravel route
Route::get('imgtest', function(){
    $img = Image::make('img/foo.jpg')->resize(300, 200)->insert('img/test.png');

    return $img->response('jpg');
});

Route::get('test/list2', 'Test1Controller@list');

Route::get('test/param/{id?}/{arg?}',
           'Test1Controller@param');

 Route::get('test/param1/{id?}/{arg?}',
            'Test1Controller@param1');

//
