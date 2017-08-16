@extends('admin.master')
@section('content')

    <section id="main-content">
        <section class="wrapper">

        <div class="container" style="height: 100%;width: 100%;">
            <div class="" >
                <div class="item  " style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                    <div class="thumbnail" style="margin-top: 1%">
                        <h1 style="margin-left: 5%">ADD NEW Event </h1>
                        <hr>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal form-label-left" novalidate style="margin-top: 5%; width:90%;margin-left: 5%;" action="{{ URL::to('/adminpanel/event') }}" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="file" name="image"  class="btn btn-file"  accept="image/*">

                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-primary" onclick="redirect()">Cancel</button>
                                    <input type="submit" class="btn btn-success" value="Create" >
                                </div>
                            </div>
                        </form>
                        <!-- /page content -->
                    </div>
                </div>
            </div>
        </div>

        <script>

            function redirect(){
                window.location="{{URL::to('/adminpanel/event')}}";
            }
        </script>

    </section>
    </section>
@endsection