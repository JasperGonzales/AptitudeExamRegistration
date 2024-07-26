$(document).ready(function(){
    $('#dob').datepicker({
        changeMonth: true,
        changeYear: true,
        maxDate: new Date(),
        dateFormat: 'MM dd, yy'
    }).on('change',function(){
        var age = computeAge($(this).val());

        if(isNaN(age) || age < 0){
            alert('Invalid Date of Birth');
        }

        $('#age').val(age);
    });

    $('#btn-submit').on('click',function(event){
        event.preventDefault();

        var isNameValid = true;
        var isEmailValid = true;
        var isNumberValid = true;
        var isDobValid = true;
        var isGender = true;

        var name = $('#name');
        var nameValidChar = /^[a-z ,.'-]+$/i;

        if (name.val() == '' || !name.val().match(nameValidChar)) {
            $('.name-error-msg').attr('hidden',false);
            isNameValid = false;
        }
        else {
            $('.name-error-msg').attr('hidden',true);
            isNameValid = true;
        }

        var email = $('#email');
        var emailValidChar = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
        if (email.val() == '' || !email.val().match(emailValidChar)) {
            $('.email-error-msg').attr('hidden',false);
            isEmailValid = false;
        }
        else {
            $('.email-error-msg').attr('hidden',true);
            isEmailValid = true;
        }

        var mobile = $('#mobile-num');
        var mobileValidChar = /^\d+$/;
        var mobileCode = mobile.val().substring(0,2)
        if (mobile.val() == '' || !mobile.val().match(mobileValidChar) || mobile.val().length != 11 || mobileCode != '09') {
            $('.mobile-num-error-msg').attr('hidden',false);
            isNumberValid = false;
        }
        else {
            $('.mobile-num-error-msg').attr('hidden',true);
            isNumberValid = true;
        }

        var dob = $('#dob').val();
        
        if (dob == '') {
            $('.dob-error-msg').html('Please select date of birth');
            $('.dob-error-msg').attr('hidden',false);
            isDobValid = false;
        }
        else {
            
            $('.dob-error-msg').attr('hidden',true);
            isDobValid = true;
        }

        var age = $('#age').val();
        var gender = $('#gender').val();

        if(gender == ''){
            $('.gender-error-msg').attr('hidden',false);
            isGender = false;
        }
        else {
            $('.gender-error-msg').attr('hidden',true);
            isGender = true;
        }

        var isValid = true;

        if (
            !isNameValid ||
            !isEmailValid ||
            !isNumberValid ||
            !isDobValid ||
            !isGender
        ) {
            isValid = false;
        }
        else {
            isValid = true;
        }

        var temp_date = new Date (dob);
        
        dob = temp_date.getFullYear() + '-' + (temp_date.getMonth() + 1) + '-' + temp_date.getDate();


        var userData = {
            name: name.val(),
            email: email.val(),
            mobile_num: mobile.val(),
            dob: dob,
            age: age,
            gender: gender
        }


        if (isValid) {
            $.ajax({
                url: './registration.php',
                type: 'POST',
                data: {
                    userData: userData
                },
            }).done(function(response){
                // var result = $.parseJSON(response);
                alert(response);
            }).fail(function(){
                alert("Error. Please try again.");
            });
        }
        
    });
});


function computeAge (dob = "") {

    var date = new Date();
    var temp_date = new Date(dob);

    return date.getFullYear() - temp_date.getFullYear();
}