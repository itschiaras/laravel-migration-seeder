@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Treni di oggi</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                  <th scope="col">Azienda</th>
                  <th scope="col">Partenza</th>
                  <th scope="col">Destinazione</th>
                  <th scope="col" class="text-center">Orario partenza</th>
                  <th scope="col" class="text-center">Orario arrivo</th>
                  <th scope="col" class="text-center">N. Treno</th>
                  <th scope="col" class="text-center">N. Carrozze</th>
                  <th scope="col" class="text-center">In orario</th>
                  <th scope="col" class="text-center">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr class="@if($train->canceled) text-danger @endif">
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td class="text-center">{{$train->departure_time}}</td>
                    <td class="text-center">{{$train->arrival_time}}</td>
                    <td class="text-center">{{$train->code}}</td>
                    <td class="text-center">{{$train->coaches}}</td>
                    <td class="text-center">
                        @if ($train->on_time)
                            <span>In orario</span>
                        @else
                            <span class="text-warning"> In ritardo </span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($train->canceled)
                        <span class="text-uppercase">cancellato</span>
                        @else <span> </span>
                        @endif
                    </td>





                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
