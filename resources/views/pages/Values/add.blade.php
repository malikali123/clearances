@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة تعريفه جديده
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    اضافة تعريفه جديده
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

                    <form method="post" action="{{ route('values.store') }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> نوع الوارد </label>
                                <input type="text" required value="" name="type" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">كود الوارد </label>
                                <input type="text" required value="" name="code" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">وصف الوارد </label>
                                <input type="text" required value="" name="description" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">نسبة الجمارك من الوارد </label>
                                <input type="number" required value="" name="perscent" class="form-control">
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
