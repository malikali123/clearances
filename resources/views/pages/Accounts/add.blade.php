@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة حساب جديد
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    اضافة حساب جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('account.store') }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر اسم البنك
                                </label>
                                <select name="bank_name" class="select2 form-control">
                                    <optgroup label="من فضلك أختر اسم البنك  ">
                                        @if($bank && $bank -> count() > 0)
                                            @foreach($bank as $banks)
                                                <option
{{--                                                    {{ old('bank_id') == $banks->id ? 'selected' : '' }}--}}
                                                    value="{{$banks -> id }}">{{$banks -> bank_name}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">رقم الحساب </label>
                                <input type="number" required value="" name="account_number" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر صاحب الحساب
                                </label>
                                <select name="clearance" class="select2 form-control">
                                    <optgroup label="من فضلك أختر صاحب الحساب ">
                                        @if($data && $data -> count() > 0)
                                            @foreach($data as $clearance)
                                                <option
                                                    value="{{$clearance -> id }}">{{$clearance -> name}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>


                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">الرصيد الافتتاحي </label>
                                <input type="number" required value="" name="palance" class="form-control">
                            </div>



                        </div>



                        <button type="submit" class="btn btn-primary">تاكيد</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
