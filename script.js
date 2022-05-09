
/* light mode */

/*
document.querySelector('#lightmode').addEventListener('change', function(event){
    document.querySelector('body').classList.toggle('light');
  });

*/
  document.querySelector('#lightmode').addEventListener( 'change', function() {
    localStorage.setItem('light',this.checked);
    if(this.checked) {
      document.querySelector('body').classList.add('light');
    } else {
      document.querySelector('body').classList.remove('light');
         
    }
});

window.onload = function(a) {


  if(localStorage.getItem('light') === "true") {
    document.querySelector('body').classList.add('light');
  }
};


/* verif formaulaire */ 

document.querySelector("form").addEventListener("submit", (ev) =>
{
  var f = document.forms["form"].elements;
  for (var i = 0; i < f.length; i++) {
    if (f[i].value.length == 0) {
      ev.preventDefault();
      document.getElementById('verif').classList.remove("cache");
      document.getElementById('verif-nom').classList.remove("cache");
      document.getElementById('verif-prenom').classList.remove("cache");
      document.getElementById('verif-email').classList.remove("cache");
      document.getElementById('verif-message').classList.remove("cache");
      document.getElementById('verif-checckbox').classList.remove("cache");
      console.log("invalid");
    } 
    if (f[i].value.length >= 1) {
      document.getElementById('verif2').classList.remove("cache");
      console.log("valid");
    } 
    else {

    }
  }
  
});
