<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to Our page</title>
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                   <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                   
                    <h4 class="mt-1 mb-5 pb-1">We are the<br><b> Blood Management Team<b></h4>
                  </div>
                  @if(session()->has('message')),<h6> {{ session()->get('message')  }}</h6>@endif
                  <form action="{{route('do.login')}}" method="post">
                    @csrf
                     <p>Please login to your account</p>
                    <div class="container">
  
                    <div class="form-outline mb-4">
                      <input type="name" id="form2Example11"  name="email" class="form-control"
                        placeholder="Phone number or email address" />
                      <label class="form-label" for="form2Example11">Email</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" name="password" class="form-control" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Sign
                      in</button>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>