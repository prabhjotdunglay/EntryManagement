<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
       AdminDashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <script>var userObj = {{ $user or 'undefined' }}</script>

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">

            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Entry Access
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">

                <li>
                    <a href="/admin">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a class="now-ui-icons education_atom nav-link dropdown-toggle" data-toggle="dropdown">Company</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('company.create')}}">Add new company</a>
                        <a class="dropdown-item" href="{{route('company.index')}}">View all company</a>
                    </div>
                </li>

                <li>
                    <a class="now-ui-icons ui-1_bell-53 nav-link dropdown-toggle" data-toggle="dropdown">Reception</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('reception.create')}}">Add Receptionist </a>
                        <a class="dropdown-item" href="{{route('reception.index')}}">View all Receptionist</a>
                    </div>

                </li>
                <li>
                    <a class=" now-ui-icons location_map-big  nav-link dropdown-toggle" data-toggle="dropdown">License</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('license.create')}}">Add new License </a>
                        <a class="dropdown-item" href="{{route('license.index')}}">View all License</a>
                    </div>

                </li>
                <li>
                    <a class=" now-ui-icons ui-1_bell-53 nav-link dropdown-toggle" data-toggle="dropdown">Enquiry's</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/enquiry">View all Enquiries </a>

                    </div>
                </li>


                <li class="active ">
                    <a href="#">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Coming Soon</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand"> Clients Report</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                {{ Auth::user()->name }}

                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-lg">
            <canvas id="bigDashboardChart"></canvas>


        </div>
        <div class="content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-chart">

                </div>


            </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            ClientName
                        </th>
                        <th>
                            Email
                        </th>
                        <th class="text-right">
                            Expiry
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($user as $usr)
                                <td>
                                   {{$usr->name}}
                                </td>
                                <td>
                                    {{$usr->email}}

                                </td>
                            <td class="text-right"> {{$usr->expiry}}</td>

                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    {{ $user->links() }}

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>



</body>

</html>
