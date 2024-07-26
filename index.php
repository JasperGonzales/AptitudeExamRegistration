<!DOCTYPE html>
<html>

<head>
    <title>Aptitude Exam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <style>
        .form{
            margin-top: 10%;
            padding: 5%;
            border: 1px solid black;
        }

        .v-align-center {
            align-items: center
        } 

        .btn-submit {
            width: 30%;
        }
        .error-msg {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="form container">
        <!-- NAME -->
        <div class="row">
            <div class="col-md-2 d-flex v-align-center">
                <span class="input-label"> Full Name: </span>
            </div>
            <div class="col-md-10 d-flex">
                <input type="text" id="name" class="form-control" value="" placeholder="Enter your name"/> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <span class="error-msg name-error-msg" hidden>Invalid Name!</span>
            </div>
        </div>
        <br/>

        <!-- EMAIL -->
        <div class="row">
            <div class="col-md-2 d-flex v-align-center">
                <span class="input-label"> Email Address: </span>
            </div>
            <div class="col-md-10 d-flex">
                <input type="text" id="email" class="form-control" value="" placeholder="Enter your email"/> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10 error-msg">
                <span class="email-error-msg" hidden>Invalid Email Address!</span>
            </div>
        </div>
        <br/>
        
        <!-- MOBILE NUM -->
        <div class="row">
            <div class="col-md-2 d-flex v-align-center">
                <span> Mobile Number: </span>
            </div>
            <div class="col-md-10 d-flex">
                <input type="text" id="mobile-num" class="form-control" value="" placeholder="Enter your mobile number"/> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <span class="error-msg mobile-num-error-msg" hidden>Invalid Mobile Number!</span>
            </div>
        </div>
        <br/>
        
        <!-- DOB -->
        <div class="row">
            <div class="col-md-2 d-flex v-align-center">
                <span> Date of Birth: </span>
            </div>
            <div class="col-md-10 d-flex">
                <input type="text" id="dob" class="form-control" value="" readonly="readonly" placeholder="Select your date of birth"/> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <span class="error-msg dob-error-msg" hidden>Invalid Date of Birth!</span>
            </div>
        </div>
        <br/>

        <!-- AGE -->
        <div class="row">
            <div class="col-md-2 d-flex v-align-center">
                <span> Age: </span>
            </div>
            <div class="col-md-10 d-flex">
                <input type="text" id="age" class="form-control" value="" readonly/> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <span class="error-msg age-error-msg" hidden>Invalid Age!</span>
            </div>
        </div>
        <br/>
        
        <!-- GENDER -->
        <div class="row">
            <div class="col-md-2 d-flex v-align-center">
                <span> Gender: 
            </div>
            <div class="col-md-10  d-flex">
                <select class="form-control" id="gender">
                    <option value="">-Select-</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <span class="error-msg gender-error-msg" hidden>Invalid Gender!</span>
            </div>
        </div>
        <br/>
        <div class="row align-items-middle">
            <div class="col text-center ">
                <button class="btn btn-success btn-submit" type="submit" id="btn-submit">Submit</button>
            </div>
        </div>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="./registration.js"></script>
</body>

</html>