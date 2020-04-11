@extends('layouts.master')

@section('content')

    <section class="first-fold signature-moritz halfheight home-bg parallax" data-stellar-background-ratio="0.5">
        <div class="halfheight trans-dark-overlay">
            <div class="valign">

                <section class="main-heading text-center">
                    <h1 class="white font2">En Özel Tasarımlarım ile Portolyom</h1>
                    <div class="liner color-bg"></div>
                </section>

            </div>
        </div>
    </section>

    <div class="inner-wrap white-bg">

        <section class="intro-01 signature-moritz">

            <!--works filter panel :starts -->
            <section id="works-filter-panel" class="works-filter-panel signature-moritz fullheight dark-bg">
                <div class="valign">
                    <div class="works-filter-wrap">
                        <ul class="works-filter signature-moritz text-center clearfix font3">
                            <li><a id="all" href="#" data-filter="*" class="active"><span>All</span></a></li>
                            @foreach($tags as $tag)
                            <li><a href="#" data-filter=".{{$tag->name}}"><span>{{$tag->name}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
            <!-- works filter panel :ends -->

            <section id="works-container" class="works-container signature-moritz works-masonry-container clearfix white-bg works-thumbnails-view">

               @include('works.items', $projects)

            </section>
            <!-- end : works-container -->

        </section>

    </div>
@stop
