@include('web.header')

<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
  <div class="waviy">
    <span style="--i:1">L</span>
    <span style="--i:2">o</span>
    <span style="--i:3">a</span>
    <span style="--i:4">d</span>
    <span style="--i:5">i</span>
    <span style="--i:6">n</span>
    <span style="--i:7">g</span>
    <span style="--i:8">.</span>
    <span style="--i:9">.</span>
    <span style="--i:10">.</span>
  </div>
</div>
<!--*******************
      Preloader end
  ********************-->

<!--**********************************
      Main wrapper start
  ***********************************-->
<div id="main-wrapper">

  <!--**********************************
          Header start
      ***********************************-->
  <div class="header" style="padding: 1rem;">
    <div class="header-content" style="padding-inline: 2rem;">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="">
            <!-- LOGO -->
            <a href="#" class="flex">
              <img class="md:w-3/6 w-5/6 object-cover object-center rounded" alt="logo"
                src="{{url('/images/relief-logo.png')}}">
            </a>
          </div>
          <ul class="navbar-nav header-right">
            <!-- notifiaction icon -->
            <li class="nav-item dropdown notification_dropdown">
              <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z"
                    fill="#4f7086" />
                </svg>
                <span class="badge light text-white bg-primary rounded-circle">12</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
                  <ul class="timeline">
                    <li>
                      <div class="timeline-panel">
                        <div class="media me-2">
                          <img alt="image" width="50" src="images/avatar/1.jpg">
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Dr sultads Send you Photo</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media me-2 media-info">
                          KG
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Resport created successfully</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media me-2 media-success">
                          <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Reminder : Treatment Time!</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media me-2">
                          <img alt="image" width="50" src="images/avatar/1.jpg">
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Dr sultads Send you Photo</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media me-2 media-danger">
                          KG
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Resport created successfully</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-panel">
                        <div class="media me-2 media-primary">
                          <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="mb-1">Reminder : Treatment Time!</h6>
                          <small class="d-block">29 July 2020 - 02:26 PM</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <a class="all-notification" href="javascript:void(0);">See all notifications <i
                    class="ti-arrow-end"></i></a>
              </div>
            </li>
            </li>
            <!-- login button -->
            <li class="nav-item">
              <a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none flex">
                Log In
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--**********************************
          Header end ti-comment-alt
      ***********************************-->

  <!-- HERO SECTION -->
  <div class="">
    <!-- row -->
    <div class="container-fluid">

      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 pt-24 pb-8 items-center justify-center flex-col">
          <img class="md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
            src="{{url('/images/hospital-service-concept-flat-illustration.png')}}">
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 capitalize">
              Check and Book hospital beds
            </h1>
            <p class="mb-8 leading-relaxed text-base">
              Simplest way to book nearby hospital beds from a single application!!
            </p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- SEARCH FOR HOSPITAL -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 pb-10 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 capitalize">
          Search for your nearest hospital
        </h1>
      </div>
      <div
        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">

        <form method="" class="flex flex-col sm:flex-row gap-2 items-center justify-center mx-auto">
          <div class="relative flex flex-col">
            <label for="PinCode" class="leading-7 text-2xl text-gray-600 text-center sm:text-left">By PinCode</label>
            <input type="Number" id="full-name" name="full-name"
              class="bg-gray-100 bg-opacity-50 rounded  text-base text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button type="submit" class="self-end inline-block px-6 py-2.5 text-sm font-medium text-white bg-indigo-600 border border-indigo-600 rounded active:text-indigo-500 focus:outline-none focus:ring" href="/download">
            Download
          </button>
        </form>

      </div>
      <div class="my-5">
        <div>
          <div class="card">
            <div class="card-header d-block d-sm-flex border-0">
              <div class="me-3">
                <h4 class="card-title mb-2 border-b border-primary">List of Hospitals</h4>
                <span class="fs-12"></span>
              </div>

            </div>
            <div class="card-body tab-content p-0">
              <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-responsive-md card-table transactions-table">
                    <tbody>
                      <tr>
                        <td>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                              d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zM176 288c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80z" />
                          </svg>
                        </td>
                        <td>
                          <h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">Ashwini
                              Trauma Centre</a></h6>
                          <span class="fs-14">Plot No 14, Sector 1 CDA, Cuttack – 753014</span>
                        </td>
                        <td>
                          <h6 class="fs-16 text-black font-w600 mb-0">Beds Available</h6>
                          <span class="fs-14">45</span>
                        </td>
                        <td>
                          <h6 class="fs-16 text-black font-w600">Contact Details</h6>
                          <span class="fs-14">954-383-5661</span>
                        </td>
                        <td>
                          <button
                            class="relative inline-block px-6 py-2.5 overflow-hidden border-1 border-primary group focus:outline-none focus:ring"
                            href="/">
                            <span
                              class="absolute inset-x-0 top-0 h-[2px] transition-all btn-primary group-hover:h-full group-active:bg-primary"></span>

                            <span
                              class="relative text-sm font-bold text-[#5bcfc5] transition-colors group-hover:text-white">
                              Book Bed(s)
                            </span>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!--**********************************
      Main wrapper end
  ***********************************-->


@include('web.footer')