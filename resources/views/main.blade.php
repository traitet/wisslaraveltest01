<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WISS</title>
    @include('theme.header')
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/colreorder/1.5.5/css/colReorder.dataTables.min.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script> -->

    <!-- Styles -->
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            /* text-align: center; */
            color: #999;
        }

        .container {
            width: 100%;
            height: 20%;
            /* position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -100px; */
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <script>
        $(document).ready(function() {
            console.log('test')
            $('#table_id').DataTable({
                dom: '<"top"fB>t<"bottom"lip>r',
                // dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv'
                ],

                responsive: true,
            });



        });

        function dateEndHandler() {
            const dateStart = $('#dateStart').val();
            console.log(dateStart);
            $('#dateEnd').val(dateStart);
        }

        const clearForm = () => {
            $('#myForm')[0].reset();
        }

        function toggle() {
            $('#sidebarToggle').toggle(
                console.log('toggle')
            );

        }
    </script>

</head>

<body id="page-top">

    <div id="wrapper">

        @include('theme.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('theme.navbar')

                <form method="POST" action="main" id="myForm">
                    @csrf
                    <div class="container-fluid">


                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Report</h1>
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>


                        <div class="row">


                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Criteria</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group" style="width:50%">
                                            <h5 class="small font-weight-bold">Report Type <span class="float-right"></span></h5>
                                            <div class="form-check">
                                                <label class="radio-inline">
                                                    <input type="checkbox" name="typeOKNG[]" value="OK">OK
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="checkbox" name="typeOKNG[]" value="NG">NG
                                                </label>
                                                <!-- <label class="radio-inline" for="flexCheckDefault">
                                                <input class="form-check-input move-left" type="checkbox" value="OK" name="typeOKNG[]">
                                                OK
                                            </label> -->
                                            </div>

                                            <div class="form-check">
                                                <label class="radio-inline">
                                                    <input type="checkbox" name="typeErrorEvent[]" value="Event">Event
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="checkbox" name="typeErrorEvent[]" value="Error">Error
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group form-inline">

                                                <label for="dateStart">Date Start: </label>
                                                <input class="form-control" type="date" class="" id="dateStart" name="dateStart" onchange="dateEndHandler();">
                                                &nbsp;&nbsp;
                                                <label for="dateStart">Date End: </label>
                                                <input class="form-control" type="date" class="" id="dateEnd" name="dateEnd">
                                                &nbsp;&nbsp;
                                                <label for="dateStart">PDS no. </label>
                                                <input class="form-control" type="text" class="" id="pdsNo" name="pdsNo">
                                            </div>
                                            <div class="form-group form-inline">


                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            <button type="button" class="btn btn-secondary" onclick="clearForm()">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Project Card Example -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Table Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <?php if (isset($keyArray)) {
                                                            foreach ($keyArray as $key => $value) { ?>

                                                                <th scope="col">{{$value}}</th>

                                                        <?php  }
                                                        } ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (isset($result)) {
                                                        foreach ($result as $keyResult => $row) { ?>
                                                            <tr>
                                                                <?php foreach ($row as $keyRow => $data) { ?>


                                                                    <td>{{$row[$keyRow]}}</td>

                                                                <?php } ?>
                                                            </tr>
                                                    <?php }
                                                    } ?>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
                @include('theme.footer')
</body>



</html>
