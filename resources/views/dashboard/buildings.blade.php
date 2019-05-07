@extends('layouts.dashboard')

@section('contentt')







    <div class="row">
        <div class="m-b-15">
            <a href="{{route('create_buildings_page')}}">

            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light pull-left" type="submit"  value="submit" style="width: 150px" >
                Add Building
            </button>
            </a>
            @foreach($buildings as $building)
            <div class="col-sm-6 col-lg-3 col-md-4 desktops">
                <div class="product-list-box thumb">
                    @foreach($building->building_images as $bimage)

                     @if ($loop->first)
                         <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
                             <img src="{{asset('images/b_images/'.$bimage->image)}}" class="thumb-img" alt="work-thumbnail">
                         </a>
                     @endif


                    @endforeach

                    <div class="product-action">
                        <a href="{{route('update_building_page',[$building->id])}}" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="
                                var result=confirm('you are going to delete---->{{$building->name}}');
                                if(result){
                                event.preventDefault();
                                document.getElementById('delete_form').submit();
                                }
                                " >
                            <i class="md md-close">
                            <form id="delete_form" action="{{route('delete_building',[$building->id])}}"
                                  method="post" style="display: none">
                                {{csrf_field()}}
                            </form></i>




                        <a href="{{route('add_bimage',$building->id)}}" class="btn btn-success btn-sm"><i class="md md-import-export"> ADD IMAGE</i></a>
                    </div>


                    <div class="price-tag">
                        {{$building->status}}
                    </div>
                    <div class="detail">
                        <h4 class="m-t-0"><a href="" class="text-dark">{{$building->name}}</a> </h4>
                        <div class="rating">
                            <h4 class="m-t-0"><a href="" class="text-dark">{{$building->location->location_name}}</a> </h4>
                        </div>
                        <h5 class="m-0"> <span class="text-muted">  <h4 class="m-t-0"><a href="" class="text-dark">{{$building->owner}}</a> </h4></span></h5>
                    </div>
                </div>
            </div>


@endforeach

        </div>
    </div>





    @endsection