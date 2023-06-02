@include('layouts.partials.header')
@include('layouts.partials.sidebar')


    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      <!-- Navbar -->
@include('layouts.partials.navbar')
      <!-- end Navbar -->

{{-- start content --}}
<div class="w-full px-6 py-6 mx-auto">
  @yield('content')
</div>
{{-- content end --}}
    </main>
  </body>
  <!-- plugin for charts  -->
  <script src="{{ Vite::asset('resources/assets/js/plugins/chartjs.min.js')}}" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ Vite::asset('resources/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- main script file  -->
  <script src="{{ Vite::asset('resources/assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
</html>
