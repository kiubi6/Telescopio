function calcula_periodo() {
    const G = 6.67 * Math.pow(10, -11);
    const M = 5.97 * Math.pow(10, 24);
    const r = (6378 + 593) * 1000; // en metros
    const periodo = 2 * Math.PI * Math.sqrt(Math.pow(r, 3) / (G * M));
    document.getElementById('resultadoA').innerText = 'El periodo orbital del telescopio Hubble es ' + periodo + ' segundos.';
}
