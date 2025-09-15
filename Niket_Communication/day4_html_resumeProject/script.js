// Js
// alert("Welcome to my portfolio!");

// 3. Use DOM to change heading text content via JS.

function myFunction() {
  document.getElementById("heading").innerHTML = "Welcome to my Portfolio!";  // Change the heading text content
}

// 4. Use DOM to change style of nav links dynamically.
function changeNavStyle() {
  // document.querySelector('navbar').style.backgroundColor = '#980707ff'; // Change the background color of the nav
  var navLinks = document.querySelectorAll("nav a"); // Select all nav links
  navLinks.forEach(function (link) {  // Selecting all nav links
    link.style.color = "#14328eff"; // Change the text color of nav links
    link.style.fontSize = "18px"; // Change the font size of nav links
    link.style.backgroundColor = "#dcc4baff";
  });
}

// 4. Validate the form on submit by checking for empty fields and correct email format.
function formValidation() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var message = document.forms["myForm"]["message"].value;
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (name == "" || email == "" || message == "") {
    alert("All fields must be filled out");
    return false;
  }
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address");
    return false;
  }
  return true;
}

function thankYou() {
  alert("Thank you for your message! I will get back to you soon.");
  window.location.href = "thankyou.html";
  return true;
}

// 5. Add a button that on click changes background color of About section.
function changeStyle() {
  document.getElementById("about").style.backgroundColor = "#111111";
  document.getElementById("about").style.color = "#ffffff";
// jQuery initialization
  $(document).ready(function () {
    $("#aboutBtnShow").hide(); // Initially hide the "ToShow" button
    $("#aboutBtnHide").click(function () {
      $("#about").hide(1000);// Hide the about section
      $(this).hide(1000);// Hide the "ToHide" button
      $("#aboutBtnShow").show(900);// Show the "ToShow" button
    });
  
    $("#aboutBtnShow").click(function () {
      $("#about").show(1000); // Show the about section
      $(this).hide(1000);// Hide the "ToShow" button
      $("#aboutBtnHide").show();// Show the "ToHide" button
    });

  $(".skill-item").hover(
    function () {
      $(this).animate({ paddingLeft: "30px" }, 150);
      $(this).css("color", "#d37272");
      $(this).css("background-color", "#08929e");
    },
    function () {
      $(this).animate({ paddingLeft: "0" }, 150);
      $(this).css("color", "#000");
      $(this).css("background-color", "transparent");
    }
  );

  $("#navbar a").click(function () {
    var target = $(this).attr("href");
    $("html, body").animate({
      scrollTop: $(target).offset().top
    }, 1000);
    return false;
  });

  $(".social-links").hover(
    function () {
      $(this).fadeTo(100, 1);
    },
    function () {
      $(this).fadeTo(300, 0.5);
    }
  );
  
});
}

