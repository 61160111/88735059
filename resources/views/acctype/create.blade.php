@extends('acctype.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div>
                เพิ่มประเภทบัญชี
                </div>
                <form action="{{ route('acctype.store') }}" method="POST">
                @csrf
                @method("POST")
                <table border =1>
                <tr>
                    <td>รหัสประเภทบัญชี : </td>
                    <td><input type=text name=Type_No></td>
                </tr>
                <tr>
                    <td>ประเภทบัญชี : </td>
                    <td><input type=text name=Type_Name></td>
                </tr>
                <tr>
                    <td>วันที่สิ้นสุด : </td>
                    <td><input type=date name=DateEnd></td>
                </tr>
                <tr>
                    <td>ดอกเบี้ย : </td>
                    <td><input type=float name=Rate></td>
                </tr>
                <tr>
                <td colspan=2>
                    <button type="reset" class="btn btn-primary">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </td>
                </tr>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
