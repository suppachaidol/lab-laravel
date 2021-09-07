@extends('layouts.main')

@section('content')
    <h1>เพิ่มอพาร์ตเมนต์ใหม่</h1>
    <form action="{{ route('apartments.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">ชื่อ</label>
            <input type="text" class=""
                   name = "name"
                   placeholder="ระบุชื่ออพาร์ตเมนต์">
        </div>

        <div>
            <label for="num_floor">จำนวนชั้น</label>
            <input type="number"
                   min="1"
                   name="num_room"> ชั้น
        </div>

        <div>
            <label for="num_room">จำนวนห้อง</label>
            <input type="number"
                   min="1"
                   name="num_room"> ห้อง
        </div>

        <div>
            <button type="submit">
                เพิ่ม
            </button>
        </div>
    </form>
@endsection
