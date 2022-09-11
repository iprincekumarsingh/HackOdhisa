@include('layouts.header')

{{-- content start --}}
<!--Hospital updation forms starts----------------------------------------------------------------------->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Profile Update Form</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form action="{{route('hos.update.profile')}}" method="POST" class="needs-validation" novalidate>
                        @foreach ($data as $datas)
                        @csrf

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Hospital Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['hospital_name']}}" name="hospital_name" type="text"
                                            class="form-control" id="validationCustom01"
                                            placeholder="Enter Hospital Name" required>
                                        <div class="invalid-feedback">
                                            Enter valid Hospital Name
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Phone Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['username']}}" name="contact" disabled type="tel" class="form-control"
                                            id="validationCustom03" placeholder="Enter Your Phone Number" required>
                                        <div class="invalid-feedback">
                                            Enter a valid phone number
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Alternate Contect
                                        Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['alter_no']}}" name="alter_no" type="tel" class="form-control" id="validationCustom03"
                                            placeholder="Enter Your Phone Number" required>
                                        <div class="invalid-feedback">
                                            Enter a valid Phone number
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['address']}}" name="address" type="text" class="form-control" id="validationCustom06"
                                            placeholder="Street Address " required>
                                        <div class="invalid-feedback">
                                            Please enter a valid address
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Pincode
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['pincode']}}" name="pincode" type="text" class="form-control" id="validationCustom08"
                                            placeholder="Enter Pincode">
                                        <div class="invalid-feedback">
                                            Enter valid Pincode
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom07"> Ownership
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select  name="ownership" class="default-select wide form-control"
                                            id="validationCustom05">
                                            <option value="{{$datas['ownership']}}" data-display="Select">{{$datas['ownership']}}</option>

                                            <option value="govt">Government</option>
                                            <option value="pvt">Private</option>
                                            <option value="trust">Trust</option>
                                        </select>
                                        {{-- <div class="invalid-feedback">
                                            Please select an Ownership
                                        </div> --}}
                                    </div>
                                </div>

                                @endforeach
                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- content end --}}
    @include('layouts.footer')
