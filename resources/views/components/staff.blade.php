<div class="col-lg-4 col-md-6">
    <div class="team-single-box">
        <div class="team-thumb">
            <img src="{{asset("storage/$staff->image")}}" alt="">
            {{-- <ul class="team-share">
                <li><a href="home.html"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="home.html"><i class="fab fa-twitter"></i></a></li>
                <li><a href="home.html"><i class="fab fa-pinterest"></i></a></li>
            </ul> --}}
        </div>
        <div class="team-content">
            <h3 class="team-name"><a href="javascript:void();">{{$staff->name}}</a></h3>
            <div class="team-title"><span>{{$staff->designation}}</span></div>
        </div>
    </div>
</div>
