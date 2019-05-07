@extends('layouts.dashboard')

@section('contentt')




    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>update Hint</b></h4>

                <div class="row">
                    <div class="col-md-6">
                        <form  method="post" action="{{route('update_hint',[$hint->id])}}" enctype="application/x-www-form-urlencoded">
                            <div class="p-20">
                                <h5><b>Hint Title</b></h5>
                                <input type="text" class="form-control" name="title" id="title" value="{{$hint->title}}">

                                <div class="m-t-20">
                                    <h5><b>Hint</b></h5>
                                    <textarea id="hint"  name="hint" class="form-control">{{$hint->hint}}</textarea>
                                </div>
                            </div>
                    </div>

                </div>
                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"type="submit"  value="submit" style="width: 100px">
                    update
                </button>

            </div>
        </div>
        {{csrf_field()}}
        </form>
    </div>
@endsection