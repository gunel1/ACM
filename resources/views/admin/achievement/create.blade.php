@extends('admin.master')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="container" style="height: 100%;width: 100%;">
                <div class="" >
                    <div class="item" style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                        <div class="thumbnail" style="margin-top: 1%">
                            <h1 style="margin-left: 5%">Add Achievement</h1><hr>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif<br><br><br>
                            <form class="form-horizontal form-label-left" novalidate style="margin-top: 5%; width:90%;margin-left: 5%;" action="{{ URL::to('/adminpanel/achievement') }}" method="post" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title en
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" class="form-control col-md-7 col-xs-12"  value="{{ old('title_en')}}" name="title_en" type="text">
                                    </div>
                                </div>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">sub Title en
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" class="form-control col-md-7 col-xs-12" value="{{ old('subtitle_en')}}"  name="subtitle_en" type="text">
                                    </div>
                                </div>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> text en
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="title" class="form-control col-md-7 col-xs-12" value="{{ old('text_en')}}"  name="text_en"  type="text"></textarea>
                                    </div>
                                </div><hr>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title ru<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" class="form-control col-md-7 col-xs-12" value="{{ old('title_ru')}}"  name="title_ru"  type="text">
                                    </div>
                                </div>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">sub Title ru<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" class="form-control col-md-7 col-xs-12" value="{{ old('subtitle_ru')}}"  name="subtitle_ru"  type="text">
                                    </div>
                                </div>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> text ru<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="title" class="form-control col-md-7 col-xs-12" value="{{ old('text_ru')}}"  name="text_ru"  type="text"></textarea>
                                    </div>
                                </div><hr>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Title az
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" class="form-control col-md-7 col-xs-12" value="{{ old('title_az')}}"  name="title_az" type="text">
                                    </div>
                                </div>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">sub Title az
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" class="form-control col-md-7 col-xs-12"  value="{{ old('subtitle_az')}}" name="subtitle_az" type="text">
                                    </div>
                                </div>
                                <div class="item form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> text az
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="title" class="form-control col-md-7 col-xs-12"value="{{ old('text_az')}}"   name="text_az"  type="text"></textarea>

                                    </div>
                                </div><hr>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="button" class="btn btn-primary"  onclick="redirect()">Cancel</button>
                                        <input type="submit" class="btn btn-success"  value="Add" >
                                    </div></div></form><!-- /page content --></div>
                    </div></div></div>
            <script>
                function redirect(){
                    window.location="{{URL::to('/adminpanel/achievement')}}";
                }
                function toggleCheckbox(element)
                {   if(element.checked){
                    $('#passwordPanel').show();}
                    else{
                        $('#passwordPanel').hide();
                    }}
            </script>
        </section>
    </section>
@stop
