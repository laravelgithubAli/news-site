@extends('layout.master')


@section('content')
    <!-- Start Slider post area -->
    <div dir="rtl" class="slider-post-area">
        <div class="container">
            <div class="row">
                <!-- Start Left side -->
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-8 pull-right">
                    <div class="slider-post-area-content">
                        <ul class="slide-posts owl-carousel list-unstyled">
                            <li class="item">
                                <img src="images/post/slider/1.jpg" alt="img">
                            </li>
                            <li class="item">
                                <img src="images/post/slider/2.jpg" alt="img">
                            </li>
                            <li class="item">
                                <img src="images/post/slider/3.jpg" alt="img">
                            </li>
                            <li class="item">
                                <img src="images/post/slider/4.jpg" alt="img">
                            </li>
                            <li class="item">
                                <img src="images/post/slider/5.jpg" alt="img">
                            </li>
                            <li class="item">
                                <img src="images/post/slider/2.jpg" alt="img">
                            </li>
                        </ul><!--/.owl-slider-->
                        <ul class="posts-thumbnails-wrapper list-unstyled">
                            <li class="post-thumbnail">
                                <a href="#"><img src="images/post/slider/1.jpg" alt="img"></a>
                            </li>
                            <li class="post-thumbnail">
                                <a href="#"><img src="images/post/slider/2.jpg" alt="img"></a>
                            </li>
                            <li class="post-thumbnail">
                                <a href="#"><img src="images/post/slider/3.jpg" alt="img"></a>
                            </li>
                            <li class="post-thumbnail">
                                <a href="#"><img src="images/post/slider/4.jpg" alt="img"></a>
                            </li>
                            <li class="post-thumbnail">
                                <a href="#"><img src="images/post/slider/5.jpg" alt="img"></a>
                            </li>
                            <li class="post-thumbnail">
                                <a href="#"><img src="images/post/slider/2.jpg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Left side -->

                <!-- Start Righr side -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-md pull-right">
                    <!-- Start post layout E -->
                    <aside class="zm-post-lay-e-area">
                        <div class="row mb-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="zm-posts-tab-menu">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#latest_posts">آخرین</a></li>
                                        <li><a data-toggle="tab" href="#comments_posts">نظرات</a></li>
                                        <li><a data-toggle="tab" href="#trending_posts">روند </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="zm-posts-tab-content tab-content">
                                    <!-- Start Latest Posts -->
                                    <div id="latest_posts" class="zm-posts tab-pane fade in active">
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/1.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/3.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                            و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/4.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/28.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    </div><!-- End Latest Posts -->

                                    <!-- Start Comments Posts -->
                                    <div id="comments_posts" class="zm-posts tab-pane fade">
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/5.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/6.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/7.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                            و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/8.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                            و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    </div><!-- End Comments Posts -->

                                    <!-- Start Trending Posts -->
                                    <div id="trending_posts" class="zm-posts tab-pane fade">
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/1.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/3.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                            و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/4.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/1.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    </div><!-- End Trending Posts -->
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- End post layout E -->
                </div>
                <!-- End Right side -->
            </div>
        </div>
    </div>
    <!-- End Slider post area -->

    <!-- Start page content -->
    <section dir="rtl" id="page-content" class="page-wrapper">
        <!-- Start Popular News [layout A+D]  -->
        <div class="zm-section bg-white ptb-70">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <div class="section-title">
                            <h2 class="h6 header-color inline-block uppercase">اخبار محبوب</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 col-lg-6 pull-right">
                        <div class="zm-posts">
                            <article class="zm-post-lay-a">
                                <div class="zm-post-thumb">
                                    <a href="blog-single-image.html"><img src="images/post/a/1.jpg" alt="img"></a>
                                </div>
                                <div class="zm-post-dis">
                                    <div class="zm-post-header">
                                        <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn">داد و ستد</a></div>
                                        <h2 class="zm-post-title h2"><a href="blog-single-image.html">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز  و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی میباشد .</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="zm-post-content">
                                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز  و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی میباشد .</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 col-lg-6 pull-right">
                        <div class="zm-posts">
                            <!-- Start single post layout D -->
                            <article class="zm-post-lay-d clearfix">
                                <div class="zm-post-thumb f-right">
                                    <a href="blog-single-image.html"><img src="images/post/d/4.jpg" alt="img"></a>
                                </div>
                                <div class="zm-post-dis f-left">
                                    <div class="zm-post-header">
                                        <div class="zm-category"><a href="#" class="bg-cat-2 cat-btn">داد و ستد</a></div>
                                        <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Start single post layout D -->
                            <!-- End single post layout D -->
                            <article class="zm-post-lay-d clearfix">
                                <div class="zm-post-thumb f-right">
                                    <a href="blog-single-image.html"><img src="images/post/d/2.jpg" alt="img"></a>
                                </div>
                                <div class="zm-post-dis f-left">
                                    <div class="zm-post-header">
                                        <div class="zm-category"><a href="#" class="bg-cat-3 cat-btn">آموزشی</a></div>
                                        <h2 class="zm-post-title "><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Start single post layout D -->
                            <!-- End single post layout D -->
                            <article class="zm-post-lay-d clearfix">
                                <div class="zm-post-thumb f-right">
                                    <a href="blog-single-image.html"><img src="images/post/d/3.jpg" alt="img"></a>
                                </div>
                                <div class="zm-post-dis f-left">
                                    <div class="zm-post-header">
                                        <div class="zm-category"><a href="#" class="bg-cat-4 cat-btn">مد</a></div>
                                        <h2 class="zm-post-title "><a href="blog-single-image.html">کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را میطلبد تا با نرم افزارهای رایانه ای پیشرو در زبان فارسی باشند .</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Start single post layout D -->
                            <!-- End single post layout D -->
                            <article class="zm-post-lay-d clearfix">
                                <div class="zm-post-thumb f-right">
                                    <a href="blog-single-image.html"><img src="images/post/d/1.jpg" alt="img"></a>
                                </div>
                                <div class="zm-post-dis f-left">
                                    <div class="zm-post-header">
                                        <div class="zm-category"><a href="#" class="bg-cat-5 cat-btn">سفر</a></div>
                                        <h2 class="zm-post-title "><a href="blog-single-image.html">در این صورت میتوان امید داشت که تمام دشواری های موجود در ارایه کارها و شرایط سخت تایپ به پایان رسد .</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- End single post layout D -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular News [layout A+D]  -->

        <!-- Start world news [layout A1+E+A]  -->
        <div class="zm-section bg-gray ptb-70">
            <div class="container">
                <div class="row">
                    <!-- Start left side -->
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 pull-right">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2 class="h6 header-color inline-block uppercase">اخبار جهان</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="zm-posts clearfix">
                                <!-- Start single post layout B -->

                            @foreach($categories as $category)
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                        <div class="zm-post-thumb">
                                            <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/1.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis text-white">
                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">{{$category->title}}</a></h2>
                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">{{$category->slug}}</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author"> {{$category->body}} </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                                <!-- End single post layout B -->
{{--                                <!-- Start single post layout B -->--}}
{{--                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">--}}
{{--                                    <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">--}}
{{--                                        <div class="zm-post-thumb">--}}
{{--                                            <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/2.jpg" alt="img"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="zm-post-dis text-white">--}}
{{--                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">کمی بیشتر کتاب بخوانیم ..</a></h2>--}}
{{--                                            <div class="zm-post-meta">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                                <!-- End single post layout B -->--}}
{{--                                <!-- Start single post layout B -->--}}
{{--                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">--}}
{{--                                    <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">--}}
{{--                                        <div class="zm-post-thumb">--}}
{{--                                            <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/3.jpg" alt="img"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="zm-post-dis text-white">--}}
{{--                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">کمی بیشتر کتاب بخوانیم ..</a></h2>--}}
{{--                                            <div class="zm-post-meta">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                                <!-- End single post layout B -->--}}
{{--                                <!-- Start single post layout B -->--}}
{{--                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">--}}
{{--                                    <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">--}}
{{--                                        <div class="zm-post-thumb">--}}
{{--                                            <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/4.jpg" alt="img"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="zm-post-dis text-white">--}}
{{--                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">کمی بیشتر کتاب بخوانیم ..</a></h2>--}}
{{--                                            <div class="zm-post-meta">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                                <!-- End single post layout B -->--}}
{{--                                <!-- Start single post layout B -->--}}
{{--                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">--}}
{{--                                    <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">--}}
{{--                                        <div class="zm-post-thumb">--}}
{{--                                            <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/5.jpg" alt="img"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="zm-post-dis text-white">--}}
{{--                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">کمی بیشتر کتاب بخوانیم ..</a></h2>--}}
{{--                                            <div class="zm-post-meta">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                                <!-- End single post layout B -->--}}
{{--                                <!-- Start single post layout B -->--}}
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                        <div class="zm-post-thumb">
                                            <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/1.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis text-white">
                                            <h2 class="zm-post-title h3"><a href="blog-single-image.html">کمی بیشتر کتاب بخوانیم ..</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- End single post layout B -->
                            </div>
                        </div>
                        <!-- Start Advertisement -->
                        <div class="advertisement">
                            <div class="row mt-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                    <a href="#"><img src="images/ad/2.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Advertisement -->
                    </div>
                    <!-- End left side -->

                    <!-- Start Righr side -->
                    <div class="col-xs-12 col-sm-12 hidden-sm col-md-4 col-lg-4 pull-right">
                        <!-- Start post layout E -->
                        <aside class="zm-post-lay-e-area">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase"> انتخاب ویراستاران</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="zm-posts">
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/1.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/3.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                            و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->
                                        <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                            <div class="zm-post-thumb f-right">
                                                <a href="blog-single-image.html"><img src="images/post/e/4.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-left">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout E -->
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Start post layout E -->
                        <!-- Start Day News -->
                        <aside class="zm-post-lay-a-area  hidden-sm">
                            <div class="row mb-40 mt-70">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase"> نکات مربوط به تغذیه</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="zm-posts">
                                        <article class="zm-post-lay-a sidebar">
                                            <div class="zm-post-thumb">
                                                <a href="blog-single-image.html"><img src="images/post/b/1.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis">
                                                <div class="zm-post-header">
                                                    <h2 class="zm-post-title h2"><a href="blog-single-image.html">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است .</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Start Day News -->
                    </div>
                    <!-- End Right side -->
                </div>
            </div>
        </div>
        <!-- End world news [layout A1+E+A]  -->
        <!-- Start Video Post [View layout A]  -->
        <div class="video-post-area ptb-70 bg-dark">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-title">
                            <h2 class="h6 header-color inline-block uppercase">پست ویدویی</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="zm-video-post-list zm-posts owl-active-3 navigator-1 clearfix">
                        <!-- Start single video post [video layout A] -->
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="zm-video-post zm-video-lay-a zm-single-post">
                                <div class="zm-video-thumb"  data-dark-overlay="2.5" >
                                    <img src="images/video/1.jpg" alt="video">
                                    <a class="video-activetor" href="https://www.youtube.com/watch?v=PsjFbwIQ8AY">
                                        <i class="fa fa-play-circle-o"></i>
                                    </a>
                                </div>
                                <div class="zm-video-info text-white">
                                    <h2 class="zm-post-title"><a href="blog-single-video.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta zm-post-time">10:33  دقیقه</li>
                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single video post [video layout A] -->
                        <!-- Start single video post [video layout A] -->
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="zm-video-post zm-video-lay-a zm-single-post">
                                <div class="zm-video-thumb" data-dark-overlay="2.5" >
                                    <img src="images/video/2.jpg" alt="video">
                                    <a class="video-activetor" href="https://www.youtube.com/watch?v=PsjFbwIQ8AY">
                                        <i class="fa fa-play-circle-o"></i>
                                    </a>
                                </div>
                                <div class="zm-video-info  text-white">
                                    <h2 class="zm-post-title"><a href="blog-single-video.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است . </a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta zm-post-time">10:33  دقیقه</li>
                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single video post [video layout A] -->
                        <!-- Start single video post [video layout A] -->
                        <div class="col-xs-12 hiddne-sm col-md-4 col-lg-4">
                            <div class="zm-video-post zm-video-lay-a zm-single-post">
                                <div class="zm-video-thumb" data-dark-overlay="2.5" >
                                    <img src="images/video/3.jpg" alt="video">
                                    <a class="video-activetor" href="https://www.youtube.com/watch?v=PsjFbwIQ8AY">
                                        <i class="fa fa-play-circle-o"></i>
                                    </a>
                                </div>
                                <div class="zm-video-info  text-white">
                                    <h2 class="zm-post-title"><a href="blog-single-video.html">لورم ایپسوم  متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta zm-post-time">10:33  دقیقه</li>
                                            <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                            <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single video post [video layout A] -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Post [View layout A]  -->
        <div class="zm-section bg-white pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <!-- Start left side -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 columns pull-right">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2 class="h6 header-color inline-block uppercase">آخرین اخبار</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="zm-posts">
                                    <!-- Start single post layout C -->
                                    <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-right">
                                            <a href="blog-single-image.html"><img src="images/post/c/1.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis f-left">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn">سفر</a></div>
                                                <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Start single post layout C -->
                                    <!-- Start single post layout C -->
                                    <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-right">
                                            <a href="blog-single-image.html"><img src="images/post/c/15.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis f-left">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a href="#" class="bg-cat-2 cat-btn">داد و ستد</a></div>
                                                <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Start single post layout C -->
                                    <!-- Start single post layout C -->
                                    <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-right">
                                            <a href="blog-single-image.html"><img src="images/post/c/3.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis f-left">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a href="#" class="bg-cat-3 cat-btn">سرگرمی</a></div>
                                                <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Start single post layout C -->
                                    <!-- Start Advertisement -->
                                    <div class="advertisement">
                                        <div class="row mtb-40">
                                            <div class="col-md-12 text-center">
                                                <a href="#"><img src="images/ad/3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Advertisement -->
                                    <!-- Start single post layout C -->
                                    <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-right">
                                            <a href="blog-single-image.html"><img src="images/post/c/5.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis f-left">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a href="#" class="bg-cat-5 cat-btn">غذا </a></div>
                                                <h2 class="zm-post-title"><a href="blog-single-image.html">توان دفاعی کشورها </a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Start single post layout C -->
                                    <!-- Start single post layout C -->
                                    <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-right">
                                            <a href="blog-single-image.html"><img src="images/post/c/4.jpg" alt="img"></a>
                                        </div>
                                        <div class="zm-post-dis f-left">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a href="#" class="bg-cat-4 cat-btn">الکترونیک</a></div>
                                                <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Start single post layout C -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left side -->
                    <!-- Start Right sidebar -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 sidebar-warp columns pull-right">
                        <div class="row">
                            <!-- Start Subscribe From -->
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-12 xs-mt-40 sm-mt-50 md-mt-60 pull-right">
                                <aside class="subscribe-form bg-dark sidebar">
                                    <h3 class="zm-post-title " > در جریان جدیدترین خبرهای ما باشید</h3>
                                    <p>با  8 هزار نفر مشترک شوید و خود را با اخبار اختصاصی  ما به روز رسانی کنید.
                                    </p>
                                    <form action="#">
                                        <input type="text" placeholder="نام خود را وارد کنید">
                                        <input type="email" placeholder="ایمیل
 خود را وارد کنید " required="">
                                        <input type="submit" value="اشتراک">
                                    </form>
                                </aside>
                            </div>
                            <!-- End Subscribe From -->
                            <aside class="zm-tagcloud-list col-xs-12 col-sm-6 col-md-6 col-lg-12 mt-60 pull-right">
                                <div class="row mb-40">
                                    <div class="col-md-12">
                                        <div class="section-title">
                                            <h2 class="h6 header-color inline-block uppercase">کلمات کلیدی </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="zm-tagcloud">
                                            <a href="#">داد و ستد</a>
                                            <a href="#">تکنولوژی</a>
                                            <a href="#">ورزشی</a>
                                            <a href="#">هنری</a>
                                            <a href="#">ورزشی</a>
                                            <a href="#">سبک زندگی</a>
                                            <a href="#">سه</a>
                                            <a href="#">تایپوگرافی</a>
                                            <a href="#">آموزشی</a>
                                            <a href="#">تکنولوژی</a>
                                            <a href="#">ورزشی</a>
                                            <a href="#">سبک زندگی</a>
                                            <a href="#">هنری</a>
                                            <a href="#">ورزشی</a>
                                            <a href="#">سه</a>
                                            <a href="#">تایپوگرافی</a>
                                            <a href="#">آموزشی</a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- Start post layout E -->
                            <aside class="zm-post-lay-e-area col-xs-12 col-sm-6 col-md-6 col-lg-12 mt-60 hidden-md">
                                <div class="row mb-40">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="section-title">
                                            <h2 class="h6 header-color inline-block"> پست های دارای بیشترین نظر </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="zm-posts">
                                            <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post clearfix">
                                                <div class="zm-post-thumb f-right">
                                                    <a href="blog-single-image.html"><img src="images/post/e/5.jpg" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-left">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Start single post layout E -->
                                            <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post clearfix">
                                                <div class="zm-post-thumb f-right">
                                                    <a href="blog-single-image.html"><img src="images/post/e/6.jpg" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-left">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است .</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Start single post layout E -->
                                            <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post hidden-md clearfix">
                                                <div class="zm-post-thumb f-right">
                                                    <a href="blog-single-image.html"><img src="images/post/e/7.jpg" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-left">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                                و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Start single post layout E -->
                                            <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post hidden-md clearfix hidden-sm">
                                                <div class="zm-post-thumb f-right">
                                                    <a href="blog-single-image.html"><img src="images/post/e/8.jpg" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-left">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Start single post layout E -->
                                            <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post hidden-md clearfix hidden-sm">
                                                <div class="zm-post-thumb f-right">
                                                    <a href="blog-single-image.html"><img src="images/post/e/3.jpg" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-left">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html">چاپگرها
                                                                و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Start single post layout E -->
                                            <!-- Start single post layout E -->
                                            <article class="zm-post-lay-e zm-single-post hidden-md clearfix hidden-sm">
                                                <div class="zm-post-thumb f-right">
                                                    <a href="blog-single-image.html"><img src="images/post/e/2.jpg" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-left">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="blog-single-image.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است .</a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"> بهمن رضایی </a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"> بیستم  اسفند 1394</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Start single post layout E -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- Start post layout E -->
                        </div>
                    </div>
                    <!-- End Right sidebar -->
                </div>
                <!-- Start pagination area -->
                <div dir="rtl" class="row hidden-xs">
                    <div class="zm-pagination-wrap mt-70">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <nav class="zm-pagination ptb-40 text-center">
                                        <ul class="page-numbers">
                                            <li><a class="prev  page-numbers" href="#" >قبلی</a></li>
                                            <li><span class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="page-numbers" href="#">4</a></li>
                                            <li><a class="page-numbers" href="#">5</a></li>
                                            <li><span class="page-numbers zm-pgi-dots">...</span></li>
                                            <li><a class="page-numbers" href="#">15</a></li>
                                            <li><a class="next  page-numbers" href="#">بعدی</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End pagination area -->
                <!-- Start Advertisement -->
                <div class="advertisement">
                    <div class="row mt-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a href="#"><img src="images/ad/2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- End Advertisement -->
            </div>
        </div>
    </section>
    <!-- End page content -->

@endsection
