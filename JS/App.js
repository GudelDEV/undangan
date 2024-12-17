import { showPartikel } from './script.js';

// Jika button oppen di klik
const openUndangan = document.getElementById('open-undangan');
if (openUndangan) {
  openUndangan.addEventListener('click', async function () {
    showPartikel();
  });
} else {
  console.error("Element 'open-undangan' tidak ditemukan.");
}
