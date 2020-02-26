<div class="container-fluid">
    <h1 class="text-center">Student Registration Form</h1>
    <p class="text-center">Please fill up with correct information.</p>
    <form action="output.php" method="post"> 
        <div class="col-md-3"></div>
        <div class="col-md-3 card"> 
                        <label for="firstname"><b>First Name:</b></label>
                        <input class="form-control" type="text" id="firstname" placeholder="Firstname" name="firstname" required>
                        <label for="lastname"><b>Last Name:</b></label>
                        <input class="form-control" type="text" id="lastname"  placeholder="Lastname" name="lastname" required>
                        <label for="middlename"><b>Middle Name:</b></label>
                        <input class="form-control" type="text" id="middlename" placeholder="Middlename" name="middlename" required>
                        <label for="birthday"><b>Birthday:</b></label>
                        <input class="form-control" type="date" id="birthday" placeholder="Birthday" name="birthday" required>
                        <label for="guardian"><b>Guardian:</b></label>
                        <input class="form-control"type="text" id="guardian"  placeholder="Guardian's Name" name="guardian" required>

                        <label for="contact"><b>Contact Number:</b></label>
                        <input class="form-control"type="text" id="contact"placeholder="e.g. +639396418350" name="contact" required>

                        <label for="status"><b>Civil Status:</b></label>
                        <input class="form-control" type="text" id="status"placeholder="Civil Status" name="status" required>

                        <label for="address"><b>Address:</b></label>
                        <input class="form-control" type="text" id="address" placeholder="Address" name="address" required> 
            
        </div>
            <div class="col-md-3 card">
                        
                        <label for="place"><b>Place of Birth:</b></label>
                        <input class="form-control" type="text" id="place" placeholder="Place of Birth" name="place" required>
                        <label for="level"><b>Year Level:</b></label>
                        <select class="form-control" id="level" placeholder="Year Level" name="yearlevel" required>
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                            <option value="Fourth Year">Fourth Year</option>
                            <option value="Fifth Year">Fifth Year</option>
                         </select>
                        <label for="course"><b>Course:</b></label>
                        <select class="form-control" id="course" placeholder="Course" name="course" required><br>
                            <option value="BS IT">BS-IT</option>
                            <option value="BS TCM">BS-TCM</option>
                            <option value="BS DS">BS-DS</option>
                            <option value="BS COT">BS-COT</option>
                        </select><br>
                        <label for="gender"><b>Gender:</b></label>
                        <input type="radio" placeholder="Male" name="gender" value="male"required> Male
                        <input type="radio" placeholder="Female" name="gender" value="female"required> Female <br><br>
                        <label for="schoolyear"><b>School Year:</b></label><br>
                        <input class="form-control" type="text" id="schoolyear"  placeholder="YYYY-YYYY" name="schoolyear"required><br>
                        <label for="email"><b>Enter your email:</b></label>
                        <input class="form-control" type="email" id="email" placeholder="Email Address" name="email" required><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                        <div class="card footer">Copyright & Copy; 2020</div>
        </div>
        <div class="col-md-3"></div>
        
</div>
