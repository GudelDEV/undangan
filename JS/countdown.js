// Set the target date and time
const targetDate = new Date('December 29, 2024 08:00:00').getTime();

function updateCountdown() {
  const now = new Date().getTime();
  const distance = targetDate - now;

  // Calculate time values
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result
  document.getElementById('days').innerText = days.toString().padStart(2, '0');
  document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
  document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
  document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');

  // Check if the countdown is over
  if (distance < 0) {
    clearInterval(countdownInterval);
    document.querySelector('.countdown').innerHTML = '<h2>Event Started!</h2>';
  }
}

// Update every second
const countdownInterval = setInterval(updateCountdown, 1000);
updateCountdown();
