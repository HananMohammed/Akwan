
<div class="col-sm-12 footerRights text-white bgclr3 py-3">
    <div class="row align-items-center ">
        <div class="col-sm-6 d-block d-md-none">
            <div class="social">
                <ul class="list-unstyled d-flex justify-content-around hide-social my-1">
                    @foreach($data as  $social)
                        <li><a class="mainclr2" href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <p class="m-0 footer-copy">&copy; Copyright Akwan Media 2019</p>
            </div>
        </div>
        <div class="col-sm-6 d-none d-md-block">
            <div class="social">
                <ul class="list-unstyled d-flex justify-content-around align-items-center my-1">
                    <p class="mb-0">Follow Us</p>
                    @foreach($data as  $social)
                        <li><a class="mainclr2" target="_blank" href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>