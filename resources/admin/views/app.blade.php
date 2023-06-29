<!DOCTYPE html>
<html lang="ka" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Falcon | Dashboard &amp; Web App Template</title>
  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../back_assets/img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32"
    href="{{ asset('../back_assets/img/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16"
    href="{{ asset('../back_assets/img/favicons/favicon-16x16.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('../back_assets/img/favicons/favicon.ico') }}">
  <link rel="manifest" href="{{ asset('../back_assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="../back_assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('../back_assets/js/config.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="{{ asset('../back_assets/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ asset('../back_assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('../back_assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
  <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {

    }
  </script>
  <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== "transparent") {
      document
        .querySelector(".navbar-vertical")
        .classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <script>
    var isFluid = JSON.parse(localStorage.getItem("isFluid"));
    if (isFluid) {
      var container = document.querySelector("[data-layout]");
      container.classList.remove("container");
      container.classList.add("container-fluid");
    }
  </script>
  @vite(['resources/admin/scss/app.scss', 'resources/admin/scripts/app.js'])
  @inertiaHead
</head>

<body>
  @inertia

  <script src="{{ asset('../back_assets/vendors/popper/popper.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/anchorjs/anchor.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/is/is.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/fontawesome/all.min.js') }}"></script>
  <script src="{{ asset('../back_assets/vendors/lodash/lodash.min.js') }}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ asset('../back_assets/vendors/list.js/list.min.js') }}"></script>
  <script src="{{ asset('../back_assets/js/theme.js') }}"></script>
  <script src="{{ asset('../back_assets/js/jquery-3.6.4.min.js') }}"></script>

</body>

</html>
