<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>

@extends('global.app')

@section('titlebar', 'Login')

@section('brand', 'MiniMac')

@section('header_img', URL::asset('resource/img/home-bg.jpg'))

@section('title', 'Admin Panel')

@section('subtitle', 'Login')

@section('content')
    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">E-Mail Address</label>
                <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
            <div class="form-group col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </div>
    </form>
    <p>
        Don't have an account? <a href="{{ url('/register') }}">Register</a>
        <br>
        <a href="{{ url('/password/reset') }}">Forgot password</a>
    </p>
@endsection
