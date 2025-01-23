@extends('layouts.header')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Facsemeték</h1>
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">Neve</th>
                    <th scope="col">Típusa</th>
                    <th scope="col">Hány éves</th>
                    <th scope="col">Sziklevelének a száma</th>
                    <th scope="col">Termő-e</th>
                    <th scope="col">Magassága</th>
                    <th scope="col">Vízigénye</th>
                    <th scope="col" colspan="3">Akciók</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seeds as $item)
                    <tr class="text-center">
                        <td>{{$item->name}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->old}} éves</td>
                        <td>{{$item->cotyledonNumber}}</td>
                        <td>@if ($item->growing === 0)
                            {{"hamis"}}
                        @else
                            {{"igaz"}}
                        @endif
                        </td>
                        <td>{{$item->height}} cm</td>
                        <td>
                            @if ($item->wateringRequirement === 1)
                                {{"Hetente"}}
                            @else
                               {{$item->wateringRequirement}} {{"hetente"}}
                            @endif
                        </td>
                        <td><button class="btn btn-info">Show</button></td>
                        <td><button class="btn btn-warning">Edit</button></td>
                        <td><button class="btn btn-danger">Delete</button></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div>
            <a href="{{route('allSeeds.create')}}" class="btn btn-outline-dark px-5">Új Fapalánta Hozzáadása</a>
        </div>
        
    </div>
</div>
@endsection

