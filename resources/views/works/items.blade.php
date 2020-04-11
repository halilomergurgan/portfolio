
@if( $projects)
    @foreach($projects as $project)
        <!-- start : works-item -->
        <div class="works-item signature-moritz BackgroundRR works-item-one-fourth
        @if ($project->tags)
            @foreach($project->tags as $projectTag)
                {!! $projectTag->name !!}
            @endforeach
        @endif
                ">
            @if($project->cover_image())
                <img data-no-retina alt="" title="" class="img-responsive" src="{{$project->cover_image()->path}}"/>
            @endif
            <a  data-gall="portfolio-gallery" href="/Project/{{$project->id}}">
                <div class="works-item-inner">
                    <p class="valign text-center"><span class="white font3">{{ $project->title }}</span></p>
                </div>
            </a>
        </div>
        <!-- end : works-item -->
    @endforeach
@endif


@section('scripts')
    <script>
        $('a.venobox.vbox-item').on('click', function (e) {
            e.preventDefault();
        })

    </script>
@endsection