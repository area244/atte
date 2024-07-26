@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<div class="attendance__content">
  <div class="attendance__panel">
    <!--<ul class="attendance__panel-nav1">
      <li class="attendance__panel-item"></li>-->
        <form class="attendance__button" action="/attendance/workStart" method="post">
        @csrf
          <button class="attendance__button-submit" type="submit">勤務開始</button>
        </form>
        <br>
        <!--<li class="attendance__panel-item"></li>-->
        <form class="attendance__button" action="/attendance/workEnd" method="post">
        @csrf
          <button class="attendance__button-submit" type="submit">勤務終了</button>
        </form>
        <br>

     <!--<ul class="attendance__panel-nav2">
      <li class="attendance__panel-item"></li></ul>-->
        <form class="attendance__button" action="/attendance/breakStart" method="post">
        @csrf  
          <button class="attendance__button-submit" type="submit">休憩開始</button>
        </form>
        <br>

      <!--<li class="attendance__panel-item"></li>-->
        <form class="attendance__button" action="/attendance/breakEnd" method="post">
        @csrf
          <button class="attendance__button-submit" type="submit">休憩終了</button>
        </form>
  </div>
</div>
@endsection