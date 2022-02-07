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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->


    <!-- Styles -->
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            text-align: center;
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

        const clearForm = () =>{
            $('#myForm')[0].reset();
        }
    </script>

</head>

<body>
    <form method="POST" action="main" id="myForm">
        @csrf
        <div class="container">
            <h1>Report</h1>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="OK" name="typeOKNG[]">
                <label class="form-check-label" for="flexCheckDefault">
                    OK
                </label>
                <input class="form-check-input" type="checkbox" value="NG" name="typeOKNG[]">
                <label class="form-check-label" for="flexCheckDefault">
                    NG
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Event" name="typeErrorEvent[]">
                <label class="form-check-label" for="flexCheckDefault">
                    Event
                </label>
                <input class="form-check-input" type="checkbox" value="Error" name="typeErrorEvent[]">
                <label class="form-check-label" for="flexCheckDefault">
                    Error
                </label>
            </div>
            <div class="input-group date" data-provide="datepicker">
                <div class="form-group form-inline">
                    <label for="dateStart">Date Start:</label>
                    <input type="date" class="" id="dateStart" name="dateStart" onchange="dateEndHandler();">

                    <label for="dateStart">Date End:</label>
                    <input type="date" class="" id="dateEnd" name="dateEnd">
                </div>
                <div class="form-group form-inline">
                    <label for="dateStart">PDS no.</label>
                    <input type="text" class="" id="pdsNo" name="pdsNo">

                </div>

            </div>
           
            <div class="form-group">
                <button type="submit">Search</button>
                <button type="button" onclick="clearForm()">Clear</button>
            </div>

            <!-- <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table> -->
            <table id="table_id" class="display">
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

    </form>
</body>

</html>