@extends('template.master')

@section('title', 'Tin tức')

@php
    $lists = [
        [
            'id' => 1,
            'title' => 'tin tức trong ngày',
            'author' => 'Tác giả 1',
            'startTime' => '19/05/2023',
            'comment' => '1',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 1',
        ],
    ];
    
@endphp
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $lists[0]['title'] }}</h2>
                <ol>
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="/tin-tuc">Tin tức</a></li>
                    <li>{{ $lists[0]['title'] }}</li>
                </ol>
            </div>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ asset('/assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">{{ $lists[0]['title'] }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-details.html">{{ $lists[0]['author'] }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-details.html"><time
                                            datetime="2020-01-01">{{ $lists[0]['startTime'] }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html">{{ $lists[0]['comment'] }} Comments</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            {{ $lists[0]['description'] }}

                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Công ty</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Quảng cáo</a></li>
                                <li><a href="#">Mẹo</a></li>
                                <li><a href="#">Tiếp thị</a></li>
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                    <div class="post-author d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4>TOP CV</h4>
                            <div class="social-links">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores repudiandae perferendis
                                voluptas placeat culpa ex nulla doloribus aliquid dolorum odit necessitatibus omnis ad modi,
                                distinctio quibusdam sit, magnam quae nam.
                            </p>
                        </div>
                    </div><!-- End post author -->

                    <div class="comments">

                        <h4 class="comments-count">8 bình luận</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('/assets/img/blog/comments-1.jpg') }}"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Duc Minh Vu</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Trả lời</a></h5>
                                    <time datetime="2020-01-01">19/05/2023</time>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro sit labore
                                        asperiores! Expedita tempora at eligendi? Natus a modi soluta ipsum animi fugiat
                                        eius iste ipsa deleniti aliquam. Sit, nisi.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('/assets/img/blog/comments-2.jpg') }}"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Vũ Minh Đức</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Trả lời</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro sit labore
                                        asperiores! Expedita tempora at eligendi? Natus a modi soluta ipsum animi fugiat
                                        eius iste ipsa deleniti aliquam. Sit, nisi.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('/assets/img/blog/comments-3.jpg') }}"
                                            alt=""></div>
                                    <div>
                                        <h5><a href="">Muzan</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Trả lời</a></h5>
                                        <time datetime="2020-01-01">20/05/2023</time>
                                        <p>
                                            Có vẻ oki đó
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment reply #1-->

                        </div><!-- End comment #2-->
                        <div class="reply-form">
                            <h4>Để lại một câu trả lời</h4>
                            {{-- <p>Your email address will not be published. Required fields are marked * </p> --}}
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Tên của bạn*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Bình luận*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Để lại bình luận</button>

                            </form>

                        </div>

                    </div><!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Tìm kiếm</h3>
                            <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Danh mục bài viết</h3>
                            <ul class="mt-3">
                                <li><a href="#">Chung <span>(25)</span></a></li>
                                <li><a href="#">Lối sống <span>(12)</span></a></li>
                                <li><a href="#">Du lịch <span>(5)</span></a></li>
                                <li><a href="#">Thiết kế <span>(22)</span></a></li>
                                <li><a href="#">Quảng cáo <span>(8)</span></a></li>
                                <li><a href="#">Giáo dục <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="{{ asset('/assets/img/blog/blog-recent-1.jpg') }}" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="{{ asset('/assets/img/blog/blog-recent-2.jpg') }}" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="#">Quidem autem et impedit</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="{{ asset('/assets/img/blog/blog-recent-3.jpg') }}" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a>
                                        </h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="{{ asset('/assets/img/blog/blog-recent-4.jpg') }}" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="{{ asset('/assets/img/blog/blog-recent-5.jpg') }}" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                            </div>

                        </div><!-- End sidebar recent posts-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Thẻ</h3>
                            <ul class="mt-3">
                                <li><a href="#">Ứng dụng</a></li>
                                <li><a href="#">CNTT</a></li>
                                <li><a href="#">Doanh nghiệp</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Thiết kế</a></li>
                                <li><a href="#">Văn phòng</a></li>
                                <li><a href="#">Quảng cáo</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Thông minh</a></li>
                                <li><a href="#">Mẹo</a></li>
                                <li><a href="#">Tiếp thị</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section>
    <!-- ======= End Blog Section ======= -->
