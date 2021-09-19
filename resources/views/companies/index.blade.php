@extends('layouts.app')
@section('content')
    <h2 class="text-center">Bu tashkilotlar ruyxati</h2>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="{{route('companies.create')}}"><button class="btn btn-success" type="button">Tashkilot qo'shish</button></a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Tr</td>
                <td>Tashkilot nomi</td>
                <td>Tashkilot manzili</td>
                <td>Telefon raqami</td>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{($companies->currentpage()-1)*$companies->perpage()+ ($loop->index+1)}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->phone}}</td>
            </tr>

            @endforeach

        </tbody>

    </table>
    {{$companies->links()}}
    @endsection
