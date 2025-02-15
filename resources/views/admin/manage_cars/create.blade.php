@extends('admin.layouts.master')
@section('title','Car Rental - Home')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content p-4">

      <!-- Add New Car Form -->
      <section class="container">
        <h2 class="text-right mb-12">Add New Car</h2>
        <div class="mb-3 d-flex justify-content-end">
            <a href="{{route('admin.manage-cars')}}" class="btn btn-primary"> <i class="fas fa-car me-2"></i>Car List</a>
        </div>
        <div class="card shadow-sm p-4">
            <form
                action="{{route('admin.manage-cars.storeCar')}}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="car_name" class="form-label"
                            >Car Name :</label
                        >
                        <input
                            type="text"
                            class="form-control @error('car_name') is-invalid @enderror" name="car_name" value="{{ old('car_name') }}"
                            id="car_name"
                            
                        />
                        @error('car_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="brand" class="form-label"
                            >Brand :</label
                        >
                        <input
                            type="text"
                            class="form-control @error('brand') is-invalid @enderror"
                            id="brand"
                            name="brand"
                            value="{{ old('brand') }}"
                            
                        />
                        @error('brand')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label"
                            >Model :</label
                        >
                        <input
                            type="text"
                            class="form-control @error('model') is-invalid @enderror"
                            id="model"
                            name="model"
                            value="{{ old('model') }}"
                            
                        />
                        @error('model')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="year" class="form-label"
                            >Year of Manufacture :</label
                        >
                        <input
                            type="number"
                            class="form-control @error('year') is-invalid @enderror"
                            id="year"
                            name="year"
                            value="{{ old('year') }}"
                            
                        />
                        @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="car_type" class="form-label"
                            >Car Type :</label
                        >
                        <select
                            class="form-select @error('car_type') is-invalid @enderror"
                            id="car_type"
                            name="car_type"
                            
                        >
                            <option value="">Select Car Type</option>
                            <option value="SUV">SUV</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Convertible">Convertible</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Truck">Truck</option>
                        </select>
                        @error('car_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="daily_rent_price" class="form-label"
                            >Daily Rent Price :</label
                        >
                        <input
                            type="number"
                            step="0.01"
                            class="form-control @error('daily_rent_price') is-invalid @enderror"
                            id="daily_rent_price"
                            name="daily_rent_price"
                            value="{{ old('daily_rent_price') }}"
                            
                        />
                        @error('daily_rent_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label
                            for="availability_status"
                            class="form-label"
                            >Availability Status :</label
                        >
                        <select
                            class="form-select @error('availability') is-invalid @enderror"
                            id="availability_status"
                            name="availability"
                            
                        >
                        
                           
                            <option value="1" {{ old('availability') == '1' ? 'selected' : '' }}>Available</option>
                            <option value="0" {{ old('availability') == '0' ? 'selected' : '' }}>Not Available</option>
                        </select>
                        @error('availability')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="car_image" class="form-label"
                            >Car Image :</label
                        >
                        <input
                            type="file"
                            class="form-control @error('car_image') is-invalid @enderror"
                            id="image"
                            name="image"
                            accept="image/*"
                            
                        />
                        @error('car_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <img id="showImage" src="{{ url('no_image.jpg') }}" alt="Admin"
                            style="width:100px; height: 100px;">
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button type="submit" class="btn btn-success me-2">
                        <i class="fas fa-save me-2"></i>Save
                    </button>
                </div>
            </form>
        </div>
    </section>



</div>



<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
       
@endsection