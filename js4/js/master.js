var age = prompt('What is your age?','');

  if(isNaN(age)){
   document.write("Please write a number")
  }
  else if (age <18){
    document.write("You are not old enough");
  }
  else {
   document.write("Welcome");
  }
