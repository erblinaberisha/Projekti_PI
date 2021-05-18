var address_input = document.getElementById("form_address");

address_input.addEventListener('input', () => {
  address_input.setCustomValidity('');
  address_input.checkValidity();
});

address_input.addEventListener('invalid', () => {
  if(address_input.value === '') {
    address_input.setCustomValidity('Enter address!');
    { alert("You havent entered  address");  }
    
  
    
  
}
});