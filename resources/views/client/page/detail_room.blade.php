@extends('client.share.master')
@section('content')
    @php
    $hinh_anh = explode(',', $data->hinh_anh);
    @endphp
    @for ($i = 0; $i < 1; $i++)
        <div class="page-title gradient-overlay op5"
            style="background: url(&quot;{{ $hinh_anh[$i] }}&quot;) 0% 0% / cover no-repeat; margin-top: 0px;">
            <div class="container">
                <div class="inner">
                    <h1>SINGLE ROOM</h1>
                    <div class="room-details-price">
                        €89 / NIGHT
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="index.html">Rooms</a>
                        </li>
                        <li>Single Room</li>
                    </ol>
                </div>
            </div>
        </div>
    @endfor
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            @php
                                $hinh_anh = explode(',', $data->hinh_anh);
                            @endphp
                            @foreach ($hinh_anh as $key => $value)
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="{{ $value }}">
                                            <img class="img-fluid" src="{{ $value }}" alt="Image">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach

                        </div>
                        <div id="room-thumbs" class="room-thumbs owl-carousel">
                            @foreach ($hinh_anh as $key => $value)
                                <div class="item"><img class="img-fluid" src="{{ $value }}" alt="Image">
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <p class="dropcap">
                        {!! $data->mo_ta_phong !!}
                    </p>

                    <div class="section-title sm">
                        <h4>ROOM SERVICES</h4>
                        <p class="section-subtitle">Single Room Includes</p>
                    </div>
                    <div class="room-services-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-check"></i>Double Bed
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>80 Sq mt
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>3 Persons
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Free Internet
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-check"></i>Free Wi-Fi
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Breakfast Include
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Private Balcony
                                    </li>
                                    <li class="no">
                                        <i class="fa fa-times"></i>Free Newspaper
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li class="no">
                                        <i class="fa fa-times"></i>Flat Screen Tv
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Full Ac
                                    </li>
                                    <li class="no">
                                        <i class="fa fa-times"></i>Beach View
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Room Service
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea
                        <u>commodo consequat.</u>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit...
                    </p>
                    <p>Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea
                        <u>commodo consequat.</u>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit...
                    </p>

                    <div id="room-reviews" class="room-reviews">
                        <div class="section-title sm">
                            <h4>ROOM REVIEWS</h4>
                            <p class="section-subtitle">What our guests are saying about us</p>
                        </div>
                        <div class="rating-details">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="review-summary">
                                        <div class="average">4.9</div>
                                        <div class="rating">
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <small>Based on 3 ratings</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">

                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">5 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 91%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">91%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">4 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">3 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-2 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 8%"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">8%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">2 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">1 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-box">
                            <figure class="review-author">
                                <img src="#" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Marlene Simpson – February 03, 2018
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem
                                        esse quaerat eius labore repellendus, odit officia, quas provident
                                        reprehenderit magnam adipisci inventore quibusdam est architecto nisi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="similar-rooms">
                        <div class="section-title sm">
                            <h4>SIMILAR ROOMS</h4>
                            <p class="section-subtitle">Leave your review</p>
                        </div>
                        <div class="row">
                            @foreach ($list as $value)
                                @php
                                    $hinh_anh = explode(',', $value->hinh_anh);
                                @endphp
                                @for ($i = 0; $i < 1; $i++)
                                    <div class="col-lg-4">
                                        <div class="room-grid-item">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="room.html">
                                                    <img src="{{ $hinh_anh[$i] }}" class="img-fluid" alt="Image">
                                                </a>
                                                <div class="room-services">
                                                    <i class="fa-solid fa-mug-hot" aria-hidden="true"
                                                        data-toggle="popover" data-placement="right" data-trigger="hover"
                                                        data-content="Breakfast Included"
                                                        data-original-title="Breakfast"></i>
                                                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                        data-placement="right" data-trigger="hover"
                                                        data-content="Free WiFi" data-original-title="WiFi"></i>
                                                    <i class="fa fa-television" data-toggle="popover"
                                                        data-placement="right" data-trigger="hover"
                                                        data-content="Plasma TV with cable channels"
                                                        data-original-title="TV"></i>
                                                </div>
                                                <div class="room-price">€89 / night</div>
                                            </figure>
                                            <div class="room-info">
                                                <h2 class="room-title">
                                                    <a href="room.html">{{ $value->ma_phong }}</a>
                                                </h2>
                                                <p>Enjoy our {{ $value->ma_phong }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endforeach


                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="sidebar">

                        <aside class="widget noborder">
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title">BOOK YOUR ROOM</h3>
                                <div class="inner">
                                    <form id="booking-form">

                                        <div class="form-group">
                                            <input class="form-control" name="booking-email" type="email"
                                                placeholder="Your Email Address">
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="booking-roomtype" title="Select Room Type"
                                                data-header="Room Type" disabled="disabled">
                                                <option value="Single" selected="selected">Single Room</option>
                                                <option value="Double">Double Room</option>
                                                <option value="Deluxe">Deluxe Room</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control"
                                                    name="booking-checkin" placeholder="Slect Arrival & Departure Date"
                                                    readonly="readonly">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="panel-dropdown">
                                                <div class="form-control guestspicker">Guests
                                                    <span class="gueststotal"></span>
                                                </div>
                                                <div class="panel-dropdown-content">
                                                    <div class="guests-buttons">
                                                        <label>Adults
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="18+ years" data-original-title="Adults">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="booking-adults"
                                                                class="booking-guests" value="0">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="guests-buttons">
                                                        <label>Cildren
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="Under 18 years"
                                                                data-original-title="Children">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="booking-children"
                                                                class="booking-guests" value="0">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A
                                            ROOM</button>
                                    </form>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget widget-help">
                            <h4 class="widget-title">NEED HELP?</h4>
                            <div class="phone">
                                <a href="tel:18475555555">
                                    +1 888 123 4567
                                </a>
                            </div>
                            <div class="email">
                                <a href="/cdn-cgi/l/email-protection#6b0804051f0a081f2b03041f0e070302060a190a45080406"><span
                                        class="__cf_email__"
                                        data-cfemail="5e3d31302a3f3d2a1e36312a3b323637333f2c3f703d3133">[email&#160;protected]</span></a>
                            </div>
                        </aside>

                        <aside class="widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="latest-posts">

                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post1.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post2.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Are you ready to enjoy your
                                                        holidays</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post3.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post4.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                        Traveler</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post5.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Breakfast with coffee and orange
                                                        juic</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget noborder">
                            <img src="images/banner.jpg" class="img-fluid" alt="Image">
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
