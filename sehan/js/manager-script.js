
var DBbtns = []; 





function getDashbordBtnToArray(){
    DBbtns[0] = document.getElementById("dBordBtn1");
};


window.onload = function() {
    var currentTime = new Date();
    var currentHour = currentTime.getHours();
    var greeting;
  
    if (currentHour >= 5 && currentHour < 12) {
      greeting = 'Good morning Manager!';
    } else if (currentHour >= 12 && currentHour < 18) {
      greeting = 'Good afternoon Manager!';
    } else {
      greeting = 'Good evening Manager!';
    }
  
    var greetingElement = document.getElementById('greeting');
    greetingElement.textContent = greeting;
  };

// JavaScript function to handle button click events and redirect to the specified URL

