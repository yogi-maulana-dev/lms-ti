@include('admin.layouts.partials.header')
@include('admin.layouts.partials.deskside')
@include('admin.layouts.partials.mobside')
@include('admin.layouts.partials.navbar')

        <main class="h-full pb-16 overflow-y-auto">
          <!-- Remove everything INSIDE this div to a really blank page -->
          <div class="container px-6 mx-auto grid">
            {{-- render yang konten --}}
            @yield('content')
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
