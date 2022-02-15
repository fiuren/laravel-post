@extends('layout')
@section('content')
<article class="articulos">
    <h1>   {!!$post->title!!} </h1>

    <p>
        Por <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
     </p>

    <div>
        {!!$post->body!!}
    </div>
   </article>
   <a href="/">Volver</a>
@endsection