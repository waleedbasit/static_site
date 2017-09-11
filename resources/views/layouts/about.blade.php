<section id="content-1-9" class="content-1-9 content-block bg-clouds">
    <div class="container">
        <div class="underlined-title">
            <img class="beauty" src="../images/beauty.png">
            @foreach($main->abouts as $about)
                <h2>{{$about->heading}}</h2>
                <p>{{$about->subtext}}</p>
                @endforeach
            <img class="beauty-tilt" src="../images/beauty.png">
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>