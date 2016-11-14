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
    <span class="meta">Posted by <a href="#">{{ $post->user }}</a> on {{ $post->created_at }}</span>
@endsection

@section('content')
    {!! $post->content !!}
@endsection