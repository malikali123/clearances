@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    فحص الادويه وتاكيد صلاحيتها
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    فحص الادويه وتاكيد صلاحيتها
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

                    <form method="post" action="{{ route('transactions.store') }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4"> نوع البضاعه </label>--}}
{{--                                <input type="text" value="" name="type" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4"> اختر المورد او المخلص--}}
{{--                                </label>--}}
{{--                                <select name="name" class="select2 form-control">--}}
{{--                                    <optgroup label="من فضلك أختر المورد او المخلص ">--}}
{{--                                        @if($clearances && $clearances -> count() > 0)--}}
{{--                                            @foreach($clearances as $clearance)--}}
{{--                                                <option--}}
{{--                                                    value="{{$clearance -> id }}">{{$clearance->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                    </optgroup>--}}
{{--                                </select>--}}


{{--                            </div>--}}
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر رقم الحساب
                                </label>
                                <select name="account_number" class="select2 form-control">
                                    <optgroup label="من فضلك أختر رقم الحساب ">
                                        @if($account && $account -> count() > 0)
                                            @foreach($account as $account)
                                                <option
                                                    value="{{$account -> id }}">{{$account->accountNumber}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>


                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">وصف البضاعه </label>
                                <input type="text" readonly value="{{$import->decription}}" name="decription" class="form-control">

                                <input type="hidden" name="import_id" value="{{ $import->id }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">البيان</label>
                                <input type="text" value="" name="statement" class="form-control">

                            </div>

                            <input type="number" hidden value="{{auth()->user()->id}}" name="clearance" class="form-control">


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">قيمة البضاعه  </label>
                                <input type="number" readonly value="{{$import->total}}" name="value" class="form-control">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">القيمه الجمركيه  </label>
                                <input type="number" readonly value="{{$import->amount}}" name="amount" class="form-control">

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
