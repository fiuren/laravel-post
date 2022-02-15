@extends('layout')


@section('content')
<?php foreach ($posts as $post) : ?>
    <article>
  
<h1>
    <a href="/posts/<?= $post->slug; ?>">
    <?= $post ->title; ?>
</a>
    
</h1>

<p>
    Por <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
 </p>

<div>
    <?= $post->body; ?>
</div>

</article>
<?php endforeach; ?>

@endsection