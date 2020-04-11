<nav class="mastnav signature-moritz nav-bg img-bg">

    <div class="menu-close-notification">
        <a class="font3bold" href="#"><span class="ion-android-close white"></span></a>
    </div>
    <ul class="main-menu signature-moritz">
        <li><a class="white font2" href="/Home">ANASAYFA</a></li>
        <li>
            <a class="white font2 " href="/Portfolio">PORTFOLYO</a>
        </li>
        <li><a class="white font2" href="/About">HAKKIMDA</a></li>
        <li>
            <a class="white font2 sub-menu-trigger" href="#">PROJELERIM</a>
            <div class="sub-menu font3">
                @foreach($projects as $project)
                    <a class = "font1" href="/Project/{{$project->id}}">{{$project->title}}</a>
                @endforeach
            </div>
        </li>
        <li><a class="white font2" href="/Contact">ILETIŞIM</a></li>
    </ul>


    <div class="menu-credits text-left">
        <p class="font1 white" style="font-size: 15px;">Grafik Tasarımcı - Fatoş Doğan<br/>Copyright &copy; 2017 </p>
    </div>

</nav>

<!-- end : mastnav -->