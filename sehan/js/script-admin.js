// ====================================================================
// manageUser
// ==================================================================

function navigateAddUser() {
    window.location.replace('../admin/AddUserInter.php');
}

// --------------delete webmaster------------------

function deleteUser(id) {

    // console.log(id);

    if (confirm("Are you sure you want to delete this user?")) {
        // Send an AJAX request to delete the user
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Handle the response

                if (this.responseText.includes("success")) {
                    // Refresh the page after successful deletion
                    // location.reload();
                    window.location.href = "../admin/manageUserInter.php"; 
                    // alert("Delete sucsessfull.");
                } else {
                    alert("Failed to delete user.");
                }
            }
        };
        xhttp.open("POST", "../admin/delete-webmaster.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("WMID=" + id);
    }

}

// ====================================================================
// manageUser - (Add webmaster)  (Update webmaster)
// ==================================================================

function confirmClearForm() {
    if (confirm("Are you sure you want to clear the form?"))
        clearForm();
}

function clearForm() {
    disableAddWebmasterBtn();
    document.getElementById("addWebmaster-form").reset();
    window.location.href = window.location.href;
}

function resetForm() {
    location.reload();
}

// validate password
function validatePassword() {
    var password = document.getElementById("password").value;
    var passwordError = document.getElementById("passwordError");
    var errorIcon = "&#x26A0;"; // Unicode for the error icon

    passwordError.innerHTML = ""; // Clear any previous error message
    if (!password.length == 0) {

        if (password.length < 5 || password.length > 20) {
            passwordError.innerHTML = errorIcon + "Password must be between 5 and 20 characters.<br><br>";
            return false;
        }

        if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            passwordError.innerHTML = errorIcon + "Password must contain at least one special character.<br><br>";
            return false;
        }

        if (!/[A-Z]/.test(password)) {
            passwordError.innerHTML = errorIcon + "Password must contain at least one uppercase letter.<br><br>";
            return false;
        }

        if (!/[0-9]/.test(password)) {
            passwordError.innerHTML = errorIcon + "Password must contain at least one number.<br><br>";
            return false;
        }

    }

    // Clear the error messsages if all checks pass
    passwordError.innerHTML = "";
    passwordError.title = "";
    return true;
}

// function validatePassword() {
//     var password = document.getElementById("password").value;
//     var passwordError = document.getElementById("passwordError");
//     var errorIcon = "&#x26A0;"; // Unicode for the error icon
  
//     passwordError.innerHTML = ""; // Clear any previous error message
  
//     if (password.length !== 0) {
//       var pattern = /^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[A-Z])(?=.*[0-9]).{5,20}$/;
  
//       if (password.length < 5 || password.length > 20) {
//         passwordError.innerHTML = errorIcon + "Password must be between 5 and 20 characters.<br><br>";
//         return false;
//       }
  
//       if (!pattern.test(password)) {
//         passwordError.innerHTML = errorIcon + "Invalid password format.<br><br>";
//         return false;
//       }
//     }
  
//     // Clear the error messages if all checks pass
//     passwordError.innerHTML = "";
//     passwordError.title = "";
//     return true;
//   }
  

function disableAddWebmasterBtn() {
    document.getElementById("webmasterId").readOnly = true;

    var submitBtn = document.getElementById("submit-btn");
    submitBtn.disabled = true;
    submitBtn.style.backgroundColor = "#999";
    submitBtn.style.color = "black";
}

function enableAddWebmasterBtn() {
    var submitBtn = document.getElementById("submit-btn");
    submitBtn.disabled = false;
    submitBtn.style.backgroundColor = "#4CAF50";
    submitBtn.style.color = "#fff";
}

function validateForm() {
    var webmasterId = document.getElementById("webmasterId").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var contact_no1 = document.getElementById("contact1").value;
    var contact_no2 = document.getElementById("contact2").value;

    // Perform your validation logic here
    if (
        webmasterId === "" ||
        name === "" ||
        email === "" ||
        address === "" ||
        password === "" ||
        confirmPassword === "" ||
        !validatePassword() ||
        !(password === confirmPassword) ||
        !validateContactNumber(contact_no1) ||
        !validateContactNumber(contact_no2)
    ) {
        // If any field is empty, display an error message or perform necessary actions
        //   alert("Please fill in all the required fields.");
        disableAddWebmasterBtn();
        return false;
    }

    // Add any additional validation checks here
    // For example, you can check if the email is in a valid format using regular expressions
    enableAddWebmasterBtn();
    return true; // If all checks pass, the form is considered valid
}


// ====================================================================
// manageUser - update user
// ==================================================================

function showDetails(WMID) {
    // Redirect to the new page passing the WMID parameter
    window.location.href = "updateUserInter.php?WMID=" + WMID;
}

function validateContactNumber(contactNumber) {
    // Remove any whitespace from the contact number
    contactNumber = contactNumber.replace(/\s/g, '');

    // Define the regular expression pattern for the contact number
    var pattern = /^$|^(011|091|078|077|038|075|071|072|076|074|070)\d{7}$/;

    return pattern.test(contactNumber);
}

function navigateManageuser(){
    window.location.href = "../admin/manageUserInter.php"; 
}

