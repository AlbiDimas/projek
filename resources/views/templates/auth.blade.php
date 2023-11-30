<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    @livewireStyles
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in with illustration - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="demo/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="demo/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="demo/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="demo/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="demo/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <script src="demo/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
      <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
          <div class="col-lg">
            <div class="container-tight">
              <div class="text-center mb-4">
                <a href="/" class="navbar-brand navbar-brand-autodark"><img src="demo/static/upt_jatim.png" width="300" alt=""></a>
              </div>
              @yield('content')
            </div>
          </div>
          <div class="col-lg d-none d-lg-block">
            <img src="demo/static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="demo/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="demo/dist/js/demo.min.js?1684106062" defer></script>
    @livewireScripts
  </body>
</html>
