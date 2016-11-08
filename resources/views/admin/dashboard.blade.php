<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('admin.main')

@section('titlebar', 'Dashboard')

@section('brand', 'MiniMac')

@section('header_img', URL::asset('resource/img/about-bg.jpg'))

@section('title', 'Dashboard')

@section('subtitle', 'Welcome '.Auth::user()->name.' !' )

@section('content')
    <p>Other settings will be here.</p>
    <p>You are logged in.</p>
@endsection