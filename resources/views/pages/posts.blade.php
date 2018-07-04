@extends('index')

@section('content')

<div class="content-1330 center-relative">
    <div class="page-desc">
        Science cuts two ways, of course, its products can be used for both good and evil. But there’s no turning back from science. The early warnings about technological dangers also come from science.
    </div>
    <div class="clear"></div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="blog-holder block center-relative content-1330">

        <div class="post-border center-relative block"></div>

        @foreach($posts as $post)
          <article class="relative blog-item-holder center-relative">
              <div class="entry-date published">{{$post->created_at->format('d.m.Y')}}</div>
              <h2 class="entry-title">
                <a href="{{route('post', ['slug' => $post->slug])}}">{{$post['name_'.LaravelLocalization::getCurrentLocale()]}}</a>
              </h2>
              <div class="clear"></div>
          </article>
          <div class="post-border center-relative block"></div>
        @endforeach

    </div>                                                                                             
</div>

@endsection