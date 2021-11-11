@extends('layouts.app')
@section('content')
<div class="container">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="row align-items-center">
                        <div class="col-md-11">
                            GBL
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="data-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="data-listing" class="table dataTable no-footer table-responsive w-100 d-block d-xxl-table" role="grid"
                                        aria-describedby="data-listing_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" aria-sort="ascending" style="width: 1000px;">Sr. No.</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="width: 1000px;">HT_CODE</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="min-width: 300px;">LAST_NAME</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="width: 1000px;">FIRST_NAME</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="width: 1000px;">MIDDLE_NAME</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="width: 1000px;">VEHICLE_TYPE</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="width: 1000px;">VEHICLE_NO</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-listing"
                                                    rowspan="1" colspan="1" style="width: 1000px;">DIGITAL_PUNCH_CARD_NO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gbl as $data)
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $loop->iteration }}</td>
                                                    <td>{{ $data->HT_CODE }}</td>
                                                    <td>{{ $data->LAST_NAME }}</td>
                                                    <td>{{ $data->FIRST_NAME }}</td>
                                                    <td>{{ $data->MIDDLE_NAME }}</td>
                                                    <td>{{ $data->VEHICLE_TYPE }}</td>
                                                    <td>{{ $data->VEHICLE_NO }}</td>
                                                    <td>{{ $data->DIGITAL_PUNCH_CARD_NO }}</td>
                                                </tr>
                                            @endforeach
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection