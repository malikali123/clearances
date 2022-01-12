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
                                <h4 class="text-center">جميع الحسابات البنكية بالشركة </h4>
                            </div>

                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th> #</th>
                                            <th> اسم البنك </th>
                                            <th> رقم الحساب </th>
                                            <th> صاحب الحساب </th>
                                            <th> الرصيد </th>
                                            <th> تاريخ الاضافة</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($data)
                                            <?php
                                            $num = 1;
                                            ?>
                                            @foreach($data as $bank)
                                                <tr>
                                                    <td>{{ $num++ }}</td>
                                                    <td>{{$bank -> bank_name}}</td>
                                                    <td>{{$bank -> account_number}}</td>
                                                    <td>{{$bank -> emp ? $bank -> emp -> full_name : 'بدون' }}</td>
                                                    <td>{{$bank ->balance}}</td>
                                                    <td>{{$bank -> created_at}}</td>
                                                </tr>
                                            @endforeach
                                        @endisset

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
