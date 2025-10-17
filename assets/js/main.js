document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const currentPage = body.dataset.page || '';
    document.querySelectorAll('[data-page-link]').forEach((link) => {
        if (link.dataset.pageLink === currentPage) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });

    const yearTarget = document.querySelector('[data-current-year]');
    if (yearTarget) {
        yearTarget.textContent = new Date().getFullYear().toString();
    }
});
