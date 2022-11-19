var password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/gm;
var phone_regex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
var email_regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;


$(document).ready(function(){
    //if input is null, then show error text
    $('#first_name').keyup(function(){
        var first_name_input = $('#first_name').val().trim();
        $('#err_first').empty();
        if(validate_input(first_name_input)== false){
            $('#err_first').append("Enter Firstname");
        }

    });

    $('#last_name').keyup(function(){
        var last_name_input = $('#last_name').val().trim();
        $('#err_last').empty();
        if(validate_input(last_name_input)== false){
            $('#err_last').append("Enter Lastname");
        }
    });

    $('#school').keyup(function(){
        var school_input = $('#school').val().trim();
        $('#err_school').empty();
        if(validate_input(school_input)== false){
            $('#err_school').append("Enter School");
        }

    });

    $('#email').keyup(function(){
        var email_input = $('#email').val().trim();
        $('#err_email').empty();
        if(validate_input(email_input)== false){
            $('#err_email').append("Enter Email");
        }

    });

    $('#contact').keyup(function(){
        var contact_input = $('#contact').val().trim();
        $('#err_contact').empty();
        if(validate_input(contact_input)== false){
            $('#err_contact').append("Enter Contact");
        }

    });


    //for password validation
    $('#password').keyup(function(){
        var password_input = $('#password').val();
        $('#err_pass').empty();
        if(validate_pwd(password_input) == false){
            $('#err_pass').append("Password should have Minimum eight characters, at least one uppercase letter, one lowercase letter, and one number ");
        }else $('#err_pass').empty();



    });


    //confirm password
    $('#confirm_password').keyup(function(){
        var confirm_input = $('#confirm_password').val();
        var password = $('#password').val();
        $('#err_con_pass').empty();
        if(confirm_input != password){
            $('#err_con_pass').append("Password mismatch");
        }

    });

    //Phone number validation 
    $('#contact').keyup(function(){
        var contact_input = $('#contact').val().trim();
        $('#err_contact').empty();
        if(validate_contact(contact_input) == false){
            $('#err_contact').append("Should be a valid number ");
        }else $('#err_contact').empty();
    })


    //email validation 
    $('#email').keyup(function(){
        var email_input = $('#email').val();
        $('#err_email').empty();
        if(validate_email(email_input) == false){
            $('#err_email').append("Should be a valid email ");
        }else $('#err_email').empty();
    })

    $('#form-button').click(function(e){
        var f_name = $('#first_name').val().trim();
        var l_name = $('#last_name').val().trim();
        var school = $('#school').val().trim();
        var contact = $('#contact').val().trim();
        var email = $('#email').val();
        var password = $('#password').val();

        if(validate_input(f_name) == true && validate_input(l_name) == true && validate_input(school) == true && 
        validate_contact(contact) == true && validate_email(email) == true && validate_pwd(password) == true){
            $.ajax({
                url: "../view/signup_process.php",
                method: "POST",
                data:{
                    sign_up:1,
                    first_name: f_name,
                    last_name: l_name,
                    school: school,
                    email: email,
                    contact: contact,
                    password: password
                },
                success: function(data){
                    if(data==="successful") changeForm(e);
                }
            });
        }
    });
});


// to validate input whether its null
function validate_input(input){
    if (input==null || input =="" ) return false;
    else return true;
}


//validate password
function validate_pwd(pwd){
    if(!pwd.match(password_regex))return false;
    else return true;

}



//validate contact
function validate_contact(contact){
    if(!contact.match(phone_regex))return false;
    else return true;

}


//validate email
function validate_email(email){
    if(!email.match(email_regex))return false;
    else return true;

}

