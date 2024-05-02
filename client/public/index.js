
let vh = window.innerHeight * 0.01;

document.documentElement.style.setProperty('--vh', `${vh}px`);


//hamburger menu
const navEl = document.querySelector(".nav");
const hamburgerEl = document.querySelector(".hamburger");

hamburgerEl.addEventListener("click", () => {
    navEl.classList.toggle("nav--open");
    hamburgerEl.classList.toggle("hamburger--open");
});

navEl.addEventListener("click", () => {
    navEl.classList.remove("nav--open");
});


//button
function contactUs() {
  var emailAddress = "ilodigitalsolution@gmail.com";
  var subject = "Inquiry";
  var body = "";
  var mailtoLink = "mailto:" + encodeURIComponent(emailAddress) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
  window.location.href = mailtoLink;
}

// client/public/index.js

document.addEventListener("DOMContentLoaded", function() {
  var form = document.getElementById("contact-form");

  form.addEventListener("submit", function(event) {
      event.preventDefault();

      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var subject = document.getElementById("subject").value;
      var message = document.getElementById("message").value;

      var formData = {
          name: name,
          email: email,
          subject: subject,
          message: message
      };

      fetch('/send-email', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(formData)
      })
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.text();
      })
      .then(data => {
          console.log('Email sent successfully:', data);
          alert("MESSAGE SENT")
      })
      .catch(error => {
          console.error('Error sending email:', error);
      
      });

      form.reset();
  });
});
