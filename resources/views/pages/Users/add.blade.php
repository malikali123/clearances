@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة مستخدم جديد
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    اضافة مستخدم جديد
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form"> أضافة مستخدم جديد </h4>
                            <a class="heading-elements-toggle"><i
                                    class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form"
                                      action="{{route('users.store')}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-home"></i> البيانات الاساسية </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> الاسم
                                                    </label>
                                                    <input type="text" id="name"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value=""
                                                           name="name">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> الايميل
                                                    </label>
                                                    <input type="email" id="email"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value=""
                                                           name="email">
                                                    @error("email")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> كلمة المرور
                                                    </label>
                                                    <input type="password" id="password"
                                                           class="form-control"
                                                           placeholder="  "
                                                           name="password">
                                                    @error("password")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">



                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">تاكيد</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
