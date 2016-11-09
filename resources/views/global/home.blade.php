<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('global.app')

@section('titlebar', 'Home')

@section('brand', 'MiniMac')

@section('header_img',  URL::asset('resource/img/home-bg.jpg') )

@section('title', 'MiniMac')

@section('subtitle', 'Minimal Laravel Blog')

@section('content')
    @if( count($blogs) > 0 )
        @foreach( $blogs as $blog)
            <div class="post-preview">
                <a href="{{ URL::to('post/'.$blog->id) }}">
                    <h2 class="post-title">
                        {{ $blog->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $blog->subtitle }}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ $blog->user }}</a> on {{ $blog->created_at }}</p>
            </div>
            <hr>
        @endforeach
    @else
        <div class="post-preview">
            <h2 class="post-title">
                No posts found!
            </h2>
            <h3 class="post-subtitle">
                Start a new blog.
            </h3>
        </div>
        <hr>
    @endif

    @if ($show_older)
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="{{ URL::to('page/') }}">Older Posts →</a>
            </li>
        </ul>
    @endif
@endsection
