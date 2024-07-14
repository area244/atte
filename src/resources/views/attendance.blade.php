@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<div class="attendance__content">
  <div class="attendance-table">
    <form class="form" action="/attendance" method="post">
    @csrf
      <table class="attendance-table__inner">
        <tr class="attendance-table__row">
          <th class="attendance-table__header">名前</th>
          <th class="attendance-table__header">勤務開始</th>
          <th class="attendance-table__header">勤務終了</th>
          <th class="attendance-table__header">休憩開始</th>
          <th class="attendance-table__header">勤務時間</th>
        </tr>
        <tr class="attendance-table__row">
          <td class="attendance-table__item">{{$name->getDetail()}}</td>
          <td class="attendance-table__item">{{$work_start->getDetail()}}</td>
          <td class="attendance-table__item">{{$work_end->getDetail()}}</td>
          <td class="attendance-table__item">{{$break_start->getDetail()}}</td>
          <td class="attendance-table__item">{{$break_end->getDetail()}}</td>
        </tr>
      </table>
    </form>
  </div>
</div>
@endsection