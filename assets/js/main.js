document.addEventListener('DOMContentLoaded', () => {
    const yearTarget = document.querySelector('[data-current-year]');
    if (yearTarget) {
        yearTarget.textContent = new Date().getFullYear();
    }

    const { page } = document.body.dataset;
    if (page) {
        document.querySelectorAll('.nav-link[data-page-link]').forEach((link) => {
            if (link.dataset.pageLink === page) {
                link.classList.add('active');
            }
        });
    }

    const navbarCollapse = document.getElementById('primaryNavbar');
    if (navbarCollapse) {
        navbarCollapse.addEventListener('click', (event) => {
            if (event.target.matches('.nav-link') && window.getComputedStyle(navbarCollapse).display !== 'none') {
                const toggler = document.querySelector('.navbar-toggler');
                if (toggler && window.getComputedStyle(toggler).display !== 'none') {
                    toggler.click();
                }
            }
        });
    }
});
