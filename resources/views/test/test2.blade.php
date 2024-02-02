@extends('layouts.layouts')

@section('title')

@endsection

@section('content')
    <h1>Start</h1>   
    <form class="mt-5" action="" method="post">
    @csrf 
        <div class="mb-3 mt-5">
            <label for="text" class="form-label">день недели2</label><br>
            <input type="text" name="day">
            <button type="submyt" class="btn btn-danger">отправить</button>   
        </div> 
    </form>

    @if(isset($dayOfWeek) && $day==6)
        <p>День недели: {{ $dayOfWeek }}</p>
    @endif
    @if(isset($dayOfWeek) && $day==7)
        <p>День недели: {{ $dayOfWeek }}</p>
    @endif

@endsection