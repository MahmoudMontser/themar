

@extends('layouts.dashboard')

@section('contentt')

                    <div class="card-box">


                        <h4 class="m-t-0 header-title"><b>{{$b->name}}:Images of </b></h4>
                        <p class="text-muted m-b-15 font-13">

                        </p>
                        @foreach($bimages as $bimage)
                        <div class="m-b-15">

                                <div class="col-sm-6 col-lg-3 col-md-4 desktops">
                                    <div class="product-list-box thumb">
                                        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                                            <a href="{{route('delete_bimage',[$bimage->id])}}" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                            <img src="{{asset('images/b_images/'.$bimage->image)}}" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                    </div>




                        </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>Bootstrap FileStyle</b></h4>
                                <p class="text-muted m-b-15 font-13">

                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-20">
                                                <form   method="post" action="{{route('store_bimage',$id)}}" enctype="multipart/form-data">

                                                   <input type="file" id="image" name="image" >
                                                <button class="btn btn-dropbox" type="submit">

                                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                                </button>
                                                {{csrf_field()}}

                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    @endsection