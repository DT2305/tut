@foreach($pos as $val)
    <div class="col-md-12 col-lg-12 mb-5">
        <div class="block-20 ">
            @if($val->avatar == null)
            @else
                <figure>
                    <img src="post_avatar/{{$val->avatar }}" alt=""
                         class="img-fluid card-img">
                </figure>
            @endif


            <div class="text">
                <h3 class="heading"><a
                        href="{{route('home.get.content',$val->changedtitle)}}">{{$val->title}}</a>
                </h3>
                <div class="meta">
                    <div><a><span
                                class="ion-android-calendar"></span> {{ \Carbon\Carbon::parse($val->created_at)->format('d/m/Y')}}
                        </a></div>
                    <div><a><span class="ion-android-person"></span> {{$val->origional_author}}</a>
                    </div>
                    <div><a><span class="ion-eye"></span> {{$val->view}}</a></div>
                    <div><a><span class="ion-code"></span> {{$val->show_category->cate_name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
