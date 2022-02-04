@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل بيانات المستخدم
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تعديل بيانات المستخدم
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

                    <form method="post" action="{{ route('users.update', $data->id) }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">اسم المستخدم </label>
                                <input type="text" value="{{$data->name}}" name="name" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">الايميل </label>
                                <input type="text" value="{{$data->email}}" name="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput1"> اختر الصلاحية
                                    </label>
                                    <select name="role_id" class="select2 form-control" >
                                        <optgroup label="من فضلك أختر الصلاحية ">
                                            @if($roles && $roles -> count() > 0)
                                                @foreach($roles as $role)
                                                    <option
                                                        value="{{$role -> id }}">{{$role -> name}}</option>
                                                @endforeach
                                            @endif
                                        </optgroup>
                                    </select>
                                    @error('role_id')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>

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
