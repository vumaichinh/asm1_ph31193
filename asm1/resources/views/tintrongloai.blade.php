@extends('client.layouts.master');
@section('title', 'Tin trong loại')
@section('content')
    <section class="myContent">
        <div class="container">
            <div class="row">
                <!-- Các bài viết liên quan -->
                <div class="col-md-3" id="">
                    <div class="row mt-3 pb-2">
                        <h4 class="font-text2 pt-2 fw-semibold">Tất cả các tin</h4>
                    </div>
                    @foreach ($tins as $tin)
                    <a href="{{route('ct',['id'=>$tin->id])}}" class="text-decoration-none text-black">
                        <div class="row mt-2">
                            <div class="col-md-5">
                                <img src="{{ asset($tin->img) }}" class="img-fluid" id="img_post3">
                            </div>
                            <div class="col-md-7">
                                <h5 class="font-text3 fw-semibold">
                                    {{ $tin->title }}
                                </h5>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
