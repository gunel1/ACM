
@extends('admin.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">


            <div class="container" style="width: 100%;">
                <div class="thumbnail" style="width: 100%;box-shadow: 1px 1px 1px black; margin-right: 10%;">
                    <div class="row">



                        <div  class="panel-heading" style="margin-right: 2%; margin-left: 0%;">
                            <div class="well well-sm" style="height: 70px; width:100%; margin-left: 0%;">
                                <form action="{{URL::to('/adminpanel/team')}}"  class="col-xs-4 col-lg-4" method="GET" class="" style="width: 70%;">
                                    <input type="submit" class="btn btn-success" value="@lang('words.search')" style="height: 48px;">
                                    <input type="searchtext" placeholder="@lang('words.search')..." name="searchtext" >
                                </form>


                                <a class="btn btn-success" href="{{URL::to('/adminpanel/massmedia/create')}}" style="height: 40px;font-size: 18px;float: right;">Add new media

                                </a>
                            </div>
                            @foreach($medias as $media)

                                <div class="col-sm-3">
                                    <div class="product-image-wrapper smth" style="box-shadow: 1px 2px 2px gray; height: 340px; width: 200px; margin-left: 10%;">

                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{URL::to('/adminpanel/massmedia/index')}}"   style="font-size: 20px;color: orange;">
                                                    @if(isset($media->image->path))

                                                        <img src="{{$media->getImageUrlAttribute()}}" alt="text" >  @endif
                                                    <hr> </a>

                                                <p><i>{{$media->title_ru}}</i></p>
                                                <p><i>{{$media->link}}</i></p></a>
                                            </div>


                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <form action="{{ URL::to('/adminpanel/massmedia/'.$media->id) }}" method="POST" id = "deleteStore">
                                                        <input name="_token" type="hidden" value="{{csrf_token()}} " >
                                                        <input name="_method" type="hidden" value="DELETE" >

                                                        <button type = "button" onclick="showAlarm(this)" class="btn btn-danger" value="Delete" style="margin-left: 15%;background-color: #f48064;border:0;">Delete</button>
                                                    </form>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a href="{{ URL::to('/adminpanel/massmedia/'.$media->id.'/edit') }}" class="btn btn-danger" style="background-color: #5fbe28; border: 0;"><i class="fa fa-pencil-square-o"> </i> Edit</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>



                        <div class="container">
                            {{$medias->appends(request()->only('searchtext'))->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script>

        function showAlarm(btn) {

            if (confirm("ARE YOU SURE?") == true) {
                btn.parentElement.submit();
            } else {

            }

        }
    </script>

@endsection
