var validationResult = false;

function validateUserInfo() {

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let passwordAgain = document.getElementById("passwordAgain").value;
    const errorElement = document.getElementById("errorMessage");
    let errorMessage;

    
        if (username.length < 3) {

        errorMessage = "Username must not be less than 3 characters";
        validationResult = false;

        } else if (username.search(/\s/g) >= 0) {

        errorMessage = "Username must not contain any whitespaces";
        validationResult = false;

        } else if (password.length < 8) { 

        errorMessage = "Password must be at least 8 characters"; 
        validationResult = false;
        
        } else if (password.search(/[a-z]/) < 0) { 
        
        errorMessage = "Password must contain at least one lowercase letter"; 
        validationResult = false;
        
        } else if (password.search(/[A-Z]/) < 0) { 
        
        errorMessage = "Password must contain at least one uppercase letter"; 
        validationResult = false;
        
        } else if (password.search(/[0-9]/) < 0) { 
        
        errorMessage = "Password must contain at least one number"; 
        validationResult = false;
        
        } else if (password.search(/\s/g) >= 0) {

        errorMessage = "Password can not contain whitespaces";
        validationResult = false;
        
        } else if (password !== passwordAgain) { 
        
        errorMessage = "Password must be the same in both fields"; 
        validationResult = false;
        
        } else {

            errorMessage = "Your username and passwords are valid";
            validationResult = true;
            
        }

    errorElement.innerHTML = errorMessage;
    
    console.log(validationResult);

    if (validationResult === true) {
        errorElement.classList.replace("false", "true");
    }
    if (validationResult === false) {
        errorElement.classList.replace("true", "false");
    }
    
}

function getValidation() {
    return validationResult;
}
