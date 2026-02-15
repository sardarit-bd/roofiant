import './bootstrap';


// back to top button
const btn = document.getElementById('backToTop');
function toggleButton() {
    btn.style.display = window.scrollY > 400 ? 'block' : 'none';
}

toggleButton();
document.addEventListener('DOMContentLoaded', () => {
    if (!btn) return;

    window.addEventListener('scroll', toggleButton);

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
