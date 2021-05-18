var name_input = document.getElementById("form_name");

name_input.addEventListener('input', () => {
  name_input.setCustomValidity('');
  name_input.checkValidity();
});

name_input.addEventListener('invalid', () => {
  if(name_input.value === '') {
    name_input.setCustomValidity('Enter name!');
    { alert("You havent entered  name");  }
    
  } else {
    name_input.setCustomValidity("Please input alphabet characters only:/^[A-Za-z]+$/");
    
  
}
});