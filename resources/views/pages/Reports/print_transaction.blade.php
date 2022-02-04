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
                                <h4 class="text-center">تقرير معاملات راس مال - {{ $branch->name ?? 'N/A' }}</h4>
                            </div>

                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> #</th>
                                                <th>التاريخ </th>
                                                <th> نوع المعاملة  </th>
                                                <th>المبلغ</th>
                                                <th>الرصيد الحالي</th>
                                                <th>البيان </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($data)
                                            <?php $num = 1; ?>
                                            @foreach($data as $transaction)
                                            <tr>
                                                <td>{{ $num++ }}</td>
                                                <td>{{$transaction -> created_at ->format('d-M-Y')}}</td>
                                                <td>{{$transaction -> getType()}}</td>
                                                <td onclick="testComma(this);" class="money">{{$transaction -> amount}}</td>
                                                <td onclick="testComma(this);" class="money">{{$transaction -> balance()}}</td>
                                                <td>{{$transaction -> statement}}</td>
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
                                                <td > راس المال الفعلي</td>
                                                <td><h3 class="m-0"><strong onclick="testComma(this);" class="money">{{ $data->count() == 0 ? '00.00' : $data->first()->current_balance() }}</strong></h3 ></td>
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
