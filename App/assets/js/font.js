AOS.init();

document.getElementById('connectButton').addEventListener('click', () => {
    confetti({
        particleCount:100,
        spread:80,
        origin: { y:0.6}
    });
    setTimeout(() => {
        window.location.href = "auth.php";
    }, 1500);
});