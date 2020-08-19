@extends('layouts.app')

@section('content')
   
    
        <div class="text-center">
            <h1>タスクのメインページ</h1>
        </div>
        @if(Auth::check())
   
                {{-- 投稿一覧 --}}
                @include('task.index')
        
  　　　　 @endif
    

@endsection