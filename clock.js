function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');

    const clockDisplay = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').textContent = clockDisplay;

    setTimeout(updateClock, 1000); // Update the clock every 1 second (1000 milliseconds)
}

// Call the updateClock function to start the clock
updateClock();
