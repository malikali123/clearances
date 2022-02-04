@extends('layouts.print')
@section('title','_')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper pt-0">
            @include('admin.includes.print')
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">   الواردات </h4>
                            </div>

                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>رقم الحساب</th>
                                                <th>صاحب الحساب</th>
                                                <th>إسم البنك</th>
                                                <th>تاريخ فتح الحساب</th>
                                                <th>الرصيد الحالي</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($data)
                                                <?php
                                                    $num = 1;
                                                ?>
                                                @foreach($data as $bank)
                                                    <tr>
                                                        <td>{{$num++}}</td>
                                                        <td>{{$bank -> account_number ?? 'N/A'}}</td>
                                                        <td>{{$bank -> emp -> full_name ?? 'N/A'}}</td>
                                                        <td>{{$bank -> bank_name ?? 'N/A'}}</td>
                                                        <td>{{$bank -> created_at ->format('d-M-Y')}}</td>
                                                        <td onclick="testComma(this);" class="money">{{$bank -> transactions -> last() -> current_balance() ?? '0.00'}}</td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>

                                            <tr>
                                                <td> اجمالي الحسابات البنكية </td>
                                                <td><h3 class="m-0"><strong onclick="testComma(this);" class="money">{{ $data->sum('balance') }}</strong></h3 ></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" dir="ltr">{{ date('d-m-Y H:i:s') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
