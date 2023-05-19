function validateRegistrationForm() {
    let name = document.getElementById("fname").value;
    let email = document.getElementById("femail").value;
    let username = document.getElementById("fusername").value;
    let dateOfBirth = document.getElementById("fdateofbirth").value;
    let country = document.getElementById("fcountry").value;
    let password = document.getElementById("fpassword").value;
    let confirmPassword = document.getElementById("fconfirmpassword").value;
    if (name.length < 2) {
        document.getElementById("nameError").innerHTML = "*Name too short";
        return false;
    }
    // else if (!name.match(/^[A-Za-z .-]+$/)) {
    //     document.getElementById("nameError").innerHTML = "*Invalid Name";
    //     return false;
    // }
    if (!email.match(/^[a-z0-9.@]+$/)) {
        document.getElementById("emailError").innerHTML = "*Sorry, only letters (a-z), numbers (0-9) and periods (.) are allowed";
        return false;
    }
    if(!username.match(/^[A-Za-z0-9]+$/)) {
        document.getElementById("usernameError").innerHTML = "*Invalid Name";
        return false;
    }
    if(document.getElementById("fmale").checked == false && document.getElementById("ffemale").checked == false) {
        document.getElementById("genderError").innerHTML = "*Select gender";
        return false;
    }
    if(country == "") {
        document.getElementById("countryError").innerHTML = "*Select your country";
        return false;
    }
    if(password.length < 6) {
        document.getElementById("passwordError").innerHTML = "*Password length must be at least 6";
        return false;
    }
    if(password != confirmPassword) {
        document.getElementById("confirmPasswordError").innerHTML = "*Password and confirm password is not same";
        return false;
    }
    else {
        return true;
    }
}
function ajax() {
    let username = document.getElementById("fusername").value;
    let password = document.getElementById("fpassword").value;

    let xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('username='+username);
    
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200) {
			alert(this.responseText);
		}
	}
}