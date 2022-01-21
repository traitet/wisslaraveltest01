<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WISS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

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
            width: 600px;
            height: 200px;
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

</head>

<body>
    <form method="POST" action="main">
        @csrf
        <div class="container">
            <h1>Test</h1>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="" id="checkOk" name="type">
                <label class="form-check-label" for="flexCheckDefault">
                    OK
                </label>
                <input class="form-check-input" type="radio" value="" id="checkNG" name="type">
                <label class="form-check-label" for="flexCheckDefault">
                    NG
                </label>
                <input class="form-check-input" type="radio" value="" id="checkEvent" name="type">
                <label class="form-check-label" for="flexCheckDefault">
                    Event
                </label>
                <input class="form-check-input" type="radio" value="" id="checkError" name="type">
                <label class="form-check-label" for="flexCheckDefault">
                    Error
                </label>
            </div>
            <div class="input-group date" data-provide="datepicker">
                <div class="form-group form-inline">
                    <label for="dateStart">Date Start:</label>
                    <input type="date" class="" id="dateStart" name="dateStart">

                    <label for="dateStart">Date End:</label>
                    <input type="date" class="" id="dateEnd" name="dateEnd">
                </div>
                <div class="form-group form-inline">
                    <label for="dateStart">PDS no.</label>
                    <input type="text" class="" id="pdsNo" name="pdsNo">

                </div>

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDate" name="typeDatePdf">
                <label class="form-check-label" for="flexCheckDefault">
                    Date
                </label>
                <input class="form-check-input" type="checkbox" value="" id="checkPds" name="typeDatePds">
                <label class="form-check-label" for="flexCheckDefault">
                    pds
                </label>

            </div>
            <div class="form-group">
                <button type="submit">Search</button>
                <button type="button">Clear</button>
            </div>
        </div>

        <table>
            <tr>
                <?php if(isset($keyArray)){foreach ($keyArray as $key => $value) { ?>

                    <th scope="col">{{$value}}</th>

                <?php  } } ?>
            </tr>

            <?php if(isset($result)){ foreach ($result as $keyResult => $row) { ?>
                <tr>
                    <?php foreach ($row as $keyRow => $data) { ?>


                        <td>{{$row[$keyRow]}}</td>

                    <?php } ?>
                </tr>
            <?php }} ?>





        </table>
    </form>
</body>

</html>