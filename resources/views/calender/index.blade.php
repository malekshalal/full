<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lamar</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--  cdn jquere full calender integratin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js" integrity="sha512-vTlIpCig7Yl48kFM3fyxWwW7t+cf+U7Bi22g/o2D4hbGKXnN//6hNZYtIZKSmXQJ5BTdr1jMBz6BUZV030LmuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/ar-sa.js" integrity="sha512-045Yr1rKUnSYyBj0YtRcfuEdguGcZ+30nvedCyXDDlOHCC3LX09zLn5u8KMvGtU630CTBYGR88h7mQWyichTJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="col-md-11 offset-1 mt-5 mb-5">
                <div style="direction: rtl;" id="calender">

                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#calender').fullCalendar({

                themeSystem: 'cerulean',
                header: {
                    center: 'title',
                    left: 'next,prev,today',
                    right: 'month,agendaWeek,agendaDay'
                },
                firstDay: 6,


                locale: 'ar-sa',
                buttonText: {
                    today: 'اليوم',
                    month: 'شهر',
                    week: 'اسبوع',
                    day: 'يوم',
                    list: 'قائمة'
                },

            })
        })
    </script>


</body>

</html>