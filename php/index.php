<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--  "ie=edge" indicates that the browser should use the latest rendering engine available. -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Signup</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  </head>
  <body>
    <div class="wrapper">
      <section class="form_signup">
        <header>Find Your Host</header>
        <form action="#">
          <div class="error_txt">Error is your friend</div>
          <div class="name_details">
            <div class="field">
              <label>First Name</label>
              <input type="text" placeholder="Mahatma" />
            </div>
            <div class="field">
              <label>Last Name</label>
              <input type="text" placeholder="Gandhi" />
            </div>
          </div>
          <div class="field">
            <label>Email</label>
            <input type="text" placeholder="mikosuri@gkoui.com" />
          </div>
          <div class="field">
            <label>Password</label>
            <input type="password" placeholder="Hanakusohojiemon" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field">
            <label>Select Image</label>
            <input type="file" />
          </div>
          <div class="field">
            <input type="submit" value="Ready for a New Journey?" />
          </div>
        </form>

        <div class="link">
          Already signed up? <a href="login.html">Login Now</a>
        </div>
      </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

  </body>
</html>
