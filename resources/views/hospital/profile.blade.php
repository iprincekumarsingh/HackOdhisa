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
                    <form class="needs-validation" novalidate >
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Hospital Name 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="Enter Hospital Name" required>
                                        <div class="invalid-feedback">
                                            Enter valid Hospital Name
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Username 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom01"  placeholder="Enter Username" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid Username
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Password
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="validationCustom03" placeholder="Choose a safe one.." required>
                                        <div class="invalid-feedback">
                                            Please enter a password.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom02"> Email <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom02"  placeholder="abc@xyz.com" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid Email
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Phone Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="tel" class="form-control" id="validationCustom03" placeholder="Enter Your Phone Number" required>
                                        <div class="invalid-feedback">
                                            Enter a valid phone number
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Alternate Contect Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="tel" class="form-control" id="validationCustom03" placeholder="Enter Your Phone Number" required>
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
                                        <input type="text" class="form-control" id="validationCustom06" placeholder="Street Address " required>
                                        <div class="invalid-feedback">
                                            Please enter a valid address
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom06">City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom06" placeholder="Enter City" >
                                        <div class="invalid-feedback">
                                            Please enter valid city name
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom07"> Country
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="default-select wide form-control" id="validationCustom05">
                                            <option  data-display="Select">Please select</option>
                                          
                                            <option value="Odisha">India</option>
                                        </select>
                                        <div class="invalid-feedback">
                                           Please select a State
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom07"> State
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="default-select wide form-control" id="validationCustom05">
                                            <option  data-display="Select">Please select</option>
                                          
                                            <option value="Odisha">Odisha</option>
                                        </select>
                                        <div class="invalid-feedback">
                                           Please select a Country
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Pincode
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="validationCustom08" placeholder="Enter Pincode" >
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
                                        <select class="default-select wide form-control" id="validationCustom05">
                                            <option  data-display="Select">Please select</option>
                                          
                                            <option value="Odisha">Government</option>
                                            <option value="Odisha">Private</option>
                                            <option value="Odisha">Trust</option>
                                        </select>
                                        <div class="invalid-feedback">
                                           Please select an Ownership
                                        </div>
                                    </div>
                                </div>
                               
                               
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
