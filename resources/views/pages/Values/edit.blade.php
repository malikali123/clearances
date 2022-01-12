@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل تعريفه
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تعديل تعريفه
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
{{--                        {{ route('values.update') }}--}}

                    <form method="post" action="{{ route('values.update', $value->id) }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> نوع الوارد </label>
                                <input type="text" required value="{{$value -> product_type}}" name="type" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">كود الوارد </label>
                                <input type="text" required value="{{$value -> product_code}}" name="code" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">وصف الوارد </label>
                                <input type="text" required value="{{$value -> description}}" name="description" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">نسبة الجمارك من الوارد </label>
                                <input type="number" required value="{{$value -> value}}" name="perscent" class="form-control">
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
