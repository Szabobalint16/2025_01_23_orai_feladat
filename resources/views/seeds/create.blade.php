@extends('layouts.header')

@can("create")
    {{-- Form a létrheozásra és elküldésre --}}
@else
    {{-- Figyelmeztetés hogy nincs engedélye erre. --}}
@endcan


@section('content')
<div class="container">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Új Facsemete hozzádása</h4>
            <p class="card-text ps-2">A <span style="color: red">*</span>-gal jelölt inputokat ki kell tölteni</p>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>ERROR!</strong> Please correct your mistakes.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success!</strong> {{ session()->get('success') }}
                </div>
            @endif

            <div>
                <form action="{{route('allSeeds.store')}}" method="post">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="" name="name"
                            value="{{old('name')}}">
                        <label for="name">Neve</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="type" placeholder="" name="type"
                            value="{{old('type')}}">
                        <label for="type">Típus</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="6" class="form-control" id="old" placeholder="" name="old"
                            value="{{old('old')}}">
                        <label for="old">Éves</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="12" class="form-control" id="cotyledonNumber" placeholder=""
                            name="cotyledonNumber" value="{{old('cotyledonNumber')}}">
                        <label for="cotyledonNumber">Sziklevelek száma</label>
                    </div>

                    <div class="form-check form-switch mb-3 ms-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="growing" name="growing"/>
                        <label class="form-check-label" for="growing"> Termő-e </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="5" step="0.1" class="form-control" id="height" placeholder=""
                            name="height" value="{{old('height')}}">
                        <label for="height">Magassága</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" min="1" max="5" class="form-control" id="wateringRequirement"
                            placeholder="" name="wateringRequirement" value="{{old('wateringRequirement')}}">
                        <label for="wateringRequirement">Vízigénye</label>
                    </div>

                    <div class="text-center">
                        <button name="submit" id="submit" type="submit"
                            class="btn btn-outline-success">Hozzáadás</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection