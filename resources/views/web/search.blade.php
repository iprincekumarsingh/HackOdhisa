@include('web.customheader')
<div>
    <div class="card-header d-block d-sm-flex border-0">
        <div class="me-3">
            <h4 class="card-title mb-2">Hospital near You</h4>
            <span class="fs-12"></span>
        </div>

    </div>


    @if ($data->isEmpty())
    <h1>Empty</h1>
    <h1>NO Hospital Found</h1>
    <form method="GET" action="{{ route('hospital.search') }}"
        class="flex flex-col sm:flex-row gap-2 items-center justify-center mx-auto">
        @csrf
        <div class="relative flex flex-col">
            <label for="PinCode" class="leading-7 text-2xl text-gray-600 text-center sm:text-left">By PinCode</label>
            <input type="Number" id="full-name" name="pincode"
                class="bg-gray-100 bg-opacity-50 rounded  text-base text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button type="submit" style="padding:15px 30px" href="#">
            Search
        </button>
    </form>
    @else
    {{-- @else --}}

    @foreach ($data as $datas)
    <div class="card">

        <div class="card-body tab-content p-0">
            <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-responsive-md card-table transactions-table">
                        <tbody>
                            <tr>
                                <td>
                                    <svg class="bgl-success tr-icon" width="63" height="63" viewBox="0 0 63 63"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                                fill="#2BC155"></path>
                                            <path
                                                d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                                fill="#2BC155"></path>
                                        </g>
                                    </svg>
                                </td>
                                <td>
                                    <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">{{
                                            $datas->hospital_name }}</a></h6>
                                    <span class="fs-14">{{ $datas->contact }}</span>
                                </td>
                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0"></h6>
                                    <span class="fs-14">Bed Available : @if ($datas->g_bed != null || $datas->icu ||
                                        $datas->iccu || $datas->mater)
                                        {{-- <br> --}}
                                        <span class="text-success">{{ 'Yes' }}</span>
                                        <br>
                                        @endif
                                    </span>
                                </td>

                                <td><span class="fs-16 text-black font-w600">Blood Group: @if ($datas->apos != null ||
                                        $datas->bpos != null)
                                        <span class="text-success">{{ 'Yes' }}</span>
                                        <br>
                                        @endif </span>

                                </td>
                                @if (session()->has('isLoggedIn'))

                                    <td><span style="text-color:black;text-align:center"
                                            class="btn btn-primary text-uccess fs-16 font-w500 text-end d-block">
                                            <a href="book/{{$datas->hid}}">   Book Now  </a></span></td>

                                @else


                                <td class=" text-error"><a href="h-login/?hospita_id={{ $datas->hid }}">LOGIN FIRST TO
                                        BOOK </a>
                                </td>

                                @endif
                            </tr>
                            <tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @endforeach
    @endif







</div>

@include('layouts.footer')
