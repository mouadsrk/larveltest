
@extends('layouts.app')



@section('title') create  @endsection
@section('content')

<form method="POST" action={{route('post.store')}}>
    @csrf
    <label>Title</label><br>
    <input><br>
    <label for="">Description</label><br>
    <textarea type="text" name="" id=""> </textarea><br>
    <label>Post Creator</label><br>
    <select name="" id="">
        <option value="1">Ahmed</option>
        <option value ="2"> Mohamed</option>
    </select><br>
    <input  class="btn btn-success"  type="submit" value="Submit">
@endsection

</form>