<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

<script>
  $("#loginForm").on("submit", function(e) {
    e.preventDefault();

    var data = $("#loginForm").serialize();

    $.ajax({
      method: "POST",
      url: "login.php",
      data: data,
      success: function(response) {
        switch (response) {
          case "invalid_login":
            Swal.fire(
              'Login failed',
              'Incorrect username or password.',
              'error'
            )
            break;
          case "not_activated":
            Swal.fire(
              'Login failed',
              'Your account is not yet activated.<br>Please contact your administrator to activate your account.',
              'info'
            )
            break;
          case "login_success":
            Swal.fire({
              title: 'Login success',
              html: '',
              icon: 'success',
              showConfirmButton: false,
              timer: 3000
            }).then((result) => {
              window.location.href = "index.php";
            });
            break;
          default:
            Swal.fire(
              'Login failed',
              '',
              'error'
            )
            break;
        }
      },
    });
  })
</script>
<script>
  $("#registerForm").on("submit", function(e) {
    e.preventDefault();

    var data = $("#registerForm").serialize();

    $.ajax({
      dataType: "json",
      method: "POST",
      url: "register2.php",
      data: data,
      success: function(response) {
        if (!response["error"]) {
          Swal.fire({
            title: 'Success',
            html: response["response"],
            icon: 'success'
          }).then(function() {
            window.location.href = "main.php";
          })
        } else {
          Swal.fire({
            title: 'Oops!!! Something went wong :(',
            html: response["response"],
            icon: 'error'
          })
        }
      }
    });
  })
</script>

</body>

</html>