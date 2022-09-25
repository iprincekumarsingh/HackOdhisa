<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- @vite('resources/css/app.css') -->
  <!-- @vite('../css/app.css') -->
</head>

<body class="max-w-[1500px]">

<section class="relative flex flex-wrap lg:h-screen lg:items-center">
  <div class="w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24">

    <div class="
    max-w-[525px]
    mx-auto
    text-center
    bg-white
    rounded-lg
    relative
    py-16
    px-10
    sm:px-12
    md:px-[60px]
    border
    shadow-lg
    sm:shadow-indigo-600
    ">

  <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto text-center">
      <h1 class="text-2xl font-bold sm:text-3xl capitalize">Log in</h1>
    </div>

    <form action="" class="max-w-md mx-auto mt-8 mb-0 space-y-4">

      <!-- Phone INPUT -->
      <div>
        <label for="email" class="sr-only">Email</label>
        <div class="relative flex gap-1.5">
          <span class="inset-y-0 inline-flex items-center">
            +91
          </span>

          <input type="text" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Enter Phone Number" />

        </div>
      </div>

      <!-- OTP input -->
      <div>
        <label for="OTP" class="sr-only">Enter OTP</label>
        <div class="relative flex gap-1.5">
          <span class="invisible">###</span>
          <input type="number" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Enter OTP" />
        </div>
      </div>

      <!-- SUBMIT button -->

      <button type="submit" class="relative inline px-8 py-3 overflow-hidden border border-indigo-600 rounded-md
      shadow-sm
      shadow-indigo-500 group focus:outline-none focus:ring" href="/download">
        <span class="absolute inset-y-0 left-0 w-[2px] transition-all bg-indigo-600 group-hover:w-full group-active:bg-indigo-500"></span>
        <span class="relative uppercase text-sm font-medium text-indigo-600 transition-colors group-hover:text-white">
          Log in
        </span>
      </button>

    </form>
  </div>
  <div>

    <!-- DECORATION 1 -->
    <span class="absolute top-3 right-3">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)"
          fill="#3056D3" />
        <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)"
          fill="#3056D3" />
        <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)"
          fill="#3056D3" />
        <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)"
          fill="#3056D3" />
        <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)"
          fill="#3056D3" />
        <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)"
          fill="#3056D3" />
        <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3" />
        <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3" />
        <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)"
          fill="#3056D3" />
        <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)"
          fill="#3056D3" />
        <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)"
          fill="#3056D3" />
        <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3" />
        <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)"
          fill="#3056D3" />
        <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)"
          fill="#3056D3" />
        <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)"
          fill="#3056D3" />
        <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3" />
      </svg>
    </span>

    <!-- DECORATION 1 -->
    <span class="absolute left-3 bottom-3">
      <svg width="29" height="40" viewBox="0 0 29 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3" />
        <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)"
          fill="#3056D3" />
        <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)"
          fill="#3056D3" />
        <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3" />
        <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)"
          fill="#3056D3" />
        <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)"
          fill="#3056D3" />
        <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3" />
        <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3" />
        <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)"
          fill="#3056D3" />
        <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)"
          fill="#3056D3" />
        <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)"
          fill="#3056D3" />
        <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)"
          fill="#3056D3" />
      </svg>
    </span>
  </div>
</div>
  </div>

  <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-full">
    <img
      class="absolute inset-0 object-fill w-full h-full"
      src="../../images/undraw_medical_care_movn.svg"
      alt=""
    />
  </div>
</section>



  <script type="module" src="../../js/app.js"></script>
</body>

</html>