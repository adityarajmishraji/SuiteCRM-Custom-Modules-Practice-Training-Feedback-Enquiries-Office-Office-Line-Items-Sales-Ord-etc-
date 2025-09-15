$(document).ready(function () {
    // Cache DOM elements for performance
    const skillsList = $("#skills-list");
    const educationBody = $("#education-body");
    const loadingMessage = $("#loadingMessage");
    const errorMessage = $("#errorMessage");

    // Array of colors for dynamic text color cycling
    const colors = ["#d37272", "#14328eff", "#911ec6", "#08929e"];
    let currentColorIndex = 0;

    // Function to fetch and render both skills and education from data.json
    function loadJSONData() {
        // Show loading message and clear previous content
        loadingMessage.show();
        errorMessage.hide();
        skillsList.empty();
        educationBody.empty();

        // Single AJAX request to fetch data.json
        $.ajax({
            url: "data.json", // Path to JSON file
            method: "GET",
            dataType: "json"
        })
        .done(function (data) {
            // Success: Populate skills list
            $.each(data.skills, function (index, skill) {
                skillsList.append(`<li class="skill-item">${skill}</li>`);
            });

            // Success: Populate education table
            $.each(data.education, function (index, edu) {
                educationBody.append(`
                    <tr>
                        <td>${edu.degree}</td>
                        <td>${edu.institution}</td>
                        <td>${edu.year}</td>
                    </tr>
                `);
            });
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            // Error: Show user-friendly error message
            errorMessage.text(`Error: Failed to load data (${textStatus}). Please try again.`).show();
        })
        .always(function () {
            // Always hide loading message after request completes
            loadingMessage.hide();
        });
    }

    // Initial data load when page loads
    loadJSONData();

    // Refresh button click event to reload data
    $("#refreshButton").on("click", function () {
        loadJSONData(); // Reload both skills and education
    });

    // About section show/hide functionality
    $("#aboutBtnShow").hide(); // Initially hide the "ToShow" button
    $("#aboutBtnHide").click(function () {
        $("#about").hide(1000); // Hide the about section
        $(this).hide(1000); // Hide the "ToHide" button
        $("#aboutBtnShow").show(900); // Show the "ToShow" button
    });

    $("#aboutBtnShow").click(function () {
        $("#about").show(1000); // Show the about section
        $(this).hide(1000); // Hide the "ToShow" button
        $("#aboutBtnHide").show(); // Show the "ToHide" button
    });

    // Hover effects for skill items
    $(".skill-item").hover(
        function () {
            $(this).animate({ paddingLeft: "30px" }, 150);
            $(this).css("color", "#d37272");
            $(this).css("background-color", "#08929e");
        },
        function () {
            $(this).animate({ paddingLeft: "0" }, 150);
            $(this).css("color", $(this).data("currentColor") || "#000"); // Revert to clicked color or default
            $(this).css("background-color", "transparent");
        }
    );

    // Dynamic text color cycling on click for skill items (supports dynamically loaded elements)
    $(document).on("click", ".skill-item", function () {
        currentColorIndex = (currentColorIndex + 1) % colors.length; // Cycle through colors
        const newColor = colors[currentColorIndex];
        $(this).data("currentColor", newColor); // Store current color
        $(this).css("color", newColor); // Apply new color
    });

    // Smooth scrolling for navbar links
    $("#navbar a").click(function () {
        var target = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(target).offset().top
        }, 1000);
        return false;
    });

    // Hover effects for social links
    $(".social-links").hover(
        function () {
            $(this).fadeTo(100, 1);
        },
        function () {
            $(this).fadeTo(300, 0.5);
        }
    );
});

// Change heading text content
function myFunction() {
    document.getElementById("heading").innerHTML = "Welcome to my Portfolio!";
}

// Change nav links style
function changeNavStyle() {
    var navLinks = document.querySelectorAll("nav a");
    navLinks.forEach(function (link) {
        link.style.color = "#14328eff";
        link.style.fontSize = "18px";
        link.style.backgroundColor = "#dcc4baff";
    });
}

// Validate form with email regex
function formValidation() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var message = document.forms["myForm"]["message"].value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email regex

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

// Thank you message on form submission
function thankYou() {
    alert("Thank you for your message! I will get back to you soon.");
    return true;
}

// Change About section style
function changeStyle() {
    document.getElementById("about").style.backgroundColor = "#111111";
    document.getElementById("about").style.color = "#ffffff";
}