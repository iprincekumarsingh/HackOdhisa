@include('layouts.header')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" data-display="">Hospital Booking Form</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="needs-validation" novalidate >
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Bed Requirement
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="default-select wide form-control" id="validationCustom05">
                                            <option  data-display="Select">Please select Beds</option>
                                            <option value="General">General</option>
                                            <option value="ICU">ICU</option>
                                            <option value="ICCU">ICCU</option>
                                            <option value="Maternity">Maternity</option>
                                           
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Bed.
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Blood Requirement
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="default-select wide form-control" id="validationCustom05">
                                            <option  data-display="Select">Please select Blood Type</option>
                                            <option value="A+">A+</option>
                                            <option value="B+">B+</option>
                                            <option value="A-">A-</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Blood
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
    
    <!--Bill update finish....................................................................-->
@include('layouts.footer')