@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل بيانات المخلص
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تعديل بيانات المخلص
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

                    <form method="post" action="{{ route('clearance.update', $data->id) }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">اسم المخلص </label>
                                <input type="text" value="{{$data->name}}" name="name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">رقم اللتلفون </label>
                                <input type="text" value="{{$data->phon}}" name="phon" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">الايميل </label>
                                <input type="text" value="{{$data->email}}" name="email" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> الرقم الضريبي </label>
                                <input type="text" value="{{$data->clearaneNumber}}" name="clearaneNumber" class="form-control">
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
