@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Edit Lead Data</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!-- Repeater Html Start -->
            <div id="repeater">


                <!-- Repeater Items -->
                <div class="items" data-group="test">
                    @if(session('successl3'))
                    <div id="session-message" class="session-message">
                        {{ session('successl3') }}
                    </div>
                    @endif
                    <style>
                        .session-message {
                            height: 50px;
                            margin-top: 10px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-size: 18px;
                            width: 100%;
                            border-radius: 8px;
                            border: 2px solid #5F9EA0;
                            border-bottom: 4px solid #5F9EA0;
                            padding: 10px;
                            background-color: #5F9EA0;
                            border: 1px solid #5F9EA0;
                            transition: opacity 3s ease-in-out;
                        }

                        .session-message.fade-out {
                            opacity: 0;
                            transition: opacity 2s ease-in-out;
                        }
                    </style>
                    <script>
                        setTimeout(function() {
                            $('#session-message').addClass('fade-out');
                        }, 4000);

                        setTimeout(function() {
                            $('#session-message').remove();
                        }, 8000);
                    </script>
                    <div class="card">
                        <div class="card-body">
                        @foreach($lead as $leadlist)
                            <form action="{{ url('savelead',['id' => $leadlist->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Repeater Content -->
                                <div class="item-content">
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Product / Service</label>
                                        <input class="form-control" id="title" type="text" name="title" value="{{ $leadlist->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label"> Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ $leadlist->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Mobile No.</label>
                                        <input class="form-control" type="text" name="mobile" value="{{ $leadlist->mobile }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Email</label>
                                        <input class="form-control" type="text" name="email"  value="{{ $leadlist->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label"> Company Name</label>
                                        <input class="form-control"  id="company_name" type="text" name="company_name"  value="{{ $leadlist->company_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">City</label>
                                        <input class="form-control" id="city" type="city" name="city"  value="{{ $leadlist->city }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Minimum Quantity</label>
                                        <input class="form-control" id="qty" type="qty" name="qty" value="{{ $leadlist->qty }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Unit</label>
                                        <select name="unit" class="form-control" >
                                                                    <option value="">-- Select Quantity Unit -- </option>
                                                                   <option value="Kg">Kg</option>
                                    <option value="Quintal" {{ old('unit', $leadlist->unit) == 'Quintal' ? 'selected' : '' }} >Quintal</option>
                                    <option value="Ton" {{ old('unit', $leadlist->unit) == 'Ton' ? 'selected' : '' }}>Ton</option>
                                    <option value="Pcs" {{ old('unit', $leadlist->unit) == 'Pcs' ? 'selected' : '' }}>Pc/Pcs</option>
                                    <option value="Box" {{ old('unit', $leadlist->unit) == 'Box' ? 'selected' : '' }}>Box/Boxes</option>
                                    <option value="Bags" {{ old('unit', $leadlist->unit) == 'Bags' ? 'selected' : '' }}>Bags/Bag</option>
                                    <option value="Barrel" {{ old('unit', $leadlist->unit) == 'Barrel' ? 'selected' : '' }}>Barrel/Barrels</option>
                                    <option value="Metric Ton" {{ old('unit', $leadlist->unit) == 'Metric Ton' ? 'selected' : '' }}>Metric Ton/Metric Tons</option>
                                    <option value="Unit" {{ old('unit', $leadlist->unit) == 'Unit' ? 'selected' : '' }}>Unit/Units</option>
                                    <option value="Liter" {{ old('unit', $leadlist->unit) == 'Liter' ? 'selected' : '' }}>Liter/Liters</option>
                                    <option value="Pound" {{ old('unit', $leadlist->unit) == 'Pound' ? 'selected' : '' }}>Pound/Pounds</option>
                                    <option value="Meter" {{ old('unit', $leadlist->unit) == 'Meter' ? 'selected' : '' }}>Meter/Meters</option>
                                    <option value="Pair" {{ old('unit', $leadlist->unit) == 'Pair' ? 'selected' : '' }}>Pair/Pairs</option>
                                     <option value="Case" {{ old('unit', $leadlist->unit) == 'Case' ? 'selected' : '' }}>Case/Cases</option>
                                    <option value="Roll" {{ old('unit', $leadlist->unit) == 'Roll' ? 'selected' : '' }}>Roll/Rolls</option>
                                    <option value="Milliliter" {{ old('unit', $leadlist->unit) == 'Milliliter' ? 'selected' : '' }}>Milliliter/Milliliters</option>
                                    <option value="sheet" {{ old('unit', $leadlist->unit) == 'sheet' ? 'selected' : '' }}>sheet/sheets</option>
                                    <option value="Square Meter" {{ old('unit', $leadlist->unit) == 'Square Meter' ? 'selected' : '' }}>Square Meter/Square Meters</option>
                                    <option value="Cubic Meter"{{ old('unit', $leadlist->unit) == 'Cubic Meter' ? 'selected' : '' }} >Cubic Meter/Cubic Meters</option>
                                    <option value="Carton" {{ old('unit', $leadlist->unit) == 'Carton' ? 'selected' : '' }}>Carton/Cartons</option>
                                    <option value="Container 20ft." {{ old('unit', $leadlist->unit) == 'Container 20ft.' ? 'selected' : '' }}>Container 20ft.</option>
                                    <option value="Container 40ft." {{ old('unit', $leadlist->unit) == 'Container 40ft.' ? 'selected' : '' }}>Container 40ft.</option>
                                                                </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Country</label>
                                        <input class="form-control"id="country" type="text" name="country" value="{{ $leadlist->country }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Massage</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea2" required="" name= "message">{{ old('message', $leadlist->message) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Lead Permission</label>
                                       
                                        <select name="active" class="form-control">
                                                                    <option value="">-- Lead Permission -- </option>
                                                                    <option value="1"{{ old('active', $leadlist->active) == '1' ? 'selected' : '' }}>Active</option>
                                                                    <option value="0"{{ old('active', $leadlist->active) == '0' ? 'selected' : '' }}>Deactive</option>
                                                                   
                                                                </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Lead Date</label>
                                        <input class="form-control" id="country" type="date" name="created_at" value="{{ $leadlist->created_at->toDateString() }}">

                                    </div>



                                </div>
                                <!-- Repeater Remove Btn -->
                                <div class="repeater-remove-btn">
                                    <button class="btn btn-light remove-btn px-4">
                                        Submit
                                    </button>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <!-- Repeater End -->

</body>

</html>
@endsection