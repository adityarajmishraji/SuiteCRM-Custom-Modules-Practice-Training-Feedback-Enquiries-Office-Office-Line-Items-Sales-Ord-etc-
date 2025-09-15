// 1. Add jQuery CDN link inside the `<head>` of your HTML file.
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

// 2. Use jQuery to hide or show the About section when a button is clicked.
 $(document).ready(function() {
                $('#aboutBtnShow').hide(); // Initially hide the "ToShow" button
                $('#aboutBtnHide').click(function() {
                    $('#about').hide(1000); // Hide the about section
                    $(this).hide(1000); // Hide the "ToHide" button
                    $('#aboutBtnShow').show(900); // Show the "ToShow" button
                });
                $('#aboutBtnShow').click(function() {
                    $('#about').show(1000); // Show the about section
                    $(this).hide(1000); // Hide the "ToShow" button
                    $('#aboutBtnHide').show(); // Show the "ToHide" button
                });

// 3. Animate the skills list items with jQuery effects on hover.
$(".skill-item").hover(
            function () {
               $(this).animate({ paddingLeft: "30px" }, 150);
               $(this).css('color', '#d37272');
               $(this).css('background-color','08929e0')
            },
            function () {
                $(this).animate({ paddingLeft: "0" }, 150);
                $(this).css('color', '#000');
                $(this).css('background-color','transparent');
            }
            );

// 4. Validate the form on submit by checking for empty fields and correct email format.
 function formValidation(){
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
                alert("Form submitted successfully!");
                return true;
            }
// 5. Prevent the form’s default submission behavior if validation fails.
 $("form").on("submit", function(event) {
                if (!formValidation()) {
                    event.preventDefault(); 
                }   
            });
// 6. Use jQuery selectors and event handlers like click and hover for interactivity.
$("#navbar a").click(function() {
                var target = $(this).attr("href");
                $("html, body").animate({
                    scrollTop: $(target).offset().top
                }, 1000);
                return false; // Prevent default anchor click behavior
            });  
// 7. Add fadeIn and fadeOut effects on footer social links using jQuery.
$(".social-links").hover(
                function() {
                    $(this).fadeTo(100, 1); 
                },
                function() {
                    $(this).fadeTo(300, 0.5); 
                }
            );
        });

// 8. Write clean, well-commented jQuery code for clarity.
// use comment to explain each section of the code, like this:


// 9. Debug any jQuery errors by checking the browser console.
//using console checking the errors like 405(method not allowed) or 404 (not found) errors in the console.
//in console via developer tools, you can see the errors and debug them accordingly.
// categories like - Performance, Security, Accessibility, Best Practices, and SEO.

// 10. Save and submit the updated project folder with all changes.
// done


/*
Reference to js file:

// Js
// alert("Welcome to my portfolio!");

// 3. Use DOM to change heading text content via JS.

function myFunction() {
    document.getElementById("heading").innerHTML = "Welcome to my Portfolio!";

}

// 4. Use DOM to change style of nav links dynamically.
function changeNavStyle() {
    // document.querySelector('navbar').style.backgroundColor = '#980707ff'; // Change the background color of the nav
    var navLinks = document.querySelectorAll('nav a'); 
    navLinks.forEach(function(link) {
        link.style.color = '#382b2bff';
        link.style.backgroundColor = '#cb0d0dff';
        });
    }

// 5. Add a button that on click changes background color of About section.
 function changeStyle() {
    document.getElementById('about').style.backgroundColor='#111111'; // Change the background color of the About section

    document.getElementById('about').style.color='#ffffff'; // Change the text color of the About section
    // jquery function to toggle the visibility of the about section
            $(document).ready(function() {
                $('#aboutBtnShow').hide(); // Initially hide the "ToShow" button
                $('#aboutBtnHide').click(function() {
                    $('#about').hide(1000); // Hide the about section
                    $(this).hide(1000); // Hide the "ToHide" button
                    $('#aboutBtnShow').show(900); // Show the "ToShow" button
                });
                $('#aboutBtnShow').click(function() {
                    $('#about').show(1000); // Show the about section
                    $(this).hide(1000); // Hide the "ToShow" button
                    $('#aboutBtnHide').show(); // Show the "ToHide" button
                });
                // 3. Use jQuery to animate the skills list items on hover.
            $(".skill-item").hover(
            function () {
               $(this).animate({ paddingLeft: "30px" }, 150);
               $(this).css('color', '#d37272');
               $(this).css('background-color','08929e0')
            },
            function () {
                $(this).animate({ paddingLeft: "0" }, 150);
                $(this).css('color', '#000');
                $(this).css('background-color','transparent');
            }
            );

            // 4. Validate the form on submit by checking for empty fields and correct email format.
            function formValidation(){
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
                alert("Form submitted successfully!");
                return true;
            }

            // 5. Prevent the form’s default submission behavior if validation fails.

            $("form").on("submit", function(event) {
                if (!formValidation()) {
                    event.preventDefault(); 
                }   
            });

            function thankYou() {
                window.location.href = "a1.html";
                
                alert("Thank you for your message! I will get back to you soon.");
            }

            // 6. Use jQuery selectors and event handlers like click and hover for interactivity.

            $("#navbar a").click(function() {
                var target = $(this).attr("href");
                $("html, body").animate({
                    scrollTop: $(target).offset().top
                }, 1000);
                return false; // Prevent default anchor click behavior
            });  

            // 7. Add fadeIn and fadeOut effects on footer social links using jQuery.
            $(".social-links").hover(
                function() {
                    $(this).fadeTo(100, 1); // Fade in on hover
                },
                function() {
                    $(this).fadeTo(300, 0.5); // Fade out when not hovered
                }
            );
        });
    }

console.log(document.getElementById("name")); 


*/