@extends('layouts.dashboard')

@section('contentt')



    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Create Building</b></h4>
            <p class="text-muted m-b-30 font-13">
                create building then add images to it
            </p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal"  method="post" action="{{route('update_building',[$building->id])}}" enctype="application/x-www-form-urlencoded">
                        <div class="form-group">
                            <label class="col-md-2 control-label" >Name of Building</label>
                            <div class="col-md-10">
                                <input type="text"
                                       class="form-control"
                                       id="name"
                                       required
                                       name="name"
                                       spellcheck="false"
                                       placeholder="set name of the new building like:'برج الامل'"
                                       value="{{$building->name}}"


                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Owner Name</label>
                            <div class="col-md-10">
                                <input type="text"
                                       id="owner"
                                       required
                                       name="owner"
                                       spellcheck="false"
                                       placeholder="set name of owner"
                                       value="{{$building->owner}}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Location ID</label>
                            <div class="col-md-10">
                                <input type="number"
                                       class="form-control"

                                       id="location_id"
                                       required
                                       name="location_id"
                                       spellcheck="false"
                                       placeholder="set location id from location table"
                                       value="{{$building->location->location_id}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control"

                                       id="status"
                                       required
                                       name="status"
                                       spellcheck="false"
                                       placeholder="set status of building like :'جيد,جيد جدا'"
                                       value="{{$building->status}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5"
                                          id="description"
                                          required
                                          name="description"
                                          spellcheck="false"
                                >{{$building->description}}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"type="submit"  value="submit" style="width: 100px">
                            Create
                        </button>



                        {{csrf_field()}}


                    </form>
                </div>

            </div>
        </div>
    </div>
    @endsection





