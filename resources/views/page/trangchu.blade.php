@extends('master')
@section('content')
<div class="fullwidthbanner-container">
<div class="fullwidthbanner">
          <div class="bannercontainer" >
            <div class="banner" >
              <ul>
                @foreach($slide as $sl)
                <!-- THE FIRST SLIDE -->
                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                      <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                        </div>
                      </div>

                  </li>
                  @endforeach
          </div>
          </div>

          <div class="tp-bannertimer"></div>
        </div>
</div>
<!--slider-->
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h4>Sản phẩm MỚI!</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
            @foreach($new_product as $new)
              <div class="col-sm-3" style="margin-top : 39px">
                <div class="single-item">
                  @if($new->promotion_price!=0)
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                  @endif
                  <div class="single-item-header">
                    <a href="product.html"><img src="source/image/product/{{$new->image}}" width="270px" height="300px" alt=""></a>
                  </div>
                  <div class="single-item-body" style="padding-left:10px">
                    <p class="single-item-title" ><strong style="font-size:15px">{{$new->name}} </strong></p>
                    <p class="single-item-price">
                      @if($new->promotion_price == 0)
                      <span>{{$new->unit_price}} VND</span>
                      @else
                      <span class="flash-del">{{$new->unit_price}} VND</span>
                      <span class="flash-sale">{{$new->promotion_price}} VND</span>
                      @endif
                    </p>
                  </div>
                  <div class="single-item-caption " style="margin-top:3px; padding-left:10px" >
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
            <div class="row">{{$new_product->onEachSide(5)->links()}}</div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm SALE!!</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{count($sale_products)}}</p>
              <div class="clearfix"></div>
            </div>
            <div class="row">
            @foreach($sale_products as $sale)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                  <div class="single-item-header">
                    <a href="product.html"><img src="source/image/product/{{$sale->image}}" width="270px" height="300px" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$sale->name}}</p>
                    <p class="single-item-price">
                      @if($sale->promotion_price == 0)
                      <span>{{$sale->unit_price}} VND</span>
                      @else
                      <span class="flash-del">{{$sale->unit_price}} VND</span>
                      <span class="flash-sale">{{$sale->promotion_price}} VND</span>
                      @endif
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
            <div class="row">{{$new_product->onEachSide(5)->links()}}</div>
            <div class="space40">&nbsp;</div>
          </div> <!-- .beta-products-list -->
          <div class="space50">&nbsp;</div>
          <div class="beta-products-list">
            <h4>Tất cả</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{count($all_products)}}</p>
              <div class="clearfix"></div>
            </div>
            <div class="row">
            @foreach($all_products as $all)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                  <div class="single-item-header">
                    <a href="product.html"><img src="source/image/product/{{$all->image}}" width="270px" height="300px" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$all->name}}</p>
                    <p class="single-item-price">
                      @if($all->promotion_price == 0)
                      <span>{{$all->unit_price}} VND</span>
                      @else
                      <span class="flash-del">{{$all->unit_price}} VND</span>
                      <span class="flash-sale">{{$all->promotion_price}} VND</span>
                      @endif
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
            <div class="row">{{$new_product->onEachSide(5)->links()}}</div>
            <div class="space40">&nbsp;</div>
          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
</div> <!-- #content -->
@endsection
