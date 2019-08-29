<style>
  .content{
    border: 1px solid #f5f7f9;
    box-shadow: 0px 3px 66px -24px rgba(0, 0, 0, 0.2);
    background: white;
    height: 550px;
    top: 0px;
    overflow-y: scroll;
  }
  h3{
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
  }
  .detail img {
    transform: translateY(-17px);
    width: 150px;
    height: 150px;
    box-shadow: 0 0 10.32px 1.68px rgba(0,0,0,.2);
  }
  .detail{
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.2);
    height: 200px;
  }
  .detail p{
    font-size: 10px;
    color: #797979;
  }
</style>
@extends('user.layouts.master')
@section('title', 'Home Page')
@section('content')
<div class="container" style="margin-top: 100px">
  <h3 class="text-center mb-4">Your favorite books</h3>
  <div class="row">
    @for($i = 1; $i <= 3; $i ++)
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mt-5 detail">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="https://m.media-amazon.com/images/I/71fjVSk2aEL._SR500,500_.jpg" alt="">
            <p>555 Views</p>
            <p>
              <span class=><a class="compare text-dark" href="#" title="Read Now" style="font-size: 18px"><i class="bi bi-book " ></i></a></span>
              <span class="ml-3"><a title="Detail" style="font-size: 18px" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search text-dark"></i></a></span>
              <span class="ml-3"><a class="compare" style="font-size: 18px" href="#"><i class="bi bi-heart-beat text-dark" title="Favorite"></i></a></span>
            </p>

          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 right">
            <h5 style="font-size: 13px">Cô bé quàng khăn đỏ</h5>
            <p>-Pham trung Dung</p>
            <p>
             <span class="on"><i class="fa fa-star-o text-warning"></i></span>
             <span class="on"><i class="fa fa-star-o text-warning"></i></span>
             <span class="on"><i class="fa fa-star-o text-warning"></i></span>
             <span class="on"><i class="fa fa-star-o text-warning"></i></span>
             <span class="on"><i class="fa fa-star-o"></i></span>
           </p>
           <p>-111 votes<span class="compare ml-2" href="#"><i class="bi bi-heart-beat text-danger" title="Favorite"></i></a></span></p>
           <p>-2019/09/09</p>
         </div>
       </div>
     </div>
   </div>
   @endfor
 </div>
</div>

@endsection
@section('customjs')
<script>
  $(document).ready(function($) {

  });
</script>
@endsection
