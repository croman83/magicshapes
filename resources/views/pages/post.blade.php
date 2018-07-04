@extends('index')

@section('content')

<div class="content-1330 center-relative">
        <article>
            <h1 class="entry-title">{{$post['name_'.LaravelLocalization::getCurrentLocale()]}}</h1>
            <div class="center-relative clear">
                <div class="entry-content">
                    <div class="content-wrap">
                        {!! $post['content_'.LaravelLocalization::getCurrentLocale()] !!}                            
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </article>
    </div>

@endsection