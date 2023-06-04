<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/tailwind.output.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{ Vite::asset('resources/assets/js/init-alpine.js')}}"></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-full w-full">
            <div class="w-full">
              <h1
                class="mb-4 text-xl text-center font-semibold text-gray-700 dark:text-gray-200"
              >
                Forgot Password ?
              </h1>
              <hr class="my-8" />
                {{-- form login --}}
                <form action="" method="post">
                  @csrf
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="enter your email ...." name="user"
                />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit" name="forgot"
              >
                Recover Password
              </button>
              </form>
              {{-- form login end --}}


              

              <hr class="my-8" />

              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="/login"
                >
                  Already have an account? Login
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
