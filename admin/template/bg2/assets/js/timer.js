var time=document.getElementById('mwb_hidden_field').value;
console.log("this is time"+time);
var countDownDate = new Date(time).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
   
  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("mwb-clockdiv").innerHTML ='<div id="mwb-clockdiv"><div class="mwb_coming_soon_circle"><div class="mwb_timing_content"><span id="mwb-days" class="mwb-days">'+days+'</span><div class="mwb-smalltext">Days</div></div></div><div class="mwb_coming_soon_circle"><div  class="mwb_timing_content"><span  id="mwb-hours" class="mwb-hours">'+hours+'</span><div class="mwb-smalltext">Hours</div></div></div><div class="mwb_coming_soon_circle"><div class="mwb_timing_content"><span id="mwb-minutes" class="mwb-minutes">'+minutes+'</span><div class="mwb-smalltext">Minutes</div></div></div><div class="mwb_coming_soon_circle"><div class="mwb_timing_content"><span id="mwb-seconds" class="mwb-seconds">'+seconds+'</span><div class="mwb-smalltext">Seconds</div></div></div>';

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);

    document.getElementById("mwb-days").innerHTML = '0';
  document.getElementById("mwb-hours").innerHTML =  '0';
  document.getElementById("mwb-minutes").innerHTML = '0';
  document.getElementById("mwb-seconds").innerHTML = '0';

  }
}, 0); 

