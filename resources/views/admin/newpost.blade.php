<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('admin.main')

@section('titlebar', 'Add New')

@section('brand', 'MiniMac')

@section('header_img', URL::asset('resource/img/about-bg.jpg'))

@section('title', 'New Post')

@section('subtitle', 'Dashboard' )

@section('content')
    <h1>Add New Post</h1>
    <form action="" enctype="multipart/form-data" method="post">
        <div id="post-entry"><textarea name="post-data"></textarea></div>
        <button type="submit" name="post-button" class="btn btn-default">Publish Post</button>
    </form>
@endsection