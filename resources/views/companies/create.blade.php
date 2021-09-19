@extends('layouts.app')
@section('content')
<h1 class="text-center p-3">Tashkilot qo'shish</h1>
<div class="row">
    <div class="col-md-6">

        <form method="POST" action="{{route('companies.store')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tashkilot nomi</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Tashkilot manzili</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label class="form-label" for="phone">Tashkilot telefon raqami</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>
</div>

@endsection