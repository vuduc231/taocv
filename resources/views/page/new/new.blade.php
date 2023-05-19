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
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 1'
    ],
    [
        'id' => 2,
        'title' => 'tin tức hôm nay',
        'author' => 'Tác giả 2',
        'startTime' => '19/05/2023',
        'comment' => '2',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 2'
    ],
    [
        'id' => 3,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 3',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 4,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 4',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 5,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 5',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 6,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 6',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 7,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 7',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 8,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 8',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 9,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 9',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ],
    [
        'id' => 10,
        'title' => 'Tin tức hot hôm nay',
        'author' => 'Tác giả 10',
        'startTime' => '19/05/2023',
        'comment' => '3',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui aut aspernatur exercitationem, amet consequuntur 3'
    ]
];

@endphp
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Tin tức</h2>
                <ol>
                    <li><a href="/">Trang chủ</a></li>
                    <li>Tin tức</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <div class="row gy-4 posts-list">
                        @foreach($lists as $list)
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="blog-details.html">{{ $list['title'] }}</a>
                                </h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-details.html">{{ $list['author'] }}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-details.html"><time datetime="2022-01-01">{{ $list['startTime'] }}</time></a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                href="blog-details.html">{{ $list['comment'] }} Comments</a></li>
                                    </ul>
                                </div>

                                <div class="content">
                                    <p>
                                        {{ $list['description'] }}
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="/tin-tuc/{{ Str::slug($list['title'], '-') }}">Xem thêm</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                        @endforeach
                    </div><!-- End blog posts list -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div><!-- End blog pagination -->

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
