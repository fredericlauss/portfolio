
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
  var x = true;


function checkCheckbox (element, id) {
  if (element.checked == false) {
    document.getElementById(id).classList.remove("cache");
    x = false;
  }
  else {
    document.getElementById(id).classList.add("cache");
  }
}

function checkErreur(element, id) {
  if (element.value == '')
  {
    document.getElementById(id).classList.remove("cache");
    x = false;
  }
  else
  {
    document.getElementById(id).classList.add("cache");
  }

}

document.querySelector("form").addEventListener("submit", (ev) =>
{
    x = true;

    checkErreur(nom, "verif-nom");
    checkErreur(prenom, "verif-prenom");
    checkErreur(mail, "verif-email");
    checkErreur(message, "verif-message");
    checkCheckbox(checkbox, "verif-checckbox");
    
    if (x === false) {
      console.log('faux');
      ev.preventDefault();
      document.getElementById('verif').classList.remove("cache");
      document.getElementById('verif2').classList.add("cache");
    }
    else {
      document.getElementById('verif').classList.add("cache");
      document.getElementById('verif2').classList.remove("cache");
      console.log('vrai');
      ev.preventDefault();
    }
});

/*
ev.preventDefault();
      document.getElementById('verif').classList.remove("cache");
      document.getElementById('verif-nom').classList.remove("cache");
      document.getElementById('verif-prenom').classList.remove("cache");
      document.getElementById('verif-email').classList.remove("cache");
      document.getElementById('verif-message').classList.remove("cache");
      document.getElementById('verif-checckbox').classList.remove("cache");
      console.log("invalid");
*/