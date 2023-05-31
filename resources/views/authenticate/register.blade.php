<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Aoes -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600;800&display=swap" rel="stylesheet">
    <!-- our css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">

  </head>
  <body>
    <section class="vh-100 d-flex align-items-center">
      @include('sweetalert::alert')
      <div class="container-fluid h-custom mx-5 py-5 rounded">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5 py-4 " data-aos="flip-left" data-aos-easing=""
             data-aos-duration="1000">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-4"  data-aos="fade-left" data-aos-duration="1000">
            <form method="POST" action="/register-auth">
              @csrf
              <!-- Email input -->
              <h3 align="center" class="mb-2" style="font-weight: 600;">REGISTER</h3>
              <div class="py-4">
                <select name="role" id="">
                    <option hidden>-- Pilih Role --</option>
                    @foreach ($role as $r)
                        <option value="{{ $r->id }}">
                            {{ $r->role }}
                        </option> 
                    @endforeach
                </select>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" name="name" style="font-weight: 600;" class="form-control form-control-lg"
                  placeholder="Enter Username" required autofocus />
                <label class="form-label" for="form3Example3">Username</label>
              </div>


              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>