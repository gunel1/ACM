
@extends('admin.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="container" style="height: 100%;width: 100%;">

                        <div class="thumbnail" style="margin-top: 1%">
                            <h1 style="margin-left: 5%">Achievement</h1>
                             <a class="btn btn-success" href="{{URL::to('/adminpanel/achievement/create')}}" style="height: 40px;font-size: 18px;float: right; margin-right: 5%">create achievement</a>
                        </div>
                          @foreach($ach as $a)

                                <div class="productinfo text-center">
                                English <h1>{{$a->title_en}}</h1>
                                <p>{{$a->subtitle_en}}</p>
                                <textarea readonly>{{$a->text_en}}</textarea>
                                <hr>
                                Russian <h1>{{$a->title_ru}}</h1>
                                <p>{{$a->subtitle_ru}}</p>
                                <textarea readonly="">{{$a->text_ru}}</textarea>
                                <hr>
                                Azerbaijani <h1>{{$a->title_az}}</h1>
                                <p>{{$a->subtitle_az}}</p>
                                <textarea readonly>{{$a->text_az}}</textarea>
                                <hr>


                            </div>
                            </a>
                            <div class="row">

                                <div class="col-xs-12 col-md-6">
                                    <a href="{{ URL::to('/adminpanel/achievement/'.$a->id.'/edit') }}" class="btn btn-danger" style="background-color: #5fbe28; border: 0;"><i class="fa fa-pencil-square-o"> </i> Edit</a>
                                </div>


                            </div>
@endforeach
                            <!-- /page content -->

                </div>
            </div>

        </section>
    </section>
@stop
