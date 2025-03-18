// function for current date and time
function updateDateTime() {
    const now = new Date(); // current date and time fetch garxa

    // Format current date
    const currentDate = now.toLocaleDateString('en-US', {
        weekday: 'long', // Full weekday name
        year: 'numeric', // Full year
        month: 'long', // Full month name
        day: 'numeric', // Day of the month
    });

    // Format current time 
    let currentTime = now.toLocaleTimeString('en-US', { hour12: true });

    // Update the HTML with current date and time
    document.getElementById("current-date").innerText = `Today: ${currentDate}`;
    document.getElementById("current-time").innerText = `Time: ${currentTime}`;
}

 
setInterval(updateDateTime, 1000);


updateDateTime();
