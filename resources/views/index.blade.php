@extends('layouts.app')
@section('title','The List of Tasks!')
@section('content')
<div>
    @forelse ($tasks as $task)
    <div><a href="{{route('tasks.show',['id'=>$task->id])}}">{{$task->title}}</a></div>
    @empty
    There are no tasks avaliable
    @endforelse
</div>
@endsection