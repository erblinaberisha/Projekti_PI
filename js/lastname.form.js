var lastname_input = document.getElementById("form_lastname");

lastname_input.addEventListener('input', () => {
    lastname_input.setCustomValidity('');
    lastname_input.checkValidity();
});

lastname_input.addEventListener('invalid', () => {
  if(lastname_input.value === '') {
    lastname_input.setCustomValidity('Enter lastname!');
    { alert("You havent entered  lastname");  }
    
  } else {
    lastname_input.setCustomValidity("Please input alphabet characters only:/^[A-Za-z]+$/");
    
  
}
});