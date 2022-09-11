@include('layouts.header')

{{-- content start --}}
<!--Hospital updation forms starts----------------------------------------------------------------------->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bed Details Updation Form</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form method="POST" action="{{route('bedupdate')}}" class="needs-validation" novalidate >
                        @csrf
                        @foreach ($data as $datas )


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">General Ward
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input name="g_bed" type="number" value="{{$datas['g_bed']}}" class="form-control" id="validationCustom01"  placeholder="Enter Number of Available Beds" >
                                        <div class="invalid-feedback">
                                            Invalid Bed Details
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom02"> ICU Beds <span
                                            class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['icu']}}" name="icu" type="number" class="form-control" id="validationCustom02"  placeholder="Enter Number of Available Beds" >
                                        <div class="invalid-feedback">
                                            Invalid Bed Details
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">ICCU Beds
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value={{$datas['iccu']}} name="iccu" type="number" class="form-control" id="validationCustom03" placeholder="Enter Number of Available Beds" >
                                        <div class="invalid-feedback">
                                            Invalid Bed Details
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Maternity Ward
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['mater']}}" name="mater" type="number" class="form-control" id="validationCustom03" placeholder="Enter Number of Available Beds" >
                                        <div class="invalid-feedback">
                                            Invalid Bed Details
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom05">Blood Type A+
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value={{$datas['apos']}} name="apos" type="number" class="form-control" id="validationCustom06" placeholder="Enter Units Available" >
                                        <div class="invalid-feedback">
                                            Invalid Bed Deatils
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom06">Blood Type B+
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value={{$datas['bpos']}} name="bpos" type="number" class="form-control" id="validationCustom06" placeholder="Enter Number of Beds Available" required>
                                        <div class="invalid-feedback">
                                            Invalid Units
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom07"> Blood Type A-
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value={{$datas['anega']}} name="anega" type="number" class="form-control" id="validationCustom08" placeholder="Enter Units Available">
                                        <div class="invalid-feedback">
                                           Invalid Units
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Blood Type B-
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['bnega']}}" name="bnega" type="number" class="form-control" id="validationCustom08" placeholder="Enter Units Available" >
                                        <div class="invalid-feedback">
                                            Invalid Units
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Blood Type AB+
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['abposi']}}" name="abposi" type="number" class="form-control" id="validationCustom08" placeholder="Enter Units Available" >
                                        <div class="invalid-feedback">
                                            Invalid Units
                                        </div>
                                    </div>
                                </div><div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Blood Type AB-
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['abnega']}}" name="abnega" type="number" class="form-control" id="validationCustom08" placeholder="Enter Units Available" >
                                        <div class="invalid-feedback">
                                            Invalid Units
                                        </div>
                                    </div>
                                </div><div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Blood Type O+
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['opos']}}" name="opos" type="number" class="form-control" id="validationCustom08" placeholder="Enter Units Available" >
                                        <div class="invalid-feedback">
                                            Invalid Units
                                        </div>
                                    </div>
                                </div><div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom08">Blood Type O-
                                        <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input value="{{$datas['onegative']}}" name="onegative" type="number" class="form-control" id="validationCustom08" placeholder="Enter Units Available" >
                                        <div class="invalid-feedback">
                                            Invalid Units
                                        </div>
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
    <!--Bill update finish....................................................................-->
{{-- content end --}}
@include('layouts.footer')
