<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Musk Enterprises</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <!-- Scripts -->
    <script src="{{ asset('js/mdb.min.js') }}" defer></script>

    <!-- Custom scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <link href="{{ asset('./css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/buttons.jqueryui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/datatable.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/dt.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        div.dataTables_wrapper {

            margin: 0 auto;

        }
    </style>

</head>

<body>
    <!--Main Navigation-->

    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <ul style="list-style-type: none">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#">
                                <img src="{{ asset('./img/user2.jpg') }}" class="rounded-circle ml-4" height="90" alt="" loading="lazy" />
                            </a>

                        <li><a class=" text-success">
                                {{ Auth::user()->name }} <span class="caret"></span><span style="text-transform:uppercase; font-size:10px;">( {{ Auth::user()->role }} )</span>
                            </a></li>

                        <a class="text-danger ml-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        </li>
                    </ul>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active pb-3 bg-primary" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span>Main dashboard</span>
                    </a>
                    <ul class="list-unstyled side">

                        <li class="">
                            <a href="{{ route('reports.index') }}" class="list-group-item list-group-item-action py-2 ripple ">
                                <i class="fas fa-list text-info fa-1x me-3 mt-3"></i><span>Reports </span>
                            </a>
                        </li>
                        <li class="">

                            <a href="{{ url('/inspections') }}" class="list-group-item list-group-item-action py-2 ripple ">
                                <i class="fas fa-user text-info fa-1x me-3 mt-3"></i><span>Inspections Management</span>
                            </a>

                        </li>


                    </ul>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
      
    </header>
    <!--Main Navigation-->
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top pl-5">
        <!-- Container wrapper -->
        <div class="container-fluid conta">
            <a class="navbar-brand " href="/">
                <h5 class="mt-3 text-dark " style=" position : relative; left: 52px">MUSK ENTERPRISES</h5>
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                
                    <li class="nav-item pr-5">
                        <a class="nav-link" href="{{ route('supervisor.index') }}">{{ __('Home') }}</a>
                  
                </ul>
            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->

    <main class="py-4" style="margin-top: 48px">
        @yield('content')
    </main>
    <!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
    <script>
        $('.date').datepicker({
            format: 'mm-dd-yyyy'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable({
                    dom: 'Bfrtip',
                    pageLength: 10,
                    lengthMenu: [5, 10, 25, 50],
                    "scrollX": true,

                    buttons: [
                        'pageLength', 'copy', 'csv', 'excel', 'print'
                    ]

                }

            );
            $('.buttons-excel, .buttons-print, .buttons-pdf, .buttons-csv, .buttons-copy, .buttons-pageLength').each(function() {
                $(this).removeClass('btn-default').addClass('mt-3 mb-3');
            });
        });
    </script>

</body>

</html>