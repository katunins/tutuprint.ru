@extends('template')

@if (!Auth::user())
@include('signin')
@else 
@include('personal')
@endif