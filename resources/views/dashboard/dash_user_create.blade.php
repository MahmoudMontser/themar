@extends('layouts.dashboard')
@section('contentt')
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>انشاء مستخدم</b></h4>
            <p class="text-muted font-13 m-b-30">

            </p>

            <form method="post" action="{{route('create_users')}}">
                <div class="form-group">

                    {{ csrf_field() }}
                    <h4 class="m-t-0 header-title"><b>الاسم</b></h4>
                    <input type="text" class="form-control one sign-up-one mainLoginInput"
                           id="user-name"
                           required
                           name="name"
                           spellcheck="false"
                           placeholder="   اسم المستخدم   ">
                    <h4 class="m-t-0 header-title"><b>رقم الجوال</b></h4>


                    <input type="text" class="form-control"
                           id="phone-number"
                           required
                           name="phone_number"
                           spellcheck="false"
                           placeholder="    رقم الجوال    ">
                    <h4 class="m-t-0 header-title"><b>الايميل</b></h4>

                    <input type="text" class="form-control"
                           id="email"
                           required
                           name="email"
                           spellcheck="false"
                           placeholder="    الايميل ">
                    <h4 class="m-t-0 header-title"><b>كلمة المرور</b></h4>

                    <input type="text" class="form-control"
                           id="pass"
                           required
                           name="pass"
                           type="password"
                           spellcheck="false"
                           placeholder="   كلمه المرور ">
                    <h4 class="m-t-0 header-title"><b>تاكيد كلمة المرور</b></h4>
                    <input type="text" class="form-control"
                           id="pass_confirmation"
                           required
                           type="password"
                           name="pass_confirmation"
                           spellcheck="false"
                           placeholder="    تاكيد كلمه المرور ">

                    <button type="submit"  value="submit" class="btn btn-default">انشاء</button>
                </div>
            </form>
        </div>
    </div>
@endsection