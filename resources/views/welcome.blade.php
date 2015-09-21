<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <h1>Hello World</h1>

        <div>
            @can('create_user')
                <a href="#">Create User</a>
            @endcan
        </div>

        <div>
            @can('patient_registration')
                <a href="#">Patient Registration</a>
            @endcan
        </div>

        <div>
            @can('hospital_bill')
                <a href="#">hospital_bill</a>
            @endcan
        </div>

        <div>
            @can('hospital_report')
                <a href="#">Hospital Report</a>
            @endcan
        </div>

        <div>
            @can('diagnostic_bill')
                <a href="#">Diagnostic Bill</a>
            @endcan
        </div>

        <div>
            @can('diagnostic_report')
                <a href="#">Diagnostic Report</a>
            @endcan
        </div>







    </body>
</html>
