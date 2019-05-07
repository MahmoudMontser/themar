@extends('layouts.dashboard')

@section('contentt')


    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title"><b><i class="ti-user"></i>Users</b></h4>
        <a href="{{route('create_users_page')}}">
        <button type="button" class="btn btn-default" >
            اضافه
            <span class="m-l-5"><i class="fa fa-plus"></i></span>
        </button>
        </a>
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 50px;">
                                Id
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70px;">
                                Status
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 191px;">
                                Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 318px;">
                                Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">
                                Phone_Number
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 142px;">
                                Password
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 142px;">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- record entry -->
                        @foreach($users as $user)
                            <tr role="row" class="odd">
                                <td>{{$user->id}}</td>
                                <td class="">{{$user->status}}</td>
                                <td class="">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->password}}</td>
                                <td> <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">

                                        <tbody>
                                        <!-- actions buttons -->

                                        <tr role="row" class="odd">
                                            <td>
                                                <a href="{{route('edit_user',[$user->id])}}">
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
                                                        var result=confirm('you are going to delete---->{{$user->name}}');
                                                        if(result){
                                                        event.preventDefault();
                                                        document.getElementById('delete_form').submit();
                                                        }
                                                        " >
                                                    حذف
                                                    <form id="delete_form" action="{{route('delete_user',[$user->id])}}"
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



@endsection