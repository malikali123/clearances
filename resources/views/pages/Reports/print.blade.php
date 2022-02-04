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
                                <h4 class="text-center">تقرير راس مال الفروع</h4>
                            </div>

                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> #</th>
                                                <th> الفرع </th>
                                                <th>  راس المال  بالفروع </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($data)
                                                <?php
                                                    $num = 1;
                                                ?>
                                                @foreach($data as $as)
                                                    <tr>
                                                        <td>{{ $num++ }}</td>
                                                        <td>{{$as[0] -> branch -> name ?? 'N/A'}}</td>
                                                        <td onclick="testComma(this);" class="money">{{  $as -> first() -> balance() }}</td>
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
                                                <td> اجمالي راس مال الفروع </td>
                                                <td><h3 class="m-0"><strong onclick="testComma(this);" class="money">{{ $data->map(function($branch){ return $branch->first() -> balance();})->sum() }}</strong></h3 ></td>
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
