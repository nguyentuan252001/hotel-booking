@extends('client.share.master')
@section('content')
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>ROOMS</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Rooms</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="rooms-grid-view">
        <div class="container">
            <div class="row">
                @foreach ($data as $key => $value)
                    @php
                        $hinh_anh = explode(',', $value->hinh_anh);
                        if (count($hinh_anh) > 0 && $hinh_anh[0] != '') {
                            $hinh_anh = $hinh_anh[0];
                        } else {
                            $hinh_anh = 'https://www.xrtoday.com/wp-content/uploads/2021/09/Hans-Elstner-Andrew-J-Nash-768x384.jpg';
                        }
                    @endphp

                    <div class="col-lg-4 col-md-6">
                        <div class="room-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="/detail-room/{{ $value->id }}">
                                    <img src="{{ $hinh_anh }}" class="img-fluid" alt="Image" style="height: 250px">
                                </a>
                                <div class="room-services">
                                    <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right"
                                        data-trigger="hover" data-content="Breakfast Included"
                                        data-original-title="Breakfast"></i>
                                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right"
                                        data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                    <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                        data-trigger="hover" data-content="Plasma TV with cable channels"
                                        data-original-title="TV"></i>
                                </div>
                                <div class="room-price">{{ number_format((float) $value->gia_mac_dinh, 0, '.', '') }} đ /
                                    night
                                </div>
                            </figure>
                            <div class="room-info">
                                <h2 class="room-title">
                                    <a href="room.html">{{ $value->ma_phong }}</a>
                                </h2>
                                <p>Enjoy our {{ $value->ma_phong }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="load-more">
                LOAD MORE ROOMS
            </div>
        </div>
    </main>
@endsection
