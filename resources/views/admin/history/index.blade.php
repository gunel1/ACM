
@extends('admin.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="container" style="height: 100%;width: 100%;">
                <div class="" >
                    <div class="item" style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                        <div class="thumbnail" style="margin-top: 1%">
                            <h1 style="margin-left: 5%">@lang('words.history')</h1>

                              @foreach($his as $h)
                                @if(!isset($h->title_ru)) <a class="btn btn-success" href="{{URL::to('/adminpanel/history/create')}}" style="height: 40px;font-size: 18px;float: right;">create history</a> @endif

                            <div class="productinfo text-center">
                                English <h1>{{$h->title_en}}</h1>
                                <p>{{$h->subtitle_en}}</p>
                                <textarea readonly>{{$h->text_en}}</textarea>
                                <hr>
                                Russian <h1>{{$h->title_ru}}</h1>
                                <p>{{$h->subtitle_ru}}</p>
                                <textarea readonly="">{{$h->text_ru}}</textarea>
                                <hr>
                                Azerbaijani <h1>{{$h->title_az}}</h1>
                                <p>{{$h->subtitle_az}}</p>
                                <textarea readonly>{{$h->text_az}}</textarea>
                                <hr>


                            </div>
                            </a>
                            <div class="row">

                                <div class="col-xs-12 col-md-6">
                                    <a href="{{ URL::to('/adminpanel/history/'.$h->id.'/edit') }}" class="btn btn-danger" style="background-color: #5fbe28; border: 0;"><i class="fa fa-pencil-square-o"> </i> Edit</a>
                                </div>


                            </div>
@endforeach
                            <!-- /page content -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
@stop
