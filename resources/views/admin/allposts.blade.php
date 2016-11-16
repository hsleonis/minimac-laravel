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
        <table class="post-admin-table table table-striped">
            <thead>
            <tr>
                <th>Post</th>
                <th>View</th>
                <th>Edit</th>
                <th>Trash</th>
            </tr>
            </thead>
            <tbody>
        @foreach( $blogs as $blog)
                <tr>
                    <td class="post-admin-summery">
                        <h4>{{ $blog->title }}</h4>
                        <p>{{ $blog->subtitle }}</p>
                        <p></p>
                    </td>
                    <td class="text-center">
                        <a href="{{ URL::to('post/'.$blog->slug) }}"><span><i class="ion-eye"></i></span></a>
                    </td>
                    <td class="text-center">
                        <span><i class="ion-edit"></i></span>
                    </td>
                    <td class="text-center">
                        <span><i class="ion-close"></i></span>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
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