let highlightFrequency = 1.0;
let midtoneFrequency = 0.5;
let lowlightFrequency = 0.3;
let baseFrequency = 0.005;




function cycleColor(frequency) {
	const time = Date.now() * 0.001;
	const r = Math.sin(frequency * time + 0) * 127 + 128;
	const g = Math.sin(frequency * time + 2) * 127 + 128;
	const b = Math.sin(frequency * time + 4) * 127 + 128;
	return (r << 16) + (g << 8) + b;
}





// Fullscreen toggle functionality
const fullscreenToggle = document.getElementById('fullscreen-toggle');

fullscreenToggle.addEventListener('click', () => {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen().catch((err) => {
      console.log(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
    });
  } else {
    document.exitFullscreen();
  }
});

document.addEventListener('fullscreenchange', () => {
  if (document.fullscreenElement) {
    fullscreenToggle.textContent = 'Exit Fullscreen';
  } else {
    fullscreenToggle.textContent = 'Toggle Fullscreen';
  }
});