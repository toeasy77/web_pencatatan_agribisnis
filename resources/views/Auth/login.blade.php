<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/output.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="flex flex-col-reverse md:flex-row md:min-h-screen relative">
      <div class="w-full md:relative">
        <div
          class="flex flex-col md:flex-row h-full items-center justify-center w-full md:absolute md:px-32"
        >
          <div class="md:w-1/2">
            <div class="p-10 bg-white shadow-2xl">
              <h1 class="text-center font-bold text-3xl">Login </h1>
              <p class="text-center mt-5">
              </p>
              @error('loginError')
    <div class="alert alert-danger">
        <strong>Error</strong>
        <p>[{ $message }]</p>
    </div>
@enderror

    <form method="post">
        @csrf
        <div class="my-5">
        <label for="email" class="font-bold">E-mail</label>
        <input name="email" class="w-full border border-gray-300 p-2"/>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
    </div>
        </div>
        @error('email')
    <small style="color:red">Enter your email first</small>
@enderror
        <div class="my-5">
        <label for="password" class="font-bold">Password</label>
        <input type="password" placeholder="Password" name="password" class="w-full border border-gray-300 p-2"
                  />
        <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
        </div>
        </div>
        @error('password')
    <small style="color:red">Enter your password first</small>
@enderror
                <button
                  type="submit"
                  class="bg-gray-950 border text-white w-full py-3 mb-4 hover:border hover:bg-white hover:border-gray-950 hover:text-black transition-all"
                  href="/Dashboard/index.blade.php"
                  >
                  MASUK
                </button>
              </form>
              <div class="w-full text-center mt-5">
                <a href="" class="text-center text-blue-600 w-full"
                  >Lupa Password?</a
                >
              </div>
            </div>
          </div>
          <div class="md:w-1/2 hidden md:block">
            <div class="p-10 bg-white shadow-2xl">
        </div>
      </div>
      <div
        class="w-full md:w-1/2 bg-[url('/assets/img/bg.png')] bg-cover bg-no-repeat bg-center md:h-full md:absolute bg-login right-0"
      >
        <div
          class="w-full h-full backdrop-brightness-50 flex flex-col justify-center align-middle items-center text-center text-white"
        >
          <div class="lg:w-9/12 w-11/12 py-12">
            <h1 class="text-5xl font-bold">Selamat Datang</h1>
            <p class="mt-10">
            Sistem Pencatatan Pemasukan dan Pengeluaran Data Keuangan 
            Agrobisnis Pedesaan Desa Sindanglaut di Kabupaten Cirebon
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="/assets/js/app.js"></script>
  </body>
</html>
