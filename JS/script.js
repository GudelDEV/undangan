export async function showPartikel() {
  await confetti();
  console.log('Confetti has been thrown');
  confetti('landingPage', {
    /**
     * @deprecated use count property instead
     */
    particleCount: 30,
    /**
     * @deprecated use position property instead
     */
    origin: {
      x: 0.5,
      y: 0.5,
    },
    //------------------------------------------
    angle: 90,
    count: 50,
    position: {
      x: 50,
      y: 50,
    },
    spread: 45,
    startVelocity: 45,
    decay: 0.9,
    gravity: 1,
    drift: 0,
    ticks: 200,
    colors: ['#ffffff', '#ff0000'],
    shapes: ['square', 'circle'],
    scalar: 1,
    zIndex: 100,
    disableForReducedMotion: true,
  });
}
