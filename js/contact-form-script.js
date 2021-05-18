$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    }
    
     else {
        // everything looks good!
        event.preventDefault();
        submitForm();
        submitMSG(true, "Message Submitted!");
    }
});
$("#reservationForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    }
    
     else {
        // everything looks good!
        event.preventDefault();
        submitForm();
        submitMSG(true, "Your table is reserved!");
    }
});
$("#onlineForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    }
    
     else {
        // everything looks good!
        event.preventDefault();
        submitForm();
        submitMSG(true, "Your order was send!");
    }
});
function submitForm(){
    // Initiate Variables With Form Content
   $("#name").val();
   $("#email").val();
   $("#msg_subject").val();
   $("#message").val();
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!");
}

function formError(){
    $("#contactForm").removeClass().addClass(), function(){
        $(this).removeClass();
    };
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}




