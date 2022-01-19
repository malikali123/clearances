@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة مخلص جديد
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    اضافة مخلص جديد
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

                    <form method="post" action="{{ route('clearance.store') }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">اسم المخلص </label>
                                <input type="text" value="" name="name" class="form-control">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">التلفون </label>
                                <input type="text" value="" name="phon" class="form-control">
                                @error('phon')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title"> الايميل </label>
                                <input type="email" value="" name="email" class="form-control">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">الرقم الضريبي </label>
                                <input type="text" value="" name="clearaneNumber" class="form-control">
                                @error('clearaneNumber')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="title">كلمة المرور</label>
                                <input type="password" name="Password" class="form-control">
                                @error('Password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
