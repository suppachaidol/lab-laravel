@extends('layouts.main')

@section('content')
    <h1>แก้ไขอพาร์ตเมนต์</h1>
    <form action="{{ route('apartments.update', ['apartment' => $apartment->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">ชื่อ</label>
            <input type="text" class=""
                   name = "name"
                   value="{{$apartment->name}}"
                   placeholder="ระบุชื่ออพาร์ตเมนต์">
        </div>

        <div>
            <label for="num_floor">จำนวนชั้น</label>
            <input type="number"
                   min="1"
                   value="{{$apartment->num_floor}}"
                   name="num_floor"> ชั้น
        </div>

        <div>
            <label for="num_room">จำนวนห้อง</label>
            <input type="number"
                   min="1"
                   value="{{$apartment->num_room}}"
                   name="num_room"> ห้อง
        </div>

        <div>
            <button type="submit">
                แก้ไข
            </button>
        </div>
    </form>
@endsection
