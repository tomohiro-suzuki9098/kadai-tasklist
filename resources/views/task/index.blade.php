@extends('layouts.app')

@section('content')

<!--ここにコンテンツを書-->
 <div class="center jumbotron">
        <div class="text-center">
            <h1>タスクのメインページ</h1>
        </div>
    </div>

@if(Auth::check())
<h1>タスク一覧</h1>
　{{--@if(count($tasks)>0)--}}
   <table class="table table-striped">
       <thead>
           <tr>
               <th>id</th>
               <th>ステータス</th>
               <th>タスク</th>
           </tr>
       </thead>
        {!! link_to_route('tasks.create','新しいタスク',[],['class'=>'btn btn-primary'])!!}
       <tbody>
           @foreach($tasks as $task)
           <tr>
               <td>{!! link_to_route('tasks.show',$task->id,['task'=>$task->id])!!}</td>
               <td>{{ $task->status }}</td>
               <td>{{ $task->content }}</td>
           </tr>
           @endforeach
       </tbody>
   </table>
   @endif
   
  
@endsection