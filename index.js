
let vh = window.innerHeight * 0.01;

document.documentElement.style.setProperty('--vh', `${vh}px`);


//hamburger menu
function myFunction() {
    var x = document.getElementById("navlink");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

//button
  function contactUs() {
    var emailAddress = "recipient@example.com";
    var subject = "Subject of the email";
    var body = "Body of the email";
    var mailtoLink = "mailto:" + encodeURIComponent(emailAddress) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
    window.location.href = mailtoLink;
    }