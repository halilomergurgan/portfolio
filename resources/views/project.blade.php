@extends('layouts.master')

@section('styles')
    <link href="{{ asset('css/venobox.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <style>
        .project-bg {
            background-image: url('http://fatosdogan.com/storage/cover.jpg');
            /*background-size: auto;*/
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center !important;
        }

    </style>
 @endsection


@section('content')

    <section class="first-fold signature-moritz project-bg parallax" data-stellar-background-ratio="0.5" style="height: 350px; background-position: center !important;">

        <div class="trans-white-overlay" style="height: 350px;">
            <div class="valign">

                <section class="project-title signature-moritz pad-top-quarter pad-bottom-quarter text-center">
                    <h1 class="font3bold black">{{$project->title}}
                        <span class="font3light black">
                            @foreach($project->tags as $tag)
                                {{$tag->name}}
                            @endforeach
                        </span></h1>
                </section>

            </div>
        </div>
    </section>

    <div class="inner-wrap container add-top">
        <section class="first-fold signature-moritz halfheight" >


            <section class="project01-carousel halfheight">
                <section class="project-carousel-wrap signature-moritz halfheight" >

                    <!-- Carousel -->
                    <div class="project-carousel signature-moritz owl-carousel owl-nav-sticky-wide">
                        @foreach($project->slide_images() as $slide_image)
                            <div class="project-carousel-item halfheight text-center ">
                                 <center style="height: 100%;"><img style="height: 100%; width: auto;" src="../{{$slide_image->path}}"></center>
                            </div>

                        @endforeach
 

                    </div>

                </section>
            </section>

        </section>


        <section class="hero-text add-top-half add-bottom">
            <div class="row">
                <article class="col-md-8">
                    <p class="grey">{!! $project->content !!}</p>
                </article>
                <article class="col-md-4">
                    <ul class="project-spec signature-moritz">
                        <li class="font3bold black">Category:
                            <span class="font3light dark">
                                @foreach($project->tags as $projectTag)
                                    {{ $tag->name }}

                                @endforeach


                            </span>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
    </div>
    @endsection
    <!-- end : inner-wrap -->
 
