<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="../css/fullcalendar.min.css" />
<script src="../fullcalendar/lib/jquery.min.js"></script>
<script src="../fullcalendar/lib/moment.min.js"></script>
<script src="../fullcalendar/fullcalendar.min.js"></script>
<link rel="stylesheet" href="../css/hompage.css">    

<script>

/* This is the code for the calendar. */
$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: 'add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
});

/**
 * When the user clicks the submit button, the form data is sent to a PHP file on the server, the PHP
 * file sends the message to your email address, then the PHP file echos a success message back to the
 * form, which is then displayed on the page and fades out.
 */
function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>


<style>
body {
    margin-top: 0;
    margin-bottom:50px;
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
}

#calendar {
    width: 700px;
    margin: 0 auto;
}

.response {
    height: 60px;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
}
</style>
</head>

<div class="wrapper">
            <div class="multi_color_border"></div>
            <div class="top_nav">
                <div class="left">
                  <div class="logo"><p><span>Health</span>Center</p></div>
                 
              </div> 
              <div class="right">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <div class="login">
                      <button class="dropbtn"><img src="../images/admin.png"></button>
                    <div class="content">
                    
                    <a href="logout.php">LogOut</a>
                    </div>
                    </div>
                  </ul>
              </div>
            </div>
            <div class="bottom_nav">
              <ul>
              <li><a href="0-12.php">0-12 Months Old</a></li>
              <li><a href="1-4.php">1-4 Years Old</a></li>
              <li><a href="5-8.php">5-8 Years Old</a></li>
              <li><a href="9-14.php">9-14 Years Old</a></li>
              <li><a href="15-18.php">15-18 Years Old</a></li>
              </ul>
          </div>
          

<body>
    <br>
    <h2>Children's Health Growth Schedule</h2>

    <div class="response"></div>
    <div id='calendar'></div>
</body>


</html>