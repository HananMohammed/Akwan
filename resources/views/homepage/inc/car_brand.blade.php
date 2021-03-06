<div class="owl-carousel owl-theme brand-logo py-4 mb-4">
    @foreach($data['brands'] as  $carBrand)
        <div class="item">
            {{--                    <svg id="bmw" xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92">--}}
            {{--                        <g id="Group_268" data-name="Group 268" transform="translate(41.074 4.356)">--}}
            {{--                            <g id="Group_267" data-name="Group 267">--}}
            {{--                                <path id="Path_136" data-name="Path 136" d="M235.306,24.24a3.11,3.11,0,0,0-1.795.569,3.127,3.127,0,0,0-4.926,2.562v6.04a1.348,1.348,0,1,0,2.7,0v-6.04a.436.436,0,0,1,.872,0v6.04a1.348,1.348,0,0,0,1.348,1.348h.022a1.348,1.348,0,0,0,1.348-1.348v-6.04a.436.436,0,0,1,.872,0v6.04a1.348,1.348,0,1,0,2.7,0v-6.04A3.135,3.135,0,0,0,235.306,24.24Z" transform="translate(-228.586 -24.24)" fill="#fff"/>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                        <g id="Group_270" data-name="Group 270" transform="translate(22.137 8.626)">--}}
            {{--                            <g id="Group_269" data-name="Group 269">--}}
            {{--                                <path id="Path_137" data-name="Path 137" d="M133.624,52.985a3.24,3.24,0,0,0-1.5-1.356,3.261,3.261,0,0,0-4.862-3.194l-3.389,1.935a1.348,1.348,0,0,0-.5,1.838l1.9,3.333,1.9,3.333a1.347,1.347,0,0,0,1.839.5l3.389-1.935A3.27,3.27,0,0,0,133.624,52.985Zm-6.675.049-.566-.992,2.219-1.266a.571.571,0,0,1,.566.992ZM131.07,55.1l-2.219,1.266-.567-.992,1.2-.687,1.015-.579a.571.571,0,0,1,.566.992Z" transform="translate(-123.196 -48.006)" fill="#fff"/>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                        <g id="Group_272" data-name="Group 272" transform="translate(57.792 7.427)">--}}
            {{--                            <g id="Group_271" data-name="Group 271">--}}
            {{--                                <path id="Path_138" data-name="Path 138" d="M333.085,45.054a1.348,1.348,0,0,0-1.838.5L328.254,50.8a.436.436,0,1,1-.757-.432l2.993-5.247a1.347,1.347,0,0,0-.5-1.838l-.008,0-.01-.007a1.348,1.348,0,0,0-1.838.5l-2.993,5.247a.436.436,0,1,1-.757-.432l2.993-5.247a1.348,1.348,0,1,0-2.341-1.336l-2.993,5.247a3.13,3.13,0,0,0,2.715,4.682c.1,0,.2-.006.293-.015a3.13,3.13,0,0,0,2.824,1.8,3.147,3.147,0,0,0,.831-.112,3.11,3.11,0,0,0,1.894-1.469l2.993-5.247A1.347,1.347,0,0,0,333.085,45.054Z" transform="translate(-321.627 -41.331)" fill="#fff"/>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                        <g id="Group_274" data-name="Group 274" transform="translate(0)">--}}
            {{--                            <g id="Group_273" data-name="Group 273">--}}
            {{--                                <path id="Path_139" data-name="Path 139" d="M78.527,13.473a46,46,0,0,0-62.809-2.1A1.348,1.348,0,1,0,17.493,13.4a43.3,43.3,0,1,1-4.658,4.752,1.348,1.348,0,0,0-2.063-1.734,46,46,0,1,0,67.755-2.946Z" transform="translate(0)" fill="#fff"/>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                        <g id="Group_276" data-name="Group 276" transform="translate(16.262 16.262)">--}}
            {{--                            <g id="Group_275" data-name="Group 275">--}}
            {{--                                <path id="Path_140" data-name="Path 140" d="M120.238,90.5a29.738,29.738,0,1,0,29.738,29.738A29.772,29.772,0,0,0,120.238,90.5Zm-1.348,2.729v25.662H93.229A27.081,27.081,0,0,1,118.891,93.229Zm2.7,54.019v-4.039a1.348,1.348,0,0,0-2.7,0v4.039a27.081,27.081,0,0,1-25.662-25.662h25.662v15.843a1.348,1.348,0,0,0,2.7,0V121.586h4.4a1.348,1.348,0,0,0,0-2.7h-4.4V93.229a27.08,27.08,0,0,1,25.662,25.662h-15.42a1.348,1.348,0,0,0,0,2.7h15.42A27.08,27.08,0,0,1,121.586,147.248Z" transform="translate(-90.5 -90.5)" fill="#fff"/>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                    </svg>--}}
            <picture>
                <source srcset="{{URL::asset('public/image').'/'.$carBrand->image_path}}" type="image/webp">
                <source srcset="{{URL::asset('public/image').'/'.$carBrand->image_path}}" type="image/png">
                <img src="{{URL::asset('public/image').'/'.$carBrand->image_path}}">
            </picture>
        </div>
    @endforeach

</div>