document.getElementById("signup").addEventListener("click", function(event) {
    
    if (!validate_field(document.forms[0]) || !validate_radio(document.forms[0]) || !validate_contact(document.forms[0]['contact']) || !validate_email(document.forms[0]) || !validate_password(document.forms[0]) || !validate_cpw(document.forms[0])) {
    
        event.preventDefault();
        event.stopPropagation();
    }
});