@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الصلاحيات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
قائمة الصلاحيات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row --><div class="content-body">
<!-- DOM - jQuery events table -->
<section id="dom">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> جميع الصلاحيات </h4>
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
                    <div class="card-body card-dashboard">
                        <table
                            class="table display nowrap table-striped table-bordered">
                            <thead class="">
                            <tr>
                                <th>الاسم</th>
                                <th>الصلاحيات</th>
                                <th>الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @isset($roles)
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role -> name}}</td>

                                        <td>
                                            @foreach($role -> permissions as $permission)
                                                {{$permission}} ,
                                            @endforeach

                                        </td>
                                        <td>
                                            <div class="btn-group" role="group"
                                                 aria-label="Basic example">
                                                <a href="{{route('admin.roles.edit',$role -> id)}}"
                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset


                            </tbody>
                        </table>
                        <div class="justify-content-center d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</div>
@endsection
@section('js')
{{--    @toastr_js--}}
{{--    @toastr_render--}}
@endsection
