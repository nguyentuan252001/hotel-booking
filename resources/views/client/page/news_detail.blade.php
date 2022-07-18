@extends('client.share.master')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 260px">
            <!-- ENTRY -->
            <div class="col-lg-9 col-12">
                <article class="entry">
                    <figure class="post-thumbnail">
                        <img src="{{ $news->hinh_anh }}" alt="Image">
                    </figure>
                    <div class="post-details">
                        <h2 class="post-title">
                            <a href="/news/{{ $news->slug }}-{{ $news->id }}">{{ $news->tieu_de }}</a>
                        </h2>
                    </div>
                    <p class="dropcap">
                        {!! $news->noi_dung !!}
                    </p>
                    <div class="meta-post">
                        <div class="share">
                            <span>
                                <i class="fa fa-share-alt"></i>
                                SHARE</span>
                            <div class="social-media">
                                <a class="facebook" href="#" data-toggle="tooltip" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" href="#" data-toggle="tooltip" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" href="#" data-toggle="tooltip"
                                    data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" href="#" data-toggle="tooltip" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            <div class="col-lg-3 col-12">
                <div class="sidebar">
                    <aside class="widget noborder">
                        <div class="search">
                            <form class="widget-search">
                                <input type="search" placeholder="Search">
                                <button class="btn-search" id="searchsubmit" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </aside>
                    <!-- WIDGET -->
                    <aside class="widget">
                        <h4 class="widget-title">Latest Posts</h4>
                        <div class="latest-posts">
                            <!-- ITEM -->
                            <div class="latest-post-item">
                                <div class="row">
                                    <div class="col-5">
                                        <figure class="gradient-overlay-hover link-icon sm">
                                            <a href="blog-post.html">
                                                <img src="/admin/dist/images/blog/blog-post1.jpg" class="img-fluid"
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
                            <!-- ITEM -->
                            <div class="latest-post-item">
                                <div class="row">
                                    <div class="col-5">
                                        <figure class="gradient-overlay-hover link-icon sm">
                                            <a href="blog-post.html">
                                                <img src="/admin/dist/images/blog/blog-post2.jpg" class="img-fluid"
                                                    alt="Image">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-7">
                                        <div class="post-details">
                                            <h6 class="post-title">
                                                <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="latest-post-item">
                                <div class="row">
                                    <div class="col-5">
                                        <figure class="gradient-overlay-hover link-icon sm">
                                            <a href="blog-post.html">
                                                <img src="/admin/dist/images/blog/blog-post3.jpg" class="img-fluid"
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
                            <!-- ITEM -->
                            <div class="latest-post-item">
                                <div class="row">
                                    <div class="col-5">
                                        <figure class="gradient-overlay-hover link-icon sm">
                                            <a href="blog-post.html">
                                                <img src="/admin/dist/images/blog/blog-post4.jpg" class="img-fluid"
                                                    alt="Image">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-7">
                                        <div class="post-details">
                                            <h6 class="post-title">
                                                <a href="blog-post.html">Travel Gift Ideas for Every Type of Traveler</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="latest-post-item">
                                <div class="row">
                                    <div class="col-5">
                                        <figure class="gradient-overlay-hover link-icon sm">
                                            <a href="blog-post.html">
                                                <img src="/admin/dist/images/blog/blog-post5.jpg" class="img-fluid"
                                                    alt="Image">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-7">
                                        <div class="post-details">
                                            <h6 class="post-title">
                                                <a href="blog-post.html">Breakfast with coffee and orange juic</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        </div>
    </div>
@endsection
