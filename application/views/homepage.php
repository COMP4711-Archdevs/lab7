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
        <h3>Courses</h3>
        {courses}
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">{id} - {title} - {first_name} {last_name}</div>

            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Type</th>
                    <th>Building</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
                {bookings}
                <tr>
                    <td>{day}</td>
                    <td>{time}</td>
                    <td>{type}</td>
                    <td>{building}</td>
                    <td>{number}</td>
                </tr>
                {/bookings}
            </table>
        </div>
        {/courses}
    </div>
</div>