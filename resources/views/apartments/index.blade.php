@extends('layouts.main')

@section('content')
    <h1 class="text-5xl">
        รายการอพาร์ตเมนต์
    </h1>

    <table class="table border-gray-500">
        <thead>
        <tr>
            <th>ชื่ออพาร์ตเมนต์</th>
            <th>จำนวนชั้น</th>
            <th>จำนวนห้อง</th>
        </tr>
        </thead>
        <tbody>
            @foreach($apartments as $apartment)
                <tr>
                    <td>{{ $apartment->name }}</td>
                    <td>{{ $apartment->num_floor }}</td>
                    <td>{{ $apartment->num_room }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
