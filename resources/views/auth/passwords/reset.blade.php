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
    <form role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">Email Address</label>
            <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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
            <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="control-label">Confirm Password</label>
            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">
                    Reset Password
                </button>
            </div>
        </div>
    </form>
@endsection
