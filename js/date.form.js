var date_input = document.getElementById("form_date");

date_input.addEventListener('input', () => {
  date_input.setCustomValidity('');
  date_input.checkValidity();
});
date_input.addEventListener('invalid', () => {
  if(date_input.value === '') {
    date_input.setCustomValidity('select date!');
    { alert("You havent selected  date");  }
    
  } 
});