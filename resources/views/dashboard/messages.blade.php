@extends('layouts.dashboard')

@section('contentt')

<table>

    @foreach($messages as $message)
<tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
        <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><tbody><tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><br class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">

                    Message From: {{$message->name}}</br>
                    Email:{{$message->email}}
                </td>
            </tr>
            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">


                   Received at : {{$message->created_at}}
                </td>
            </tr>


            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">


                    <br>
                  <p>  {{$message->message}}</p>
                </td>
            </tr><tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" itemprop="handler" itemscope="" itemtype="http://schema.org/HttpActionHandler" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">


                    <button type="button" class="btn btn-danger" href=""
                            onclick="
                                    var result=confirm('you are going to delete---->{{$message->name}} -- message');
                                    if(result){
                                    event.preventDefault();
                                    document.getElementById('delete_form').submit();
                                    }
                                    " >
                        حذف
                        <form id="delete_form" action="{{route('delete_message',[$message->id])}}"
                              method="post" style="display: none">
                            {{csrf_field()}}
                        </form>
                        <span class="m-l-5">
                                                    <i class="fa fa-trash-o">

                                                    </i>
                                                </span>
                    </button>
                </td>
            </tr></tbody></table></td>
</tr>

@endforeach
</table>

    @endsection