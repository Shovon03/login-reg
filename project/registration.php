<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Form</title>
    <style>
      body {
        background-image: url("https://mobirise.com/extensions/shopamp/assets/images/priscilla-du-preez-228220-unsplash-696x464.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
      }
      .gap {
        margin-top: 5px;
      }
    </style>
    <!-- font Awesome -->
    <script
      src="https://kit.fontawesome.com/7058754424.js"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-5 mb-4">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-4">
          <div class="card px-5 py-4">
            <div class="title">
              <h4>Sign up to stay with us</h4>
            </div>
            <div class="form-input gap">
              <i class="fa fa-envelope"></i>
              <input
                type="text"
                class="form-control"
                placeholder="Email address"
              />
            </div>
            <div class="form-input gap">
              <i class="fa fa-user"></i>
              <input type="text" class="form-control" placeholder="User name" />
            </div>
            <div class="form-input gap">
              <i class="fa fa-lock"></i>
              <input type="text" class="form-control" placeholder="password" />
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label" for="flexCheckChecked">
                I agree all the statements
              </label>
            </div>
            <button class="btn btn-primary mt-4 signup">Registration</button>
            <div class="text-center mt-3">
              <span>Or continue with these social profile</span>
            </div>
            <div class="d-flex justify-content-center mt-4">
              <span class="social"><i class="fa fa-google"></i></span>
              <span class="social"><i class="fa fa-facebook"></i></span>
              <span class="social"><i class="fa fa-twitter"></i></span>
              <span class="social"><i class="fa fa-linkedin"></i></span>
            </div>
            <div class="text-center mt-4">
              <span>Already a member?</span>
              <a href="login.html" class="text-decoration-none">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
