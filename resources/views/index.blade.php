@extends('layouts.master')

@section('head')
  <link href="/css/indexStyle.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
  <div id="circles">
    <a href="/about"><div class="circle" id="about">About Me</div></a>
    <a href="/books"><div class="circle" id="books">Books</div></a>
    <a href="/articles"><div class="circle" id="articles">Articles</div></a>
    <a href="/web"><div class="circle" id="web">Web Projects</div></a>
    <br><br>
    <a href="/media"><div class="circle" id="dls">Media Appearances</div></a>
    <a href="/ireland"><div class="circle" id="irish">Ireland</div></a>
    <a href="/britain"><div class="circle" id="british">Britain</div></a>
    <a href="http://blog.momoulton.com"><div class="circle" id="blog">Blog</div></a>
  </div>
@stop

@section('body')

@stop
