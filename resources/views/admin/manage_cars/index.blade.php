@extends('admin.layouts.master')
@section('title','Car Rental - Home')

@section('content')


<div class="content p-4">
    <h2 class="mb-4">Data Table with Pagination</h2>
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{route('admin.manage-cars.add')}}" class="btn btn-primary"> <i class="fas fa-car me-2"></i>Add Car</a>
    </div>
    <table
        id="dataTable"
        class="table table-striped"
        style="width: 100%"
    >
        <thead>
            <tr>
                <th>ID</th>
                <th>Car Name</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Year of Manufacture</th>
                <th>Car Type</th>
                <th>Daily Rent Price</th>
                <th>Availability Status</th>
                <th>Car Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($cars)
            @foreach ( $cars as $key => $car )
                
            
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $car->name ?? '' }}</td>
                <td>{{ $car->brand ?? '' }}</td>
                <td>{{ $car->model ?? '' }}</td>
                <td>{{ $car->year ?? '' }}</td>
                <td>{{ $car->car_type ?? '' }}</td>
                <td>{{ $car->daily_rent_price ?? '' }}</td>
                <td>{{ $car->availability ?? '' }}</td>
                <td>{{ $car->image ?? '' }}</td>

            </tr>
            @endforeach
            @endif
           
        
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $("#dataTable").DataTable();
    });
</script>

@endsection