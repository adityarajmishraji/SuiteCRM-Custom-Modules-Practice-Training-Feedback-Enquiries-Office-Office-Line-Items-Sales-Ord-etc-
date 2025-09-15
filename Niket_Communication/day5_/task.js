// 1. Create a `data.json` file containing JSON data like skills and education.
// After file creating ,
// insert the data in json file -
// {
//     "skills": [
//         "HTML",
//         "CSS",
//         "JavaScript",
//         "React",
//         "Node.js"
//     ],
//     "education": [
//         {
//             "degree": "Bachelor of Technology in Computer Science",
//             "institution": "Rofel Grims",
//             "year": 2020
//         },
//         {
//             "degree": "Master of Computer Applications",
//             "institution": "Sardar Patel University",
//             "year": 2023
//         }
//     ]
// }
// 2. Use jQuery’s `$.ajax` method to fetch JSON data and display it dynamically on the page.

$.ajax({
    url: "data.json",
    dataType: "json",
    success: function(data) {
        var skillsList = $("#skills-list");
        data.skills.forEach(function(skill) {
            skillsList.append("<li class='skill-item'>" + skill + "</li>");
        });
    }
}).fail(function() {
    console.error("Error fetching data from JSON file.");
});

// 3. Replace the static skills list with data loaded from the JSON file.



// 4. Replace the education table content dynamically using the fetched JSON data.


// 5. Show a loading message while the AJAX request is in progress.


// 6. Handle AJAX errors gracefully by displaying user-friendly error messages.


// 7. Add a button that refreshes the JSON data on demand when clicked.


// 8. Use proper callbacks and promise handling to manage asynchronous AJAX calls.


// 9. Write clear comments explaining all AJAX-related code.


// 10. Save and submit the full project folder with all updates.