<div class="row">
    <div class="col-md-6">
        <h3>Periods</h3>
        {periods}
        <div class="panel panel-success">
            <!-- Default panel contents -->
            <div class="panel-heading">{time}</div>

            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
                {bookings}
                <tr>
                    <td>{day}</td>
                    <td>{coursename}</td>
                    <td>{room}</td>
                    <td>{instructorname}</td>
                </tr>
                {/bookings}
            </table>
        </div>
        {/periods}
    </div>
    <div class="col-md-6">
        <h3>Days</h3>
        {days}
        <div class="panel panel-info">
            <!-- Default panel contents -->
            <div class="panel-heading">{weekday}</div>

            <table class="table">
                <tr>
                    <th>Time</th>
                    <th>Course</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
                {bookings}
                <tr>
                    <td>{time}</td>
                    <th>{coursename}</th>
                    <td>{room}</td>
                    <th>{instructorname}</th>
                </tr>
                {/bookings}
            </table>
        </div>
        {/days}
        <h3>Courses</h3>
        {courses}
        <div class="panel panel-danger">
            <!-- Default panel contents -->
            <div class="panel-heading">{coursename}</div>
            <table class="table">
                <tr>
                    <th>Course</th>
                    <th>Instructor</th>
                </tr>
                <tr>
                    <th>{coursename}</th>
                    <th>{instructorname}</th>
                </tr>
            </table>
        </div>
        {/courses}
    </div>
</div>