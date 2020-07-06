@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>L</span>atest
                <span>M</span>obiles</h3>
            <!-- //tittle heading -->

            <div class="row">

                    {{-- Left content starts --}}
                    <div class="col-lg-2" id="padding-test">
                        <div class="nav flex-column nav-pills sticky-top" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            
                          <a class="nav-link active border-bottom bg-secondary" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Brand One</a>
                          <a class="nav-link active border-bottom bg-secondary" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Brand Two</a>
                          <a class="nav-link active border-bottom bg-secondary" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Brand Three</a>
                         

                      </div>{{-- 
                      <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div>
                      </div> --}}

                  </div>
                    {{-- Left content ends --}}
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-10">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>
                            <div class="row">
                                @foreach($mobiles as $mobile)
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">

                                            <img src="{{ asset($mobile->file) }}" alt="xxx" class="img-responsive" height="300px" width="250px">

                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href= "{{ route('mobilePhone-detail', ['id'=>$mobile->id]) }}" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">{{ $mobile->mobile_name }}</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">{{ $mobile->price }}</span>
                                            </div>
{{--                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                                <form action="#" method="post">--}}
{{--                                                    <fieldset>--}}
{{--                                                        <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                        <input type="hidden" name="add" value="1" />--}}
{{--                                                        <input type="hidden" name="business" value=" " />--}}
{{--                                                        <input type="hidden" name="item_name" value="Samsung Galaxy J7" />--}}
{{--                                                        <input type="hidden" name="amount" value="200.00" />--}}
{{--                                                        <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                        <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                        <input type="hidden" name="return" value=" " />--}}
{{--                                                        <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                        <input type="submit" name="submit" value="See Details" class="button btn" />--}}
{{--                                                    </fieldset>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

