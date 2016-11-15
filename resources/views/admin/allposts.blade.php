<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('admin.main')

@section('titlebar', 'All Posts')

@section('brand', 'MiniMac')

@section('header_img', URL::asset('resource/img/about-bg.jpg'))

@section('title', 'All Posts')

@section('subtitle', 'Dashboard' )

@section('content')
    @if( count($blogs) > 0 )
        <div class="list-group">
        @foreach( $blogs as $blog)
            <a href="{{ URL::to('post/'.$blog->slug) }}" class="list-group-item">
                <h4 class="list-group-item-heading">{{ $blog->title }}</h4>
                <p class="list-group-item-text">{{ $blog->subtitle }}</p>
            </a>
        @endforeach
        </div>
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

    <!-- Pager -->
    <ul class="pager">
        @if ( $prv_page )
            <li class="previous">
                <a href="{{ URL::to( $prv_page ) }}">← Newer Posts</a>
            </li>
        @endif
        @if ( $next_page )
            <li class="next">
                <a href="{{ URL::to( $next_page ) }}">Older Posts →</a>
            </li>
        @endif
    </ul>
@endsection