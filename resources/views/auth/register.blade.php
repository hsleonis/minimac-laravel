<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('global.app')

@section('titlebar', 'Register')

@section('brand', 'MiniMac')

@section('header_img', URL::asset('resource/img/post-bg.jpg'))

@section('title', 'Admin Panel')

@section('subtitle', 'User Registration')

@section('content')
    <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="control-label">Name</label>
            <input id="name" type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        </div>

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
            <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Password</label>
            <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        </div>

        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="password-confirm" class="control-label">Confirm Password</label>
            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
        </div>
        </div>

        <div class="row">
            <p></p>
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection
