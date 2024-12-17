<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
</head>

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">
              @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/lte/dist/js/adminlte.min.js"></script>
</body>
</html>