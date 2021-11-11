@extends('layouts.app')
@section('content')
    @foreach($details as $key => $data)
    <tr>    
    <th>{{$data->HT_CODE}}</th>
    <th>{{$data->LAST_NAME}}</th>
    <th>{{$data->FIRST_NAME}}</th>
    <th>{{$data->MIDDLE_NAME}}</th>
    <th>{{$data->VEHICLE_TYPE}}</th>     
    <th>{{$data->VEHICLE_NO}}</th>  
    <th>{{$data->DIGITAL_PUNCH_CARD_NO}}</th>          
    </tr>
    @endforeach
@endsection