@extends('errors::minimal')

@section('title', trans('core::messages.service_unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: trans('core::messages.in_maintenance')))
