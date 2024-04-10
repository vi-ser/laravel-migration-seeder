@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="text-danger mb-5">Lista treni</h1>

    <div class="train-list">
        <table class="table table-striped">
            <tr>
                <th class="p-2">ID Treno</th>
                <th class="p-2">Azienda</th>
                <th class="p-2">Stazione di partenza</th>
                <th class="p-2">Stazione di arrivo</th>
                <th class="p-2">Partenza</th>
                <th class="p-2">Arrivo</th>
                <th class="p-2">Ritardi</th>
                <th class="p-2">Stato treno</th>

            </tr>
        @foreach ($trains as $train)
           <tr class="train">
                <td class="train-code p-2">{{ $train->train_code }}</td>
                <td class="business p-2">{{ $train->company }}</td>
                <td class="train-code p-2">{{ $train->departure_station }}</td>
                <td class="train-code p-2">{{ $train->arrival_station }}</td>
                <td class="train-code p-2">{{ $train->departure_time }}</td>
                <td class="train-code p-2">{{ $train->arrival_time }}</td>
                <td class="train-code p-2">{{ $train->in_time }}</td>
                <td class="train-code p-2">{{ $train->cancelled }}</td>
            </tr> 
        @endforeach
        </table>
    </div>

</div>


@endsection