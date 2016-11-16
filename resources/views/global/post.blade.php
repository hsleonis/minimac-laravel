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
    <div class="post-content">
        {!! $post->content !!}
    </div>
    <div class="post-tags">
        @if($post->tags)
            <ul>
            @foreach(explode(',', $post->tags) as $tag)
                <li class="tag"><a title="{{ $tag }}" href="#">{{ $tag }}</a></li>
            @endforeach
            </ul>
        @endif
    </div>
    <div class="col-xs-6 comments-link">
        <span><a title="Comment" href="{{ URL::to('post/'.$post->slug) }}#comments"><i class="ion-ios-chatbubble-outline disqus-comment-count" data-disqus-url="{{ URL::to('post/'.$post->slug) }}"></i></a></span>
    </div>
    <div class="col-xs-6 post-share">
        <div class="post-share-inner pull-right">
            <span><a title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ URL::to('post/'.$post->slug) }}" target="_blank"><i class="ion-social-facebook-outline"></i></a></span>
            <span><a title="Share on Twitter" href="https://twitter.com/home?status={{ URL::to('post/'.$post->slug) }}" target="_blank"><i class="ion-social-twitter-outline"></i></a></span>
            <span><a title="Share on Google Plus" href="https://plus.google.com/share?url={{ URL::to('post/'.$post->slug) }}" target="_blank"><i class="ion-social-googleplus-outline"></i></a></span>
        </div>
    </div>
    <div id="comments" class="col-sm-12">
        @include('shared.disqus')
    </div>
@endsection