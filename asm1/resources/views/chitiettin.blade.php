@extends('client.layouts.master');
@section('title', 'Chi Tiết')
@section('content')
    <section class="myContent">
        <div class="container">
                    <div class="row pb-4">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <h3 class="font-text1 fw-semibold">
                                {{ $ctTin->title }}
                            </h3>
                        </div>
                        <div class="col-md-2">
                            <em>{{ $ctTin->date_of_post }}</em>
                        </div>  
                    </div>
                        <div class="row d-flex justify-content-center" >
                            <img src="{{ asset($ctTin->img) }}" id="img_post1" class="img-fluid" alt="anhbaiviet">
                        </div>
                       
                            <div class="row ps-2 pe-2 pt-4">
                                <p id="">{{ $ctTin->content }}
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
