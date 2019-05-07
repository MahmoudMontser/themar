@extends('layouts.main')
@section('contents')
    <section class="sign-in">
        <div class="container">
            <div class="signn">
                <div class="sign">
                    <div class=" col-lg-7 col-md-7 col-sm-12 col-xs-12 pull-right">


                        <form method="post" action="{{route('update_user_v')}}" enctype="application/x-www-form-urlencoded">
                            <div class="form-group sign-up">

                                {{ csrf_field() }}
                                <input type="text" class="form-control one sign-up-one mainLoginInput"
                                       id="user-name"
                                       required
                                       name="name"
                                       spellcheck="false"
                                       value="{{$user->name}}"
                                       placeholder="   اسم المستخدم   ">

                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="phone-number"
                                       required
                                       name="phone_number"
                                       spellcheck="false"
                                       value="{{$user->phone_number}}"
                                       placeholder="    رقم الجوال    ">
                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="email"
                                       required
                                       name="email"
                                       spellcheck="false"
                                       value="{{$user->email}}"
                                       placeholder="    الايميل ">
                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="pass"
                                       required
                                       name="pass"
                                       spellcheck="false"
                                       placeholder="   كلمه المرور ">
                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="pass_confirmation"
                                       required
                                       name="pass_confirmation"
                                       spellcheck="false"
                                       placeholder="    تاكيد كلمه المرور ">

                                <button type="submit"  value="submit" class="btn btn-default">تعديل</button>
                                <div class="not-avilable">
                                    لدي حساب بالفعل<span><a href="#">تسجيل دخول</a> </span>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class=" col-lg-5 col-md-5 pull-left hidden-sm hidden-xs">
                        <div class="img-left rocket">
                            <img src="{{asset('them/imgs/rocko.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
