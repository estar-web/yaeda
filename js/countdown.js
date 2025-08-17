(function() {
  const targetDate = new Date('2025-11-01T00:00:00+09:00').getTime();
  
  function updateCountdown() {
      const now = new Date().getTime();
      const diff = targetDate - now;
      
      if (diff < 0) {
          ['days', 'hours', 'minutes', 'seconds'].forEach(unit => {
              const el = document.getElementById('countdown-' + unit);
              if (el) el.textContent = '00';
          });
          return;
      }
      
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((diff % (1000 * 60)) / 1000);
      
      document.getElementById('countdown-days').textContent = String(days).padStart(2, '0');
      document.getElementById('countdown-hours').textContent = String(hours).padStart(2, '0');
      document.getElementById('countdown-minutes').textContent = String(minutes).padStart(2, '0');
      document.getElementById('countdown-seconds').textContent = String(seconds).padStart(2, '0');
  }
  
  setInterval(updateCountdown, 1000);
})();