var time_input = document.getElementById("form_time");

time_input.addEventListener('input', () => {
  time_input.setCustomValidity('');
  time_input.checkValidity();
});


time_input.addEventListener('invalid', () => {
  if(time_input.value === '') {
    time_input.setCustomValidity('select time!');
    { alert("You havent selected  time");  }
    
  } 
    
  

});