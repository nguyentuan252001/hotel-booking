@extends('client.share.master')
@section('content')
    <div class="wrapper">
        @include('client.share.slide')
    </div>
    <!-- ========== ABOUT ========== -->
    <section class="about gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h4 class="text-uppercase">Hotel Himara. since 1992</h4>
                        <p class="section-subtitle">High quality accommodation services</p>
                    </div>
                    <div class="info-branding">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic
                            voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere
                            modi tempora ducimus enim dicta laborum esse aliquam rem
                            assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga.
                            Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt
                            suscipit dolores veritatis minus quam atque non autem quasi
                            consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat
                            assumenda.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background-image: url('https://preview.eagle-themes.com/html/himara/images/about-card.jpg');
                                background-size: cover;
                                min-height: 400px;
                                text-align: center;
                                position: relative;
                                padding: 5px;
                                border-radius: 2px;"
                        class="brand-info">
                        <div class="inner">
                            <div class="content">
                                <img src="/client/images/logo-big-transparent.svg" width="100" alt="Image">
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h5 class="title">LUXURY HOTEL</h5>
                                <p class="mt20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste
                                    suscipit voluptates architecto nemo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== ROOMS ========== -->
    <section class="rooms">
        <div class="container">
            <div class="section-title">
                <h4>OUR ROOMS</h4>
                <p class="section-subtitle">Our favorite rooms</p>
                <a href="/list-room" class="view-all">View all rooms</a>
            </div>
            <div class="row">
                @foreach ($phong as $value)
                    <div class="col-md-4">
                        <div class="room-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="/detail-room/{{ $value->id }}">
                                    <img src="{{ $value->hinh_anh }}" class="img-fluid" alt="Image"
                                        style="height: 300px">
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
                                <div class="room-price">{{ number_format($value->gia_mac_dinh, 0, '', ',') }} VNĐ/Night
                                </div>
                            </figure>
                            <div class="room-info">
                                <h2 class="room-title">
                                    <a href="/detail-room/{{ $value->id }}">{{ $value->ma_phong }}</a>
                                </h2>
                                <p>Enjoy our {{ $value->ma_phong }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ========== GALLERY ========== -->
    <section class="gallery">
        <div class="container">
            <div class="section-title">
                <h4>HIMARA. GALLERY</h4>
                <p class="section-subtitle">Check out our image gallery</p>
                <a href="gallery.html" class="view-all">View gallery images</a>
            </div>
            <div class="gallery-owl owl-carousel image-gallery">
                <!-- ITEM -->
                @php
                    $images = explode(',', $gallery[0]->images);
                @endphp
                @foreach ($images as $key => $value)
                    <div class="gallery-item">
                        <figure class="gradient-overlay image-icon">
                            <a href="{{ $value }}">
                                <img src="{{ $value }}" alt="Image">
                            </a>
                            <figcaption>Swimming Pool</figcaption>
                        </figure>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ========== TESTIMONIALS ========== -->
    <section class="testimonials gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR GUESTS LOVE US</h4>
                <p class="section-subtitle">What our guests are saying about us</p>
            </div>
            <div class="owl-carousel testimonials-owl">
                @foreach ($review as $value)
                    <div class="item">
                        <div class="testimonial-item" style="height: 350px; width: 330px;">
                            <div class="author-img">
                                <img alt="Image" class="img-fluid" src="{{ $value->avatar }}"
                                    style="height: 80px; width: 80px;">
                            </div>
                            <div class="author">
                                <h4 class="name">{{ $value->name }}</h4>
                                <div class="location">{{ $value->city }}</div>
                            </div>
                            <div class="rating">
                                @for ($i = 0; $i < $value->rate; $i++)
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                @endfor
                                @for ($i = 0; $i < 5 - $value->rate; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                            </div>
                            <p>{{ $value->content }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ========== STAFF ========== -->
    <section class="staff">
        <div class="container">
            <div class="section-title">
                <h4>MEET THE STAFF</h4>
                <p class="section-subtitle">Our awesome staff make the difference</p>
                <a href="staff.html" class="view-all">View all staff</a>
            </div>
            <div class="staff-owl owl-carousel">
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff1.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Housekeeper</div>
                    </figure>
                    <div class="details">
                        <h5>Jeanette Owens</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff2.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Receptionist</div>
                    </figure>
                    <div class="details">
                        <h5>Henry Garrett</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff3.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Chef</div>
                    </figure>
                    <div class="details">
                        <h5>Tommy Alexander</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff4.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Hotel Manager</div>
                    </figure>
                    <div class="details">
                        <h5>Penny Soto</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff5.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Room Service</div>
                    </figure>
                    <div class="details">
                        <h5>Alex Cox</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff6.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Hotel Manager</div>
                    </figure>
                    <div class="details">
                        <h5>Alfredo Romero</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff7.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Marketing Advisor</div>
                    </figure>
                    <div class="details">
                        <h5>Glenda Gilbert</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="staff-item">
                    <figure>
                        <img src="https://preview.eagle-themes.com/html/himara/images/staff/staff8.jpg" class="img-fluid"
                            alt="Image">
                        <div class="position">Hotel Manager</div>
                    </figure>
                    <div class="details">
                        <h5>Sheila Carter</h5>
                        <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== INFO ========== -->
    <section class="info blue wave-white">
        <div class="container">
            <div class="section-title">
                <h4>ABOUT HOTEL HIMARA.</h4>
                <p class="section-subtitle">PROVIDING QUALITY SERVICES SINCE 1992</p>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-md-4 col-6">
                            <div class="countup-box box-shadow-005">
                                <i class="flaticon-hotel"></i>
                                <span class="number" data-count="50"></span>
                                <div class="text">Rooms</div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4 col-6">
                            <div class="countup-box box-shadow-005">
                                <i class="flaticon-tray"></i>
                                <span class="number" data-count="2"></span>
                                <div class="text">Restaurants</div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4 col-6">
                            <div class="countup-box box-shadow-005">
                                <i class="flaticon-bell-boy"></i>
                                <span class="number" data-count="18"></span>
                                <div class="text">Staffs</div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4 col-6">
                            <div class="countup-box box-shadow-005 nom">
                                <i class="flaticon-sports"></i>
                                <span class="number" data-count="3"></span>
                                <div class="text">Swimming Pools</div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4 col-6">
                            <div class="countup-box box-shadow-005 nom">
                                <i class="flaticon-screen"></i>
                                <span class="number" data-count="2"></span>
                                <div class="text">Conf. Rooms</div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4 col-6">
                            <div class="countup-box box-shadow-005 nom">
                                <i class="flaticon-slider"></i>
                                <span class="number" data-count="2"></span>
                                <div class="text">Playgrounds</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info-branding">
                        <h4 class="text-uppercase">High quality accommodation services</h4>
                        <p class="mt30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quos
                            perferendis, nihil unde tempora rem non delectus obcaecati quidem ad repudiandae qui eos
                            quaerat. Temporibus fuga harum non soluta, incidunt impedit vel blanditiis,
                            ab optio laborum illum distinctio aut facere?</p>
                        <div class="providers">
                            <span>Recommended on:</span>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/client/images/providers/provider-1.png" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/client/images/providers/provider-2.png" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/client/images/providers/provider-3.png" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="/client/images/providers/provider-4.png" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== EVENTS ========== -->
    <section class="events">
        <div class="container">
            <div class="section-title">
                <h4>UPCOMING EVENTS</h4>
                <p class="section-subtitle">Check ou our upcoming events</p>
                <a href="events.html" class="view-all">View all events</a>
            </div>
            <div class="row">
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="event-item">
                        <div class="date">
                            <span class="event-calendar"></span>
                            <div class="day">31</div>
                            <div class="month">January</div>
                        </div>
                        <div class="details">
                            <h6 class="title">
                                <a href="event-details.html">Family Party</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        </div>
                        <div class="align-center">
                            <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="event-item">
                        <div class="date">
                            <span class="event-calendar"></span>
                            <div class="day">17</div>
                            <div class="month">Mars</div>
                        </div>
                        <div class="details">
                            <h6 class="title">
                                <a href="event-details.html">Traditional Music Festival</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        </div>
                        <div class="align-center">
                            <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="event-item">
                        <div class="date">
                            <span class="event-calendar"></span>
                            <div class="day">05</div>
                            <div class="month">July</div>
                        </div>
                        <div class="details">
                            <h6 class="title">
                                <a href="event-details.html">Summer Party</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        </div>
                        <div class="align-center">
                            <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="event-item">
                        <div class="date">
                            <span class="event-calendar"></span>
                            <div class="day">16</div>
                            <div class="month">August</div>
                        </div>
                        <div class="details">
                            <h6 class="title">
                                <a href="event-details.html">Wedding Party</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        </div>
                        <div class="align-center">
                            <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== OFFERS ========== -->
    <section class="offers">
        <div class="container">
            <div class="section-title">
                <h4>SPECIAL OFFERS</h4>
                <p class="section-subtitle">Special offers for special guests</p>
                <a href="offers.html" class="view-all">View all offers</a>
            </div>
            <div class="row">
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="offer-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="offer.html">
                                <img src="https://preview.eagle-themes.com/html/himara/images/offers/offer1.jpg"
                                    class="img-fluid" alt="Image">
                            </a>
                        </figure>
                        <div class="ribbon">
                            <span>HOT OFFER</span>
                        </div>
                        <div class="offer-price uppercase">
                            5 nights for €1,875
                        </div>
                        <h3 class="offer-title">
                            <a href="offer.html">All-Inclusive Honeymoon Package</a>
                        </h3>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="offer-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="offer.html">
                                <img src="https://preview.eagle-themes.com/html/himara/images/offers/offer2.jpg"
                                    class="img-fluid" alt="Image">
                            </a>
                        </figure>
                        <div class="ribbon">
                            <span>HOT OFFER</span>
                        </div>
                        <div class="offer-price uppercase">
                            8 nights for €2,000
                        </div>
                        <h3 class="offer-title">
                            <a href="offer.html">All-Inclusive Family Package</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== CONTACT V2 ========== -->
    <section class="contact-v2 gray">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-title">
                        <h4>GET IN TOUCH</h4>
                        <p class="section-subtitle">Get in touch</p>
                    </div>
                    <ul class="contact-details">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Lorem ipsum dolor, 25, Himara
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            Phone: +1 888 123 4567
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            Fax: +1 888 123 4567
                        </li>
                        <li>
                            <i class="fa fa-globe"></i>
                            Web: www.hotelhimara.com
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            Email:
                            <a href="mailto:info@site.com">contact@hotelhimara.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Say hello</p>
                    </div>
                    <div id="app_message">
                        <form id="contact-form" name="contact-form">
                            <div class="form-group">
                                <input class="form-control" v-model="contact_us.name" placeholder="Your Name"
                                    type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" v-model="contact_us.email" type="email"
                                    placeholder="Your Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" v-model="contact_us.message" placeholder="Your Message"></textarea>
                            </div>
                            <button class="btn" type="submit" v-on:click="sendMessage()">
                                <i class="fa fa-location-arrow"></i>Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app_message',
            data: {
                contact_us: {},
            },
            methods: {
                sendMessage() {
                    axios
                        .post('/send-contact-us', this.contact_us)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
            }
        });
    </script>
@endsection
