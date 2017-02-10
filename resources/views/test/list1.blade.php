@extends('layouts.main')
@section('title')
  달러익스텐즈드
@endsection


@section('content')

      @foreach($tasks as $t)
        <div>
          할일: {{$t['name']}},  기한: {{$t['due_date']}}
        </div>
      @endforeach



@endsection
