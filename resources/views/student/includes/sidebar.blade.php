<?php

use App\Category;
use App\Course;

$cat = Category::all();
//$tar = Course::find(3)->show_Student;
?>
{{--<div class="block-24 mb-5">--}}
{{--    <h3 class="heading">Thể loại tin</h3>--}}
{{--    <ul>--}}
{{--        @foreach($tar as $targ)--}}
{{--                <li><a href="#">{{$targ->name}} <span></span></a></li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</div>--}}

<div class="block-24 mb-5">
    <h3 class="heading">Thể loại tin</h3>
    <ul>
        @foreach($cat as $val)
{{--            @if($val->status==1)--}}
                <li><a href="{{route('student.get.category',$val->id)}}">{{$val->cate_name}} <span></span></a></li>
{{--            @endif--}}
        @endforeach
    </ul>
</div>

{{--<div class="block-25 mb-5">--}}
{{--    <div class="heading">Recent Courses</div>--}}
{{--    <ul>--}}
{{--        <li>--}}
{{--            <a href="#" class="d-flex">--}}
{{--                <figure class="image mr-3">--}}
{{--                    <img src="/images/img_2_b.jpg" alt="" class="img-fluid">--}}
{{--                </figure>--}}
{{--                <div class="text">--}}
{{--                    <h3 class="heading">Create cool websites using this template</h3>--}}
{{--                    <span class="meta">$34</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="d-flex">--}}
{{--                <figure class="image mr-3">--}}
{{--                    <img src="/images/img_2_b.jpg" alt="" class="img-fluid">--}}
{{--                </figure>--}}
{{--                <div class="text">--}}
{{--                    <h3 class="heading">Create cool websites using this template</h3>--}}
{{--                    <span class="meta">$34</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="d-flex">--}}
{{--                <figure class="image mr-3">--}}
{{--                    <img src="/images/img_2_b.jpg" alt="" class="img-fluid">--}}
{{--                </figure>--}}
{{--                <div class="text">--}}
{{--                    <h3 class="heading">Create cool websites using this template</h3>--}}
{{--                    <span class="meta">$34</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}

{{--<div class="block-26">--}}
{{--    <h3 class="heading">Tags</h3>--}}
{{--    <ul>--}}
{{--        <li><a href="#">code</a></li>--}}
{{--        <li><a href="#">design</a></li>--}}
{{--        <li><a href="#">typography</a></li>--}}
{{--        <li><a href="#">development</a></li>--}}
{{--        <li><a href="#">creative</a></li>--}}
{{--        <li><a href="#">codehack</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}



