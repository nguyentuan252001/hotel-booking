<div class="slider">
    <div class="fullscreen-container">
        <div id="rev-slider-3" class="rev_slider" style="display:none; background: #444;" data-version="5.4.5">
            <ul>
                @foreach ($slides as $key => $value)
                    @if ($key == 0)
                        <li data-transition="slidingoverlayright">
                        @else
                        <li data-transition="slidingoverlayright" data-slotamount="7" data-easein="default"
                            data-easeout="default" data-masterspeed="1000">
                    @endif
                    <!-- MAIN IMAGE -->
                    <img src="{{ $value }}" alt="Image" title="Image" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                        data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle"
                        data-voffset="['-30','-30','-30','-30']" data-responsive_offset="on"
                        data-fontsize="['60','50','40','30']" data-lineheight="['60','50','40','30']"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">MODERN & SPACIOUS ROOMS
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle"
                        data-voffset="['45','45','45','45']" data-fontsize="['16', '16', '14', '12']"
                        data-lineheight="['16', '16', '14', '12']" data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3000" data-splitin="chars"
                        data-splitout="none" data-basealign="slide" data-responsive="off" data-elementdelay="0.05"
                        style="z-index: 9; font-weight: 400; color: #fff; font-family: Raleway;">Enjoy your holidays at
                        the Hotel Himara
                    </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- ========== BOOKING FORM ========== -->
    <div class="horizontal-booking-form booking-form-over-slider">
        <div class="container">
            <div class="inner box-shadow-007">
                <!-- ========== BOOKING NOTIFICATION ========== -->
                <div id="booking-notification" class="notification"></div>
                <form action="/booking-process" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Name
                                    <a href="#" title="Your Name" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please type your first name and last name">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-name" type="text" data-trigger="hover"
                                    placeholder="Write Your Name">
                            </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Email
                                    <a href="#" title="Your Email" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please type your email adress">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-email" type="email"
                                    placeholder="Write your Email">
                            </div>
                        </div>
                        <!-- ROOM TYPE -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Room Type
                                    <a href="#" title="Room Type" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please select room type">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <select class="form-control" name="booking-roomtype" title="Select Room Type"
                                    data-header="Room Type">
                                    @foreach ($data as $value)
                                        <option value="{{ $value->id }}">{{ $value->ma_phong }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- DATE -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Check-In/Out
                                    <a href="#" title="Check-In / Check-Out" data-toggle="popover"
                                        data-placement="top" data-trigger="hover"
                                        data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="text" class="datepicker form-control" name="booking-date"
                                    placeholder="Arrival & Departure" readonly="readonly">
                            </div>
                        </div>
                        <!-- GUESTS -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Guests
                                    <a href="#" title="Guests" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Please Select Adults / Children">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
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
                                                <input type="text" name="booking-adults" class="booking-guests"
                                                    value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                        <div class="guests-buttons">
                                            <label>Cildren
                                                <a href="#" title="" data-toggle="popover"
                                                    data-placement="top" data-trigger="hover"
                                                    data-content="Under 18 years" data-original-title="Children">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-children" class="booking-guests"
                                                    value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BOOKING BUTTON -->
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
