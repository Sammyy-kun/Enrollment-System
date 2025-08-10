<?php
    include 'header.php';
?>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h5 class="mb-3 ps-3 sublogo">MENU</h5>
        <ul>
            <li class="hover-sidebar">
                <a href="requirements.php">
                    <img src="img/description.svg" alt="">
                    <i class="material-icons f"></i> Requirements
                </a>
            </li>
            <li class="active">
                <a href="new-student.php">
                    <img src="img/assignment.svg" alt="">
                    <i class="material-icons f"></i> Admission Form
                </a>
            </li>
            <li class="hover-sidebar">
                <a href="index.php">
                    <img src="img/home.svg" alt="">
                    <i class="material-icons f"></i> Home
                </a>
            </li>
        </ul>
    </div>
    <div class="content-wrapper">
        <nav class="navbar">
            <button class="navbar-toggler" type="button">
                <i class="material-icons" style="color: #253475;">menu</i>
            </button>
            <a class="navbar-brand" href="/" style="color: #253475;">NCST Education System</a>
        </nav>
        <!-- Main content -->
        <main>
            <div class="container">
                <h3 class="fw-bold mt-5">Admission Form</h3>
                <p class="mb-3">Please enter your details to complete your registration</p>
                <div class="container container-form">
                    <form id="registrationForm" method="POST" action="" onsubmit="validateForm(event)">
                        <div class="row">
                            <div class="col">
                                <h4 class="fw-bold mb-4">Desired Course</h4>
                                <select name="desired_course" class="form-select input-info" required>
                                    <option value="">Select Course</option>
                                    <option value="BS Computer Science">Bachelor of Science in Computer Science
                                    </option>
                                    <option value="BS Information Technology">Bachelor of Science in Information
                                        Technology</option>
                                    <option value="BS Business Administration">Bachelor of Science in Business
                                        Administration</option>
                                    <option value="BS Nursing">Bachelor of Science in Nursing</option>
                                    <option value="BS Hospitality Management">Bachelor of Science in Hospitality
                                        Management</option>
                                    <option value="BS Criminology">Bachelor of Science Criminology</option>
                                    <option value="BS Accountancy">Bachelor of Science in Accountancy</option>
                                    <option value="BS Psychology">Bachelor of Science in Psychology</option>
                                    <option value="BS Education">Bachelor of Science in Education</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <h4 class="fw-bold mb-5 mt-4">Personal Information</h4>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label fw-bold">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="form-control input-info"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="firstName" class="form-label fw-bold">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="form-control input-info"
                                    placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="middleName" class="form-label fw-bold">Middle Name</label>
                                <input type="text" name="middleName" id="middleName" class="form-control input-info"
                                    placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="suffix" class="form-label fw-bold">Suffix</label>
                                <select class="form-select input-info" name="suffix" id="suffix">
                                    <option value="">Suffix (Optional)</option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr.">Sr.</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>
                            <div class="col-md-8 mt-4">
                                <label for="address" class="form-label fw-bold">Complete Address</label>
                                <input type="text" name="address" id="address" class="form-control input-info"
                                    placeholder="Complete Address" required>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label for="zipCode" class="form-label fw-bold">Zip Code</label>
                                <input type="text" name="zipCode" id="zipCode" class="form-control input-info"
                                    placeholder="Zip Code" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="region" class="form-label fw-bold">Region</label>
                                <select id="region" name="region" class="form-select input-info" required>
                                    <option value="">Select Region</option>
                                    <option value="region_iva">Region IV-A (Calabarzon)</option>
                                    <option value="ncr">NCR - National Capital Region</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="province" class="form-label fw-bold">Province</label>
                                <select id="province" name="province" class="form-select input-info" required>
                                    <option value="">Select Province</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="city" class="form-label fw-bold">City/Municipality</label>
                                <select id="city" name="city" class="form-select input-info" required>
                                    <option value="">Select City/Municipality</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="barangay" class="form-label fw-bold">Barangay</label>
                                <select id="barangay" name="barangay" class="form-select input-info" required>
                                    <option value="">Select Barangay</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="landline" class="form-label fw-bold">Landline Number</label>
                                <input type="text" name="landline" id="landline" class="form-control input-info"
                                    placeholder="Landline Number">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mobile" class="form-label fw-bold">Mobile Number</label>
                                <input type="text" name="mobile" id="mobile" class="form-control input-info"
                                    placeholder="Mobile Number" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="gender" class="form-label fw-bold">Gender</label>
                                <select id="gender" name="gender" class="form-select input-info" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="civil_status" class="form-label fw-bold">Civil Status</label>
                                <select id="civil_status" name="civil_status" class="form-select input-info" required>
                                    <option value="">Select Civil Status</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="separated">Separated</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="nationality" class="form-label fw-bold">Nationality</label>
                                <select name="nationality" id="nationality" class="form-select input-info" required>
                                    <option value="Filipino">Filipino</option>
                                    <option value="American">American</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Korean">Korean</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="birthdate" class="form-label fw-bold">Birthdate</label>
                                <input type="date" name="birthdate" class="form-control input-info" id="birthdate"
                                    required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="birthplace" class="form-label fw-bold">Place of Birth</label>
                                <input type="text" name="birthplace" id="birthplace" class="form-control input-info"
                                    placeholder="Place of Birth" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="email" class="form-label fw-bold">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control input-info"
                                    placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <h4 class="fw-bold mb-5 mt-5">Educational Information</h4>
                            <div class="col-md-6">
                                <label for="primary_school" class="form-label fw-bold">Primary School</label>
                                <select name="primary_school" id="primary_school" class="form-select input-info"
                                    required>
                                    <option value="Dasmarinas Elementary School">Dasmarinas Elementary School
                                    </option>
                                    <option value="San Jose Elementary School">San Jose Elementary School</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="primary_year" class="form-label fw-bold">Year Graduated</label>
                                <input type="number" name="primary_year" class="form-control input-info"
                                    id="primary_year" placeholder="Year Graduated" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="secondary_school" class="form-label fw-bold">Secondary School</label>
                                <select name="secondary_school" id="secondary_school" class="form-select input-info"
                                    required>
                                    <option value="Dasmarinas National High School">Dasmarinas National High School
                                    </option>
                                    <option value="San Jose National High School">San Jose National High School
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="secondary_year" class="form-label fw-bold">Year Graduated</label>
                                <input type="number" name="secondary_year" class="form-control input-info"
                                    id="secondary_year" placeholder="Year Graduated" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="tertiary_school" class="form-label fw-bold">Tertiary School</label>
                                <select name="tertiary_school" id="tertiary_school" class="form-select input-info"
                                    required>
                                    <option value="University of the Philippines">University of the Philippines
                                    </option>
                                    <option value="Ateneo de Manila University">Ateneo de Manila University</option>
                                    <option value="De La Salle University">De La Salle University</option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-4">
                                <label for="tertiary_year" class="form-label fw-bold">Year Graduated</label>
                                <input type="number" name="tertiary_year" class="form-control input-info"
                                    id="tertiary_year" placeholder="Year Graduated" required>
                            </div>
                            <div class="col-md-3 mt-4">
                                <label for="tertiary_course" class="form-label fw-bold">Course Graduated</label>
                                <input type="text" name="tertiary_course" class="form-control input-info"
                                    id="tertiary_course" placeholder="Course Graduated" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="educational_plan" class="form-label fw-bold">Educational Plan</label>
                                <select name="educational_plan" id="educational_plan" class="form-select input-info"
                                    required>
                                    <option value="Self-supporting">Self-supporting</option>
                                    <option value="Scholarship">Scholarship</option>
                                    <option value="Parental support">Parental support</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="academic_achievement" class="form-label fw-bold">Academic
                                    Achievement</label>
                                <select name="academic_achievement" id="academic_achievement"
                                    class="form-select input-info" required>
                                    <option value="Honor Student">Honor Student</option>
                                    <option value="Dean's Lister">Dean's Lister</option>
                                    <option value="With Awards">With Awards</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <h4 class="fw-bold mb-4 mt-5">Parent/Guardian Information</h4>
                            <h5 class="fw-bold mb-4 mt-4">Father's Information</h5>
                            <div class="col-md-6">
                                <label for="father_family_name" class="form-label fw-bold">Family Name</label>
                                <input type="text" name="father_family_name" class="form-control input-info"
                                    id="father_family_name" placeholder="Father's Family Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="father_given_name" class="form-label fw-bold"> Given Name</label>
                                <input type="text" name="father_given_name" class="form-control input-info"
                                    id="father_given_name" placeholder="Father's Given Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="father_middle_name" class="form-label fw-bold">Middle Name</label>
                                <input type="text" name="father_middle_name" class="form-control input-info"
                                    id="father_middle_name" placeholder="Father's Middle Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="father_deceased" class="form-label fw-bold">Deceased</label>
                                <div class="mt-2">
                                    <input type="checkbox" name="father_deceased" id="father_deceased"
                                        class="form-check-input">
                                </div>
                            </div>
                            <div class="col mt-4">
                                <label for="father_address" class="form-label fw-bold">Complete Address</label>
                                <input type="text" name="father_address" class="form-control input-info"
                                    id="father_address" placeholder="Father's Complete Address" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="father_contact" class="form-label fw-bold">Contact Number</label>
                                <input type="text" name="father_contact" class="form-control input-info"
                                    id="father_contact" placeholder="Father's Contact Number" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="father_occupation" class="form-label fw-bold">Occupation</label>
                                <input type="text" name="father_occupation" class="form-control input-info"
                                    id="father_occupation" placeholder="Father's Occupation" required>
                            </div>

                            <h5 class="fw-bold mb-4 mt-5">Mother's Information</h5>
                            <div class="col-md-6">
                                <label for="mother_family_name" class="form-label fw-bold">Family Name</label>
                                <input type="text" name="mother_family_name" class="form-control input-info"
                                    id="mother_family_name" placeholder="Mother's Family Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="mother_given_name" class="form-label fw-bold">Given Name</label>
                                <input type="text" name="mother_given_name" class="form-control input-info"
                                    id="mother_given_name" placeholder="Mother's Given Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_middle_name" class="form-label fw-bold">Middle Name</label>
                                <input type="text" name="mother_middle_name" class="form-control input-info"
                                    id="mother_middle_name" placeholder="Mother's Middle Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_deceased" class="form-label fw-bold">Deceased</label>
                                <div class="mt-2">
                                    <input type="checkbox" name="mother_deceased" id="mother_deceased"
                                        class="form-check-input">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_maiden_name" class="form-label fw-bold">Maiden Name</label>
                                <input type="text" name="mother_maiden_name" class="form-control input-info"
                                    id="mother_maiden_name" placeholder="Mother's Maiden Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_maiden_given_name" class="form-label fw-bold">Maiden Given
                                    Name</label>
                                <input type="text" name="mother_maiden_given_name" class="form-control input-info"
                                    id="mother_maiden_given_name" placeholder="Mother's Maiden Given Name" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_maiden_middle_name" class="form-label fw-bold">Maiden Middle
                                    Name</label>
                                <input type="text" name="mother_maiden_middle_name" class="form-control input-info"
                                    id="mother_maiden_middle_name" placeholder="Mother's Maiden Middle Name" required>
                            </div>
                            <div class="col mt-4">
                                <label for="mother_address" class="form-label fw-bold">Complete Address</label>
                                <input type="text" name="mother_address" class="form-control input-info"
                                    id="mother_address" placeholder="Mother's Complete Address" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_contact" class="form-label fw-bold">Contact Number</label>
                                <input type="text" name="mother_contact" class="form-control input-info"
                                    id="mother_contact" placeholder="Mother's Contact Number" required>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="mother_occupation" class="form-label fw-bold">Occupation</label>
                                <input type="text" name="mother_occupation" class="form-control input-info"
                                    id="mother_occupation" placeholder="Mother's Occupation" required>
                            </div>

                            <h5 class="fw-bold mb-4 mt-5">Guardian's Information</h5>
                            <div class="col-md-6">
                                <label for="guardian_family_name" class="form-label fw-bold">Family Name</label>
                                <input type="text" name="guardian_family_name" class="form-control input-info"
                                    id="guardian_family_name" placeholder="Guardian's Family Name">
                            </div>
                            <div class="col-md-6">
                                <label for="guardian_given_name" class="form-label fw-bold">Given Name</label>
                                <input type="text" name="guardian_given_name" class="form-control input-info"
                                    id="guardian_given_name" placeholder="Guardian's Given Name">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="guardian_middle_name" class="form-label fw-bold">Middle Name</label>
                                <input type="text" name="guardian_middle_name" class="form-control input-info"
                                    id="guardian_middle_name" placeholder="Guardian's Middle Name">
                            </div>
                            <div class="col mt-4">
                                <label for="guardian_address" class="form-label fw-bold">Complete Address</label>
                                <input type="text" name="guardian_address" class="form-control input-info"
                                    id="guardian_address" placeholder="Guardian's Complete Address">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="guardian_contact" class="form-label fw-bold">Contact Number</label>
                                <input type="text" name="guardian_contact" class="form-control input-info"
                                    id="guardian_contact" placeholder="Guardian's Contact Number">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="guardian_relationship" class="form-label fw-bold">Relationship to
                                    Student</label>
                                <select name="guardian_relationship" id="guardian_relationship"
                                    class="form-select input-info" required>
                                    <option value="">Select Relationship</option>
                                    <option value="father">Father</option>
                                    <option value="mother">Mother</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5 gap-5">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary fw-bold">Submit</button>
                            </div>
                            <div class="col-md-6">
                                <button type="reset" class="btn btn-secondary ms-2 fw-bold">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="style/new-student.js"></script>
</body>

</html>
