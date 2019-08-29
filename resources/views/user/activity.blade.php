<style>
  .content{
    border: 1px solid #f5f7f9;
    box-shadow: 0px 3px 66px -24px rgba(0, 0, 0, 0.2);
    background: white;
    height: 550px;
    top: 0px;
    overflow-y: scroll;
  }
</style>
@extends('user.layouts.master')
@section('title', 'Home Page')
@section('content')
<div class="container" style="margin-top: 100px">
  <h3 class="text-center mb-4">History Activities</h3>
  <div class="row">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 offset-1">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Bạn đã bài viết của user A
          <p class="bi bi-alarm-clock"><span class="ml-2">2019/09/09 12:00:09</span></p>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Bạn đã bài viết của user A
          <p class="bi bi-alarm-clock"><span class="ml-2">2019/09/09 12:00:09</span></p>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Bạn đã bài viết của user A
          <p class="bi bi-alarm-clock"><span class="ml-2">2019/09/09 12:00:09</span></p>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Bạn đã bài viết của user A
          <p class="bi bi-alarm-clock"><span class="ml-2">2019/09/09 12:00:09</span></p>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Bạn đã bài viết của user A
          <p class="bi bi-alarm-clock"><span class="ml-2">2019/09/09 12:00:09</span></p>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Bạn đã bài viết của user A
          <p class="bi bi-alarm-clock"><span class="ml-2">2019/09/09 12:00:09</span></p>
        </a>
    </div>
  </div>
</div>

@endsection
@section('customjs')
<script>
  $(document).ready(function($) {

  });
</script>
@endsection
