
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
  console.log(localStorage.getItem('light'))


  if(localStorage.getItem('light') === "true") {
    document.querySelector('body').classList.add('light');
  }
};


