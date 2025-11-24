<?xml version="1.0" encoding="UTF-8"?>
<data>
    @foreach($registros as $item)
    <item>
        <placa>{{ $item->plate }}</placa>
        <marca>{{ $item->brand }}</marca>
        <modelo>{{ $item->model }}</modelo>
        <ano>{{ $item->year }}</ano>
        <capacidade>{{ $item->capacity_kg }}</capacidade>
        <ativo>{{ $item->is_active ? "true" : "false" }}</ativo>
        <ultima_inspecao>{{ $item->last_inspection }}</ultima_inspecao>
        <lat>{{ $item->location_lat }}</lat>
        <lng>{{ $item->location_lng }}</lng>
    </item>
    @endforeach
</data>
