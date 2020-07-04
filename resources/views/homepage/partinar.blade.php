<!--start of partner section-->
<section id="partners" class="bgclr3 py-4">
    <div class="container  partners ">
{{--        @php--}}
{{--        dd($data['Partner'])--}}
{{--        @endphp--}}
        <div class="owl-carousel owl-theme m-auto">
            @foreach($data['Partner'] as $part)
            <div class="partnersData item">
                <div class="partnersLogo">
                    <picture>
                        <source srcset="{{URL::asset('public/image').'/'.$part->image_path.'.webp'}}" type="image/webp">
                        <source srcset="{{URL::asset('public/image').'/'.$part->image_path}}" type="image/webp">
                        <img src="{{URL::asset('public/image').'/'.$part->image_path}}" alt="{{$part->title}}" class="img-fluid">
                    </picture>
                   </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--end of partner section-->