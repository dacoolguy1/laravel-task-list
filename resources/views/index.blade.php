@extends("layouts.app")

@section('title', "The List of tasks")



@section('content')
{{-- <div> --}}
    {{-- @if (count($tasks)) --}}
    <nav class="mb-4">
        <a href="{{route('tasks.create',)}}" class="link">Add a new task</a>
    </nav>
   
    @forelse ( $tasks as $task )
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id] )}}" @class(['font-bold', 'line-through' => $task->completed])>{{$task->title}}></a>
        {{$task->title}}</div>
    @empty
    <div>There are no tasks</div>
        
    @endforelse ($tasks as $task)
    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
        
    @endif      
    {{-- @endif --}}
{{-- </div> --}}
@endsection