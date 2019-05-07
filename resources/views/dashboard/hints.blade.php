@extends('layouts.dashboard')

@section('contentt')
<div class="card-box table-responsive">
    <h4 class="m-t-0 header-title"><b><i class="ti-comment"></i>Hints</b></h4>

    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
            <thead>
            <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">
                    Hint Number
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 142px;">
                    Hint
                </th>

                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 142px;">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <!-- record entry -->
            @foreach($hints as $hint)
                <tr role="row" class="odd">
                    <td>{{$hint->id}}</td>
                    <td><h4>{{$hint->title}}</h4> <p>{{$hint->hint}}</p></td>
                    <td> <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">

                            <tbody>
                            <!-- actions buttons -->

                            <tr role="row" class="odd">
                                <td>
                                    <a href="{{route('update_hint_page',[$hint->id])}}">
                                        <button type="button" class="btn btn-default" >
                                            تعديل
                                            <span class="m-l-5"><i class="fa fa-cogs">

                                                    </i>
                                                </span>
                                        </button>
                                    </a>
                                </td>
                                <td class="">
                                    <button type="button" class="btn btn-danger" href=""
                                            onclick="
                                                    var result=confirm('you are going to delete---->{{$hint->title}}');
                                                    if(result){
                                                    event.preventDefault();
                                                    document.getElementById('delete_form').submit();
                                                    }
                                                    " >
                                        حذف
                                        <form id="delete_form" action="{{route('delete_hint',[$hint->id])}}"
                                              method="post" style="display: none">
                                            {{csrf_field()}}
                                        </form>
                                        <span class="m-l-5">
                                                    <i class="fa fa-trash">

                                                    </i>
                                                </span>
                                    </button>


                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>



<!------------------------------------------------------------->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Create a New Hint</b></h4>

            <div class="row">
                <div class="col-md-6">
                    <form  method="post" action="{{route('create_hint')}}" enctype="application/x-www-form-urlencoded">
                    <div class="p-20">
                        <h5><b>Hint Title</b></h5>
                        <input type="text" class="form-control" name="title" id="title">

                        <div class="m-t-20">
                            <h5><b>Hint</b></h5>
                            <textarea id="hint"  name="hint" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"type="submit"  value="submit" style="width: 100px">
                Create
            </button>

        </div>
    </div>
                {{csrf_field()}}
    </form>
</div>
@endsection