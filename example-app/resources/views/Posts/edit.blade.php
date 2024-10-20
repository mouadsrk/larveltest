
@extends('layouts.app')



@section('title') create  @endsection
@section('content')

    <form method= "POST" action= "{{route("posts.update" ,  1)}}" >
        @csrf
        @method('PUT')
        <label>Title</label><br>
        <input name ='title' type='text' ><br>
        <label for="">Description</label><br>
        <textarea  name='description' type="text" name="" id=""> </textarea><br>
        <label>Post Creator</label><br>
        <select   name="post_creator" >
            <option value="1">Ahmed</option>
            <option value ="2"> Mohamed</option>
        </select><br>
        <input  class="btn btn-success"  type="submit" value="update">
    </form>
@endsection