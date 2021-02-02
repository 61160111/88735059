@extends('layouts.app')

@section('content')
@foreach($account as $acc)
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div>
                แก้ไขข้อมูลบัญชี
                </div>
                <form action="{{ route('account.update',$acc->ACC_No) }}" method="POST">
                @csrf
                @method("PUT")
                <table border =1>
                <tr>
                    <td>เลขบัญชี : </td>
                    <td><input type=text name=ACC_No value="{{ $acc->ACC_No }}"></td>
                </tr>
                <tr>
                    <td>ชนิดบัญชี : </td>
                    <td><input type=text name=Type_No value="{{ $acc->Type_No }}"></td>
                </tr>
                <tr>
                    <td>ชื่อ : </td>
                    <td><input type=text name=ACC_Name value="{{ $acc->ACC_Name }}"></td>
                </tr>
                <tr>
                    <td>นามสกุล : </td>
                    <td><input type=text name=ACC_Surname value="{{ $acc->ACC_Surname }}"></td>
                </tr>
                <tr>
                    <td>ที่อยู่ : </td>
                    <td><input type=text name=Address value="{{ $acc->Address }}"></td>
                </tr>
                <tr>
                    <td>ตำบล : </td>
                    <td><input type=text name=SubDistrict value="{{ $acc->SubDistrict }}"></td>
                </tr>
                <tr>
                    <td>อำเภอ : </td>
                    <td><input type=text name=District value="{{ $acc->District }}"></td>
                </tr>
                <tr>
                    <td>จังหวัด : </td>
                    <td><input type=text name=Province value="{{ $acc->Province }}"></td>
                </tr>
                <tr>
                    <td>รหัสไปรษณีย์ : </td>
                    <td><input type=text name=ZipCode value="{{ $acc->ZipCode }}"></td>
                </tr>
                <tr>
                    <td>วันที่เปิดบัญชี : </td>
                    <td><input type=text name=DateOp value="{{ $acc->DateOp }}"></td>
                </tr>
                <tr>
                    <td>จำนวนเงิน : </td>
                    <td><input type=text name=Balance value="{{ $acc->Balance }}"></td>
                </tr>
                <tr>
                <td colspan=2>
                    <button type="reset" class="btn btn-primary">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
                </td>
                </tr>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
