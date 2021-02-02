@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div>
                เปิดบัญชีใหม่
                </div>
                <form action="{{ route('account.store') }}" method="POST">
                @csrf
                @method("POST")
                <table border =1>
                <tr>
                    <td>เลขบัญชี : </td>
                    <td><input type=text name=ACC_No></td>
                </tr>
                <tr>
                    <td>ชนิดบัญชี : </td>
                    <td><input type=text name=Type_No></td>
                </tr>
                <tr>
                    <td>ชื่อ : </td>
                    <td><input type=text name=ACC_Name></td>
                </tr>
                <tr>
                    <td>นามสกุล : </td>
                    <td><input type=text name=ACC_Surname></td>
                </tr>
                <tr>
                    <td>ที่อยู่ : </td>
                    <td><input type=text name=Address></td>
                </tr>
                <tr>
                    <td>ตำบล : </td>
                    <td><input type=text name=SubDistrict></td>
                </tr>
                <tr>
                    <td>อำเภอ : </td>
                    <td><input type=text name=District></td>
                </tr>
                <tr>
                    <td>จังหวัด : </td>
                    <td><input type=text name=Province></td>
                </tr>
                <tr>
                    <td>รหัสไปรษณีย์ : </td>
                    <td><input type=text name=ZipCode></td>
                </tr>
                <tr>
                    <td>วันที่เปิดบัญชี : </td>
                    <td><input type=text name=DateOp></td>
                </tr>
                <tr>
                    <td>จำนวนเงิน : </td>
                    <td><input type=text name=Balance></td>
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
