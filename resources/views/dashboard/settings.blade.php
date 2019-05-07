@extends('layouts.dashboard')

@section('contentt')

<div class="col-sm-12">
    <div class="card-box">
        <h4 class="m-t-0 header-title"><b>set your settings</b></h4>
        <p class="text-muted m-b-30 font-13">
            this siting
        </p>
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal"  method="post" action="{{route('settings')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-2 control-label" >Title</label>
                        <div class="col-md-10">
                            <input type="text"
                                   class="form-control"
                                   id="title"
                                   required
                                   name="title"
                                   spellcheck="false"
                                   placeholder="type title of the site"
                                   value="{{$settings->title}}"


                            >

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" >Title icon</label>
                        <div class="col-md-10">
                            <input type="file" id="icon" name="icon"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >Logo</label>
                        <div class="col-md-10">
                            <input type="file" id="logo" name="logo"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >About_us Image</label>
                        <div class="col-md-10">
                            <input type="file" id="about" name="about" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label">Footer Text</label>
                        <div class="col-md-10">
                                <textarea class="form-control" rows="5"
                                          id="footer_text"
                                          required
                                          name="footer_text"
                                          spellcheck="false"
                                >{{$settings->text_below_logo}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >Phone</label>
                        <div class="col-md-10">
                            <input type="text"
                                   class="form-control"
                                   id="phone"
                                   required
                                   name="phone"
                                   spellcheck="false"
                                   placeholder="type phone number"
                                   value="{{$settings->phone}}"


                            >

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >Whatsapp</label>
                        <div class="col-md-10">
                            <input type="text"
                                   class="form-control"
                                   id="whatsapp"
                                   required
                                   name="whatsapp"
                                   spellcheck="false"
                                   placeholder="type whatsapp contact"
                                   value="{{$settings->whatsapp}}"


                            >
                        </div>
                    </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" >Email</label>
                                <div class="col-md-10">
                                    <input type="text"
                                           class="form-control"
                                           id="email"
                                           required
                                           name="email"
                                           spellcheck="false"
                                           placeholder="type company email"
                                           value="{{$settings->email}}"

                                    >
                                </div>
                            </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" >Facebook Contact</label>
                                        <div class="col-md-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="fb"
                                                   required
                                                   name="fb"
                                                   spellcheck="false"
                                                   placeholder="type facebook link"

                                                   value="{{$settings->facebook_contact}}"
                                            >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" >Twitter Contact</label>
                                        <div class="col-md-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="twit"
                                                   required
                                                   name="twit"
                                                   spellcheck="false"
                                                   placeholder="type  twitter link"
                                                   value="{{$settings->twitter_contact}}"


                                            >
                                        </div>
                                    </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" >G+ Contact</label>
                                                <div class="col-md-10">
                                                    <input type="text"
                                                           class="form-control"
                                                           id="g+"
                                                           required
                                                           name="g+"
                                                           spellcheck="false"
                                                           placeholder="type g+ link"


                                                    >
                                                </div>
                                            </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label" >Instagram</label>
                                                        <div class="col-md-10">
                                                            <input type="text"
                                                                   class="form-control"
                                                                   id="insta"
                                                                   required
                                                                   name="insta"
                                                                   spellcheck="false"
                                                                   placeholder="type instagram link"
                                                                   value="{{$settings->instagram_contact}}"


                                                            >

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