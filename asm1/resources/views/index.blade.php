@extends('client.layouts.master');
@section('title', 'Trang chủ')
@section('content')
    <section class="myContent">
        <div class="container">
            <div class="row">
                <!-- Các bài viết -->
                <div class="col-md-9">
                    <a href="{{route('ct',['id'=>$tinHot->id])}}" class="text-decoration-none text-black">
                    <div class="row">
                            <div class="col-md-8 d-flex justify-content-center">
                                <img src="{{ asset($tinHot->img) }}" id="img_post1" class="img-fluid" alt="anhbaiviet">
                            </div>
                            <div class="col-md-4">
                                <div class="row mt-3">
                                    <h3 class="font-text1 fw-semibold">
                                        {{ $tinHot->title }}
                                    </h3>
                                </div>
                                <div class="row ps-2 pe-2 pt-2">
                                    <p id="content1">{{ $tinHot->content }}
                                    </p>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-7"></div>
                                    <div class="col-md-5">
                                        <em>{{ $tinHot->date_of_post }}</em>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </a>
                </div>

                <!-- Các bài viết liên quan -->
                <div class="col-md-3" id="content2">
                    <div class="row mt-3 pb-2">
                        <h4 class="font-text2 pt-2 fw-semibold">Các bài viết liên quan</h4>
                    </div>
                    @foreach ($tinKhac as $tink)
                    <a href="{{route('ct',['id'=>$tink->id])}}" class="text-decoration-none text-black">
                        <div class="row mt-2">
                            <div class="col-md-5">
                                <img src="{{ asset($tink->img) }}" class="img-fluid" id="img_post2">
                            </div>
                            <div class="col-md-7">
                                <h5 class="font-text3 fw-semibold">
                                    {{ $tink->title }}
                                </h5>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="myNews">
        <div class="container mb-3">
            <div class="row">
                <h3 class="font-text4 fw-semibold">
                    Bài viết mới
                </h3>
            </div>
            <div class="row mt-3">
                @foreach ($tinMoi as $tin)
                    <div class="col-md-3">
                        <div class="row">
                            <img src="{{ asset($tin->img) }}" alt="">
                        </div>
                        <div class="row">
                            <h5 class="font-text3 fw-semibold pt-2">
                                {{ $tin->title }}
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-9 pt-2 font-text5">{{ $tin->category_name }}</div>
                            <div class="col-3">
                                <button type="button" class="btn btn-outline-dark">Đọc</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr class="mt-5">
        </div>
    </section>
@endsection
