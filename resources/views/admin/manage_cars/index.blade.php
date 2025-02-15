@extends('admin.layouts.master')
@section('title','Car Rental - Home')

@section('content')


<!-- Include DataTables CSS and JS -->
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<div class="content p-4">
    <h2 class="mb-4">Car Details</h2>
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('admin.manage-cars.add') }}" class="btn btn-primary">
            <i class="fas fa-car me-2"></i>Add Car
        </a>
    </div>
    <table id="dataTable" class="table table-striped" style="width: 100%">
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
                @foreach ($cars as $key => $car)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $car->name ?? '' }}</td>
                        <td>{{ $car->brand ?? '' }}</td>
                        <td>{{ $car->model ?? '' }}</td>
                        <td>{{ $car->year ?? '' }}</td>
                        <td>{{ $car->car_type ?? '' }}</td>
                        <td>{{ $car->daily_rent_price ?? '' }}</td>
                        <td>{{ $car->availability ?? '' }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$car->image) }}" alt="Car Image" style="width: 50px; height: 50px; object-fit: cover;">
                        </td>
                        <td>
                            <!-- Add Action Buttons (Edit, Delete) -->
                            <a href="{{ route('admin.manage-cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            {{-- <form action="{{ route('admin.manage-cars.delete', $car->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $("#dataTable").DataTable({
            "paging": true,  // Enable pagination
            "lengthChange": true,  // Allow changing number of records per page
            "searching": true,  // Enable search functionality
            "ordering": true,  // Allow sorting by columns
            "info": true,  // Show information about the table (e.g. "Showing 1 to 10 of 50 entries")
            "autoWidth": false,  // Disable auto column width adjustment
            "responsive": true  // Make the table responsive
        });
    });
</script>


@endsection