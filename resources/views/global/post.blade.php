<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('global.app')

@section('titlebar', $post->title)

@section('brand', 'MiniMac')

@section('header_img', $post->image)

@section('title', $post->title)

@section('subtitle', $post->subtitle)

@section('author')
    <span class="meta">Posted by <a href="#">{{ $post->user }}</a> on {{ $date_created }}</span>
@endsection

@section('content')
    {!! $post->content !!}
    <div class="post-tags">
        @if($post->tags)
            <ul>
            @foreach(explode(',', $post->tags) as $tag)
                <li class="tag"><a href="#">{{ $tag }}</a></li>
            @endforeach
            </ul>
        @endif
    </div>
@endsection