@extends('layouts.app')
@section('content')
  <x-header></x-header>
  <x-sidebar></x-sidebar>
  <div class="content-wrapper">
    <router-view></router-view>
  </div>
  <x-ctrlbar></x-ctrlbar>
  <x-footer></x-footer>
@endsection