<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('global.app')

@section('titlebar', 'Reset Password')

@section('brand', 'MiniMac')

@section('header_img', URL::asset('resource/img/post-bg.jpg'))

@section('title', 'User')

@section('subtitle', 'Reset Password')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">Email Address</label>
            <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        </div>

        <div class="row control-group">
            <p></p>
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
@endsection
