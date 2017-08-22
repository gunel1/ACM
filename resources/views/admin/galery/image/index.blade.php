@extends('admin.master')
@section('content')
    <section id="main-content">
        <section class="wrapper">
        <div class="container" style="width: 100%;">
            <div class="thumbnail" style="width: 100%;box-shadow: 1px 1px 1px black; margin-right: 10%;">
                <div class="row">
                    <div  class="panel-heading" style="margin-right: 2%; margin-left: 0%;">
                        <div class="well well-sm" style="height: 70px; width:100%; margin-left: 0%;">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul> @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form action="{{ URL::to('/adminpanel/galery/image') }}"  class="col-xs-4 col-lg-4" method="POST" style="width: 70%;" enctype="multipart/form-data">
                                 <input type="file" name="images[]"  onchange="upload(this)" class="btn btn-file" multiple accept="image/*">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="parent_id" value="{{$parent_id}}">
                                    <input name="galery_id" type="hidden" value="{{$galery_id}}">
                            </form>
                        </div>
                        @foreach($images as $image)
                            <div class="col-sm-3">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="#" style="font-size: 20px;color: orange;">
                                           @if(isset($image->path))
                <img src="{{$image->getImageUrlAttribute()}}" alt="text"  style="box-shadow: 0px 2px 4px 0px gray; width: 100%; height: 200px;">  @endif</a></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <form action="{{ URL::to('/adminpanel/galery/image/'.$image->id) }}" method="POST" id = "deleteStore">
                                                <input name="_token" type="hidden" value="{{csrf_token()}} " >
                                                <input name="_method" type="hidden" value="DELETE" >
                                                <input name="parent_id" type="hidden" value="{{$image->parent_id}}">
                                                <input name="galery_id" type="hidden" value="{{$galery_id}}">
                                                <button type = "button" onclick="showAlarm(this)" class="deleteStore btn btn-danger" value="Delete" style="margin-left: 15%;background-color: #f48064;border:0;">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>@endforeach</div></div>
                    <div class="container">
                        {{$images->render()}}
                    </div></div></div></section></section>
    <script>
        function upload(element){
            element.parentElement.submit();
        }
        function showAlarm(btn) {
            if (confirm("ARE YOU SURE?") == true) {
                btn.parentElement.submit();
            } else {

            }        }
    </script>
@endsection
