@extends('acctype.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div>
                <a class="btn btn-primary" href="{{ route('acctype.create') }}">เพิ่มประเภทบัญชี </a>
                </div>
                <table border=1>
                    <tr>
                        <td>รหัสประเภทบัญชี</td>
                        <td>ประเภทบัญชี</td>
                        <td>วันที่เรื่มต้น</td>
                        <td>วันที่สิ้นสุด</td>
                        <td>ดอกเบี้ย</td>
                    </tr>
                    @foreach($acctype as $type)
                    <tr>
                        <td>{{$type->Type_No }}</td>
                        <td>{{$type->Type_Name}}</td>
                        <td>{{$type->DateBegin}}</td>
                        <td>{{$type->DateEnd}}</td>
                        <td>{{$type->Rate}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
