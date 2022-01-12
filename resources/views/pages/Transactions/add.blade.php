@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    دفع القيمه الجمركيه
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    دفع القيمه الجمركيه
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
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر المورد او المخلص
                                </label>
                                <select name="name" class="select2 form-control">
                                    <optgroup label="من فضلك أختر المورد او المخلص ">
                                        @if($clearances && $clearances -> count() > 0)
                                            @foreach($clearances as $clearance)
                                                <option
                                                    value="{{$clearance -> id }}">{{$clearance->name}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>


                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر رقم الحساب
                                </label>
                                <select name="account_number" class="select2 form-control">
                                    <optgroup label="من فضلك أختر رقم الحساب ">
                                        @if($accounts && $accounts -> count() > 0)
                                            @foreach($accounts as $account)
                                                <option
                                                    value="{{$account -> id }}">{{$account->accountNumber}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>


                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر نوع لبضاعه
                                </label>
                                <select name="product_type" class="select2 form-control">
                                    <optgroup label="من فضلك أختر نوع لبضاعه ">
                                        @if($values && $values -> count() > 0)
                                            @foreach($values as $value)
                                                <option
                                                    value="{{$value -> id }}">{{$value->decription}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>


                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">وصف العمليه </label>
                                <input type="text" value="" name="description" class="form-control">
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
