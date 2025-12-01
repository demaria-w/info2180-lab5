document.addEventListener("DOMContentLoaded", function(){
    const lookup = document.getElementById("lookup");

    lookup.addEventListener("click", function(){
        const country = document.getElementById("country").value;
        fetch(`world.php?country=${country}`)
            .then(response => response.text())
            .then(data => {result.innerHTML = data;
            });
});
});
