
var age = prompt('What is your age?','');

function ageCheck(number){
  if(isNaN(number)){
   document.write("Please write a number");
  }
  else if (number<18){
   document.write("You are not old enough");
  }
  else {
   document.write("Welcome");
  }
}
