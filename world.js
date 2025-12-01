/*JavaScript file */

document.addEventListener("DOMContentLoaded", function(){
    //variables from HTML
    const lookup = document.getElementById("lookup");
    const lookupcities = document.getElementById("lookup-cities");
    const result = document.getElementById("result");

    //country lookup logic
    lookup.addEventListener("click", function(){
        const country = document.getElementById("country").value;
        fetch(`world.php?country=${country}`)
            .then(response => response.text())
            .then(data => {result.innerHTML = data;
            });
    });

    //city lookup logic
    lookupcities.addEventListener("click", function(){
        const country = document.getElementById("country").value;
        fetch(`world.php?country=${country}&lookup=cities`)
            .then(response => response.text())
            .then(data => {result.innerHTML = data;
            });
    });
});
