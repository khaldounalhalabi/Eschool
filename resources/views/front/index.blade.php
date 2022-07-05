@extends('front.include.layout')

@section('content')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>{{ json_decode($banner->content)->title }}</h5>
                        <h1>{{ json_decode($banner->content)->subtitle }}</h1>
                        <p>{{ json_decode($banner->content)->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 align-self-center">
                <div class="single_feature_text ">
                    <h2>{{ json_decode($features->content)->title }}</h2>
                    <p>{{ json_decode($features->content)->subtitle }}</p>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-layers"></i></span>
                        <h4>{{ json_decode($features->content)->feature_title1 }}</h4>
                        <p>{{ json_decode($features->content)->feature_desc1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                        <h4>{{ json_decode($features->content)->feature_title2 }}</h4>
                        <p>{{ json_decode($features->content)->feature_desc2 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>{{ json_decode($features->content)->feature_title3 }}</h4>
                        <p>{{ json_decode($features->content)->feature_desc3 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- member_counter counter start -->
<section class="member_counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{ $trainers_count }}</span>
                    <h4>Trainers</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{ $students_count }}</span>
                    <h4>Students</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{ $courses_count }}</span>
                    <h4>courses</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- member_counter counter end -->

<!--::review_part start::-->
<section class="special_cource padding_top pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>{{ json_decode($courses_content->content)->title }}</p>
                    <h2>{{ json_decode($courses_content->content)->subtitle }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('uploads/courses')."/$course->image"}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{ route('front.category' , $course->category->id) }}" class="btn_4">
                                {{$course->category->name}}
                            </a>
                            <h4>${{ $course->price }}</h4>
                            <a href="{{ route('front.course_details' , [$course->category->id , $course->id]) }}">
                                <h3>{{ $course->name }}</h3>
                            </a>
                            <p>{{$course->small_description}}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ asset('uploads/trainers/'.$course->trainer->image) }}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5>{{$course->trainer->name}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
<!--::blog_part end::-->



<!--::testimonial part start::-->
<section class="testimonial_part padding_top pb-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>{{ json_decode($testemonials_content->content)->title }}</p>
                    <h2>{{ json_decode($testemonials_content->content)->subtitle }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="textimonial_iner owl-carousel">
                    @foreach($testemonials as $t)
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>{{ $t->description }}</p>
                                        <h4>{{ $t->name }}</h4>
                                        <h5> {{ $t->specialize }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{asset('uploads/testemonials/' .$t->image)}}" alt="#">
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--::testimonial part end::-->



@endsection
