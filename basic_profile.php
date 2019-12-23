<?php
session_start();
include "../../includes/connection.php";
if(strlen($_SESSION['userid'])==0)
{
header('location:../../index.php');
}
else{

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Basic Profile
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap-multiselect.css">
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap-tagsinput.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>    	
    <script type="text/javascript" src="../../assets/bootstrap-multiselect.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript" src="../../assets/bootstrap-tagsinput.js">
    </script>
    <style type="text/css">
     .navbar li.active > a {
                background-color: #FF69B4;
            }
      .navbar-nav > li{
        padding-left:30px;
        padding-right:30px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  navbar-light bg-dark ">
      <a class="navbar-brand" href="#" style="">
        <button class="btn text-light" style=" ">
          <h5> VAULT BOARD
          </h5>
        </button>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="../home.php">
              <button class="btn  text-light">Home
              </button>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <button class="btn  text-light">Build Profile
              </button>
              <span class="sr-only">(current)
              </span>
            </a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <form method="get" action="../../logout.php"> 
              <button name="logout" type="submit" class="btn btn-danger text-light ">Logout
              </button>
            </form>
          </li>
        </ul>
      </div>
    </nav>

<section id="tabs">
  <div class="container">
    <div class="row">
      <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</a>
            <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education</a>
            <a class="nav-item nav-link" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="false">Experience</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  <div class="card">
		  <div class="card-body">
            <div class="container">
            <form style="margin-top: 50px;" action="store_profile.php" method="post" enctype="multipart/form-data">
              <div class="row ">
                  <div class="form-group">
                    <label class="label" for="imagename">Profile Picture
                    </label>
                    <div class="file-field">
                      <div class="mb-4">
                        <img src="../../images/user.png" height="75px" width="75px" class="rounded-circle"
                             >
                      </div>
                      <div class="d-flex justify-content-center">
                        <div class="btn btn-mdb-color btn-rounded float-left">
                          <input class="inputtype" type="file" required="required" name="image" id="image" accept="image/*"/>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col col-lg-6 col-md-12 col-sm-12">
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label class="label" for="firstname">First Name
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <input type="text" id="frstname" class="form-control inputtype" required="required" maxlength="50" name="firstname"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label  class="label" for="lastname">Last Name
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <input type="text" id="lastname" required="required" class="form-control inputtype" maxlength="50" name="lastname"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label class="label"  for="mobile">Mobile Number
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <input  type="number" required="required" class="form-control bfh-number inputtype" maxlength="10" id="mobile" name="mobile"/>
                      <br>
                      <input class=" inputtype" type="checkbox" id="isnotify" name="notification" value="allow_notification">
                      <label class="label"  for= "notify">Send notifications to mobile
                      </label>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label class="label"  for="dob">Date of Birth
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <input type="Date" id="dob" class="form-control inputtype" required="required" name="dob">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label class="label"  for="gender">Gender
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <select class="form-control" required="required" id="gender" name="gender">
                        <option disabled selected value> -- Select Gender -- 
                        </option>
                        <option value="male">Male
                        </option>
                        <option value="female">Female
                        </option>
                        <option value="other">Other
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col col-lg-6 col-md-12 col-sm-12">
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label class="label"  for="currentsalary">Current Salary
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <input type="text" class="form-control bfh-number inputtype" id="current_salary" required="required" min="0" maxlength="10" name="current_salary"/>
                      <span>*in Rs/-
                      </span>
                      <br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input inputtype" type="radio" name="salarytype" id="monthly" value="monthly">
                        <label class="label"  class="form-check-label" for="monthly">Monthly
                        </label>
                        <input class="form-check-input inputtype" type="radio" name="salarytype" id="annually" value="annually">
                        <label class="label"  class="form-check-label" for="annually">Annually
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <label class="label"  class="form-check-label"class="form-check-label" for="experienceyears">Total Experience
                      </label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12">
                      <input type="number" class="form-control inputtype" min="0" name="years">
                      <span>years
                      </span>
                      </input> 
                    <input type="number" class="form-control inputtype" min="0" max="12" data-wrap="true" name="months"/>
                    <span>months
                    </span>
                    </input>
                  <br>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <label  class="label" for="currentdesignation">Current Designation
                  </label>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <input type="text" id="currentdesignation" class="form-control inputtype" required="required" maxlength="50" name="currentdesignation"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <label class="label"  for="currentcompany">Current Company
                  </label>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <input type="text" id="currentcompany" class="form-control inputtype" required="required" name="currentcompany" maxlength="50" />
                  <br>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <label class="label"  for="currentsince">Current Since
                  </label>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <div class='input-group date inputtype' id='datetimepicker1'>
                    <input type='date' required="required" name="currentsince" class="form-control inputtype" >
                    </input>
                </div>
              </div>
              </div>
            <div class="form-group">
              <div class="col col-lg-12 col-md-12 col-sm-12">
                <label class="label"  for="skills"> Proffesional Skills
                </label>
              </div>
              <div class="col col-lg-12 col-md-12 col-sm-12">
                <select class="form-control" required="required" id="skills" name="skills[]" multiple="multiple" >
                  <option disabled selected value> -- Select Your Skills -- 
                  </option>
                  <?php 
                    $sql ="select * from skills";
                    $query= $pdo -> prepare($sql);
                    $query-> execute();
                    $results=$query->fetchall();
                    foreach ($results as $result) {echo $result['skill_set_name'];
                    ?>
                  <option value="<?php echo $result['id'];?>">
                    <?php echo $result['skill_set_name'];?>
                  </option>
                  <?php } ?>
                </select>
                </div1>
            </div>
			</div>
            <div class="form-group">
              <div class="col col-lg-12 col-md-12 col-sm-12">
                <label class="label"  for="resume">Resume
                </label>
              </div>
              <div class="col col-lg-12 col-md-12 col-sm-12">
                <input class=" inputtype" type="file" required="required" name="resume" accept=".doc,.docx,.pdf,.txt" src="images/profile.png" alt="choose image"/>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col col-lg-12 col-md-12 col-sm-12 ">
            <label class="label"  for="profilesummary">Profile Summary
            </label>
          </div>
          <div class="col col-lg-12 col-md-12 col-sm-12">
            <textarea class="form-control" id="profilesummary" name="profilesummary" rows="4"></textarea>
          </div>
        </div>
      </div>
        <div class="form-group">
         <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <button class="btn btn-success btn-rounded"name="personalsubmit" type="submit">Save
              </button>
            </div>
          </div>
        </div>
        </form></div></div>
   </div>
         <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
            <div class="container">
        <form style="margin-top: 50px;" action="store_profile.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12">
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="Education">Education
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <select class="form-control" required="required" name="education" id= "education" onchange="populate(this.id,'major')">
                    <option disabled selected value> -- Select Education -- 
                    </option>
                    <option value="Doctorate/PhD">Doctorate/PhD
                    </option>
                    <option value="Masters/Post-Graduation">Masters/Post-Graduation
                    </option>
                    <option value="Graduation/Diploma">Graduation/Diploma
                    </option>
                    <option value="12th">12th
                    </option>
                  </select>
                </div>
                <br>
                <br>
              </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="major">Select Course
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <select class="form-control" required="required" name="major" id= "major">    
                  </select>
                </div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="university">University/Institute
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="text" required="required" class="form-control inputtype" maxlength="75" name="university"/>
                </div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label class="label"  for="startdate">Start Date
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="Date" class="form-control inputtype" required="required" name="startdate">
                </div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label class="label"  for="enddate">End Date
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="Date" class="form-control inputtype" required="required" name="enddate">
                </div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label class="label"  for="percentage">Percentage
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="number" class="form-control inputtype" min="0.0" max="100.0" step=".01" required="required" name="percentage">
                </div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label class="label"  for="cpga">CPGA
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="number" class="form-control inputtype" min="0.0" max="10.0" step=".01" required="required" name="cgpa">
                </div>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label"  for="cgpamax">CGPA Maximum 
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="number" class="form-control inputtype"  min="0.0" max="10.0" step=".01"  required="required" name="cgpamax"/>
                </div>
              </div>
            </div>
          </div>
          </div>
        <script>
          function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "Doctorate/PhD"){
              var optionArray = ["|","phd/doctorate|PhD/Doctorate","mphil|MPHIL","other|Other"];
            }
            else if(s1.value == "Masters/Post-Graduation"){
              var optionArray = ["|","CA|CA","CS|CS","DM|DM","ICWA(CMA)|ICWA(CMA)","Integrated PG|Integrated PG","LLM|LLM","M.A|M.A","M.Arch|M.Arch","M.Ch|M.Ch","M.Com|M.Com","M.Des|M.Des","M.Ed|M.Ed","M.Pharma|M.Pharma","MS/M.Sc(Science)|MS/M.Sc(Science)","M.Tech|M.Tech","MBA/PGDM|MBA/PGDM","MSC|MSC","MCM|MCM","MDS|MDS","MFA|MFA","Medical-Ms/Md|Medical-Ms/Md","MVSC|MVSC","PG Diploma|PG Diploma","OTHER|OTHER"];
            }
            else if(s1.value == "Graduation/Diploma"){
              var optionArray = ["|","B.A|B.A","B.Arch|B.Arch","B.B.A/B.M.S|B.B.A/B.M.S","B.Com|B.Com","B.Des|B.Des","B.Ed|B.Ed","B.EI.Ed|B.EI.Ed","B.P.Ed|B.P.Ed","B.Pharma|B.Pharma","B.Sc|B.Sc","B.Tech/B.E|B.Tech/B.E","B.U.M.S|B.U.M.S","BAMS|BAMS","BCA|BCA","BDS|BDS","BFA|BFA","BHM|BHM","BHMS|BHMS","BVSC|BVSC","Diploma|Diploma","LLB|LLB","MBBS|MBBS","OTHER|OTHER"];
            }
            else if(s1.value == "12th"){
              var optionArray = ["|","CBSE|CBSE","CISCE|CISCE","National Open School|National Open School","Andhra Pradesh|Andhra Pradesh","Assam|Assam","Bihar|Bihar","Goa|Goa","Gujarat|Gujarat","Haryana|Haryana","Himachal Pradesh|Himachal Pradesh","Jammu & Kashmir|Jammu & Kashmir","Karnataka|Karnataka","Kerala|Kerala","Maharastra|Maharastra","Madhya Pradesh|Madhya Pradesh","Manipur|Manipur","Meghalaya|Meghalaya","Mizoram|Mizoram","Meghalaya|Meghalaya","Mizoram|Mizoram","Nagaland|Nagaland","Orissa|Orissa","Punjab|Punjab","Rajasthan|Rajasthan","Tamil Nadu|Tamil Nadu","Tripura|Tripura","Uttar Pradesh|Uttar Pradesh","West Bengal|West Bengal","OTHERS|OTHERS"];
            }
            for(var option in optionArray){
              var pair = optionArray[option].split("|");
              var newOption = document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s2.options.add(newOption);
            }
          }
        </script>
        <div class="container">
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <button class="btn btn-success btn-rounded"name="educationsubmit" type="submit">Save
              </button>
            </div>
          </div>
        </div>
        </form>
    </div>
          <div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">
           <div class="card">
		   <div class = "card-body">
		   <div class="container">
        <form class="form-horizontal" style="margin-top: 50px;" action="store_profile.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col col-lg-12 col-md-12 col-sm-12">
              <div class="form-group">
                <div class="row">
                  <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="jobtitle">Job Title
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="text" class="form-control inputtype" required="required" maxlength="50" name="jobtitle"/>
                </div>
              </div>
                </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="companyname">Company Name
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="text" class="form-control inputtype" required="required" maxlength="50" name="companyname"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="startdate">Start Date
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="Date" class="form-control inputtype" required="required" name="startdate">
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-12 col-md-12 col-sm-12">
                  <label  class="label" for="is_current">Are you currently working here?
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input inputtype" type="radio" name="is_currently" id="currentyes" value="yes">
                    <label  class="label" class="form-check-label" for="inlineRadio1">Yes
                    </label>  
                    <input class="form-check-input inputtype" type="radio" name="is_currently" id="currentno" value="no">
                    <label class="label"  class="form-check-label" for="inlineRadio2">No
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="endate">End Date
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="Date" id="enddate" class="form-control inputtype" required="required" name="enddate">
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="city">City
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="text" class="form-control inputtype" required="required" maxlength="50" name="city"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label class="label"  for="state">State
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="text" class="form-control inputtype" required="required" maxlength="50" name="state"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-4 col-md-4 col-sm-12">
                  <label  class="label" for="Country">Country
                  </label>
                </div>
                <div class="col col-lg-8 col-md-8 col-sm-12">
                  <input type="text" class="form-control inputtype" required="required" maxlength="50" name="country"/>
                </div>
              </div>
              <div class="form-group">
                <div class="col col-lg-2 col-md-2 col-sm-4 text-center">
                  <label  class="label" for="role">Role
                  </label>
                </div>
                <div class="col col-lg-10 col-md-10 col-sm-8">
                  <textarea class="form-control inputtype" name="role" id="role" rows="3">
                  </textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <!--<a href="basic_profile.php"><button class="btn btn-primary btn-rounded"><--Go Back</button></a>-->
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-4">
              <input class="btn btn-success btn-rounded" name="experiencesubmit" type="submit" value="Save and continue"/>
            </div>
            <div class="col col-lg-4 col-md-4 col-sm-4">
            </div>
          </div>
        </form>
      </div>
		   </div>
		   </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>


    
<script type="text/javascript">
  $(document).ready(function(){
    $('#skills').multiselect();
  }
                   );
</script>	
        
</body>
</html>
<?php }?>
