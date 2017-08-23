@extends('admin.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">


        <div class="container" style="width: 100%;">
            <div class="thumbnail" style="width: 100%;box-shadow: 1px 1px 1px black; margin-right: 10%;">
                <div class="row">



                    <div  class="panel-heading" style="margin-right: 2%; margin-left: 0%;">
                        <div class="" style="height: 70px; width:100%; margin-left: 0%;">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif



                                <form class="form-horizontal form-label-left" novalidate style="margin-top: 5%; width:90%;margin-left: 5%;" action="{{ URL::to('/adminpanel/video') }}"  class="col-xs-4 col-lg-4" method="POST" style="width: 70%;" >

                                    <div class="item form-group" >
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title en
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="title" class="form-control col-md-7 col-xs-12"  name="title_en"  type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group" >
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title ru <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="title" class="form-control col-md-7 col-xs-12"  name="title_ru" required="required"   type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group" >
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title az
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="title" class="form-control col-md-7 col-xs-12"  name="title_az"   type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group" >
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Link <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="link" class="form-control col-md-7 col-xs-12"  name="link"  required="required"   type="text">
                                        </div>
                                    </div>

                                    <input type="submit" value="Add Video" class="btn btn-success">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            </form>

<br><br>
                        @foreach($videos as $video)
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper smth" style="box-shadow: 1px 2px 2px gray; height: 340px; width: 200px; margin-left: 10%;">

                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="#" style="font-size: 20px;color: orange;">
                                                            <iframe width="260" src="{{$video->link}}" frameborder="0" style="box-shadow: 0px 2px 4px 0px gray; width: 100%; height: 200px;" allowfullscreen></iframe>
                                                        <br>  <span>{{$video->title_ru}}</span></a><p><i> {{$video->title_en}}</i></p><p><i> {{$video->title_az}}</i></p>

                                            </div>
                                            </div>
                                            </a>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <form action="{{ URL::to('/adminpanel/video/'.$video->id) }}" method="POST">
                                                        <input name="_token" type="hidden" value="{{csrf_token()}} " >
                                                        <input name="_method" type="hidden" value="DELETE" >
                                                        <button type = "button" onclick="showAlarm(this)" class="btn btn-danger" value="Delete" style="margin-left: 15%;background-color: #f48064;border:0;">Delete</button>
                                                    </form>
                                                </div>
                                                <div class="col-xs-12 col-md-6">

                                                    <a href="{{ URL::to('/adminpanel/video/edit/'.$video->id) }}" class="btn btn-danger" style="background-color: #5fbe28; border: 0;"><i class="fa fa-pencil-square-o"> </i> Edit</a>
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                        @endforeach


                </div>
                    </div>
                </div>
                    <div class="container">
                        {{$videos->render()}}
                    </div>


        </div>
        </div>
    </section>

    </section>
    <script>

        function upload(element){
            element.parentElement.submit();

        }
        function showAlarm(btn) {


            if (confirm("ARE YOU SURE?") == true) {
                btn.parentElement.submit();
            } else {

            }

        }
    </script>

@endsection
