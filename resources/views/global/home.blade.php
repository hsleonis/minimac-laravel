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

@section('header_img', 'resource/img/home-bg.jpg')

@section('title', 'MiniMac')

@section('subtitle', 'Minimal Laravel Blog')

@section('content')
    <div class="post-preview">
        <a href="post.php">
            <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
            </h3>
        </a>
        <p class="post-meta">Posted by <a href="#">ThemeAxe</a> on December 24, 2016</p>
    </div>
    <hr>
    <div class="post-preview">
        <a href="post.php">
            <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
            </h2>
        </a>
        <p class="post-meta">Posted by <a href="#">ThemeAxe</a> on December 18, 2016</p>
    </div>
    <hr>
    <div class="post-preview">
        <a href="post.php">
            <h2 class="post-title">
                Science has not yet mastered prophecy
            </h2>
            <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
            </h3>
        </a>
        <p class="post-meta">Posted by <a href="#">ThemeAxe</a> on November 24, 2016</p>
    </div>
    <hr>
    <div class="post-preview">
        <a href="post.php">
            <h2 class="post-title">
                Failure is not an option
            </h2>
            <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </h3>
        </a>
        <p class="post-meta">Posted by <a href="#">ThemeAxe</a> on October 8, 2016</p>
    </div>
    <hr>
    <!-- Pager -->
    <ul class="pager">
        <li class="next">
            <a href="#">Older Posts →</a>
        </li>
    </ul>
@endsection
