<!-- mobile only navigation : starts -->
<nav class="mobile-nav signature-moritz">
    <ul class="slimmenu">
        <li>
            <a href="/Home">Anasayfa</a>
        <li>
            <a href="/Portfolio">Portfolyo</a>
        </li>
        <li><a href="/About">Hakkımda</a></li>
        <li><a href="/Contact">İletişim</a></li>
        <li>
            <a class="sub-collapser" href="#">Projelerim</a>
            <ul>
                @foreach($projects as $project)
                    <li><a href="/Project/{{$project->id}}">{{$project->title}}</a></li>
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
<!-- mobile only navigation : ends -->