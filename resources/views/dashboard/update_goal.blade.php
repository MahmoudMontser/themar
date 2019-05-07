@extends('layouts.dashboard')

@section('contentt')





    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Update Goal</b></h4>

                <div class="row">
                    <div class="col-md-6">
                        <form  method="post" action="{{route('update_goal',[$goal->id])}}" enctype="application/x-www-form-urlencoded">
                            <div class="p-20">
                                <div class="m-t-20">
                                    <h5><b>Goal</b></h5>
                                    <textarea id="goal"  name="goal" class="form-control">{{$goal->goal}}</textarea>
                                </div>
                            </div>
                    </div>

                </div>
                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"type="submit"  value="submit" style="width: 100px">
                    Update
                </button>

            </div>
        </div>
        {{csrf_field()}}
        </form>
    </div>


@endsection