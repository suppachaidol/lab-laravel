@extends('layouts.main')

@section('content')
    <h1>
        Apartment {{ $apartment->name }}
    </h1>
    <div>
        จำนวน {{ $apartment->num_floor }} ชั้น
        {{ $apartment->num_room }} ห้อง
    </div>
    <hr>
    <div>
        <a href="{{route('apartments.edit',['apartment' => $apartment->id])}}">
            แก้ไขอพาร์ตเมนต์
        </a>
    </div>

    <hr>
    <div>
        <h2>DANGER ZONE</h2>
        <form action="{{ route('apartments.destroy', ['apartment' => $apartment->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>กาลบไม่สามารถกู้คืนได้</p>
            <div>
                <label for="destroy">ใส่ชื่ออพาร์ตเมนต์เพื่อยืนยันการลบ</label>
                <input type="text" name="name">
            </div>
            <button type="submit">
                ลบ
            </button>

        </form>
    </div>
@endsection
