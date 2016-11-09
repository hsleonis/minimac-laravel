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

    {{-- Form start comment --}}
    {{ Form::open(array('url' => 'admin/savepost')) }}
        {!! csrf_field() !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array("placeholder" => "Title")) }}
        </div>
        <div class="form-group">
            {{ Form::label('subtitle', 'Subtitle') }}
            {{ Form::text('subtitle', null, array("placeholder" => "Subtitle")) }}
        </div>
        <div id="post-entry">
            {{ Form::textarea('content') }}
        </div>
        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::text('category', null, array("placeholder" => "Category")) }}
        </div>
        <div class="form-group">
            {{ Form::label('tags', 'Tags') }}
            {{ Form::text('tags', null, array("placeholder" => "Tags: Nature, Blog")) }}
        </div>
        {{ Form::submit('Publish Post', array('class' => 'btn btn-default')) }}

    {{ Form::close() }}
    {{-- Form end comment --}}

@endsection