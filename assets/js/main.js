const translations = {
    fr: {
        nav_home: 'Accueil',
        nav_shop: 'Boutique',
        nav_about: 'À propos',
        nav_contact: 'Contact',
        nav_admin: 'Administration',
        theme_toggle_light: 'Mode clair',
        theme_toggle_dark: 'Mode sombre',
        lang_toggle_to_en: 'Passer en anglais',
        lang_toggle_to_fr: 'Passer en français',
        account_link_label: 'Mon compte',
        cta_cart: 'Panier',
    },
    en: {
        nav_home: 'Home',
        nav_shop: 'Shop',
        nav_about: 'About',
        nav_contact: 'Contact',
        nav_admin: 'Admin',
        theme_toggle_light: 'Light mode',
        theme_toggle_dark: 'Dark mode',
        lang_toggle_to_en: 'Switch to English',
        lang_toggle_to_fr: 'Switch to French',
        account_link_label: 'My account',
        cta_cart: 'Cart',
    },
};

const THEME_STORAGE_KEY = 'vision-theme';
const THEME_COOKIE_KEY = 'vision_theme';
const LANG_STORAGE_KEY = 'vision-lang';
const LANG_COOKIE_KEY = 'vision_lang';

const getCookie = (name) => {
    const match = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]+)'));
    return match ? match[1] : null;
};

const setCookie = (name, value) => {
    document.cookie = `${name}=${value};path=/;max-age=31536000;samesite=Lax`;
};

const updateBrandLogo = (theme) => {
    document.querySelectorAll('.brand-logo').forEach((logo) => {
        const darkSrc = logo.getAttribute('data-logo-dark');
        const lightSrc = logo.getAttribute('data-logo-light');

        if (theme === 'light' && lightSrc) {
            logo.setAttribute('src', lightSrc);
        } else if (theme === 'dark' && darkSrc) {
            logo.setAttribute('src', darkSrc);
        }
    });
};

const getCurrentLanguage = () => {
    const lang = document.documentElement.getAttribute('lang');
    return lang === 'en' ? 'en' : 'fr';
};

const updateThemeToggleLabel = (lang = getCurrentLanguage()) => {
    const toggle = document.querySelector('.theme-toggle');
    if (!toggle) return;

    const currentTheme = document.documentElement.getAttribute('data-theme') === 'light' ? 'light' : 'dark';
    const labelKey = currentTheme === 'light' ? 'theme_toggle_dark' : 'theme_toggle_light';
    const label = translations[lang]?.[labelKey] || translations.fr[labelKey];

    const labelElement = toggle.querySelector('.theme-label');
    if (labelElement && label) {
        labelElement.textContent = label;
    }

    toggle.setAttribute('aria-label', label);
    toggle.setAttribute('aria-pressed', currentTheme === 'light' ? 'true' : 'false');
    toggle.dataset.state = currentTheme;
};

const applyTheme = (theme) => {
    const normalized = theme === 'light' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', normalized);
    document.body.setAttribute('data-theme', normalized);

    try {
        window.localStorage.setItem(THEME_STORAGE_KEY, normalized);
    } catch (error) {
        // Ignore storage issues (private mode, etc.).
    }

    setCookie(THEME_COOKIE_KEY, normalized);
    updateBrandLogo(normalized);
    updateThemeToggleLabel();
};

const determinePreferredTheme = () => {
    let theme = document.documentElement.getAttribute('data-theme') === 'light' ? 'light' : 'dark';
    const cookieTheme = getCookie(THEME_COOKIE_KEY);

    try {
        const stored = window.localStorage.getItem(THEME_STORAGE_KEY);
        if (stored) {
            theme = stored === 'light' ? 'light' : 'dark';
        } else if (cookieTheme) {
            theme = cookieTheme === 'light' ? 'light' : 'dark';
        } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
            theme = 'light';
        }
    } catch (error) {
        if (cookieTheme) {
            theme = cookieTheme === 'light' ? 'light' : 'dark';
        }
    }

    return theme;
};

const translateElement = (element, lang) => {
    const key = element.getAttribute('data-i18n');
    if (!key) return;
    const translation = translations[lang]?.[key];
    if (translation) {
        element.textContent = translation;
    }
};

const translatePage = (lang) => {
    document.querySelectorAll('[data-i18n]').forEach((element) => {
        translateElement(element, lang);
    });
};

const updateLangToggleUI = (lang) => {
    const toggle = document.querySelector('.lang-toggle');
    if (!toggle) return;

    const targetLang = lang === 'fr' ? 'en' : 'fr';
    const labelKey = targetLang === 'en' ? 'lang_toggle_to_en' : 'lang_toggle_to_fr';
    const label = translations[lang]?.[labelKey] || translations.fr[labelKey];
    const flag = targetLang === 'en' ? '🇬🇧' : '🇫🇷';

    toggle.dataset.lang = lang;
    toggle.setAttribute('aria-label', label);

    const labelElement = toggle.querySelector('.lang-toggle-label');
    if (labelElement) {
        labelElement.textContent = label;
    }

    const flagElement = toggle.querySelector('.flag');
    if (flagElement) {
        flagElement.textContent = flag;
    }
};

const applyLanguage = (lang) => {
    const normalized = lang === 'en' ? 'en' : 'fr';
    document.documentElement.setAttribute('lang', normalized);
    document.body.setAttribute('data-lang', normalized);

    try {
        window.localStorage.setItem(LANG_STORAGE_KEY, normalized);
    } catch (error) {
        // Ignore storage access issues.
    }

    setCookie(LANG_COOKIE_KEY, normalized);
    translatePage(normalized);
    updateThemeToggleLabel(normalized);
    updateLangToggleUI(normalized);
};

const determinePreferredLanguage = () => {
    let lang = document.documentElement.getAttribute('lang') === 'en' ? 'en' : 'fr';
    const cookieLang = getCookie(LANG_COOKIE_KEY);

    try {
        const stored = window.localStorage.getItem(LANG_STORAGE_KEY);
        if (stored && translations[stored]) {
            lang = stored;
        } else if (cookieLang && translations[cookieLang]) {
            lang = cookieLang;
        }
    } catch (error) {
        if (cookieLang && translations[cookieLang]) {
            lang = cookieLang;
        }
    }

    return lang;
};

const initThemeToggle = () => {
    const toggle = document.querySelector('.theme-toggle');
    if (!toggle) return;

    const preferred = determinePreferredTheme();
    applyTheme(preferred);

    toggle.addEventListener('click', () => {
        const current = document.documentElement.getAttribute('data-theme') === 'light' ? 'light' : 'dark';
        const next = current === 'light' ? 'dark' : 'light';
        applyTheme(next);
    });
};

const initLangToggle = () => {
    const toggle = document.querySelector('.lang-toggle');
    if (!toggle) return;

    toggle.addEventListener('click', () => {
        const current = document.documentElement.getAttribute('lang') === 'en' ? 'en' : 'fr';
        const next = current === 'fr' ? 'en' : 'fr';
        applyLanguage(next);
    });
};

const initNavigationHighlight = () => {
    const currentPage = document.body.dataset.page || '';
    document.querySelectorAll('[data-page-link]').forEach((link) => {
        if (link.dataset.pageLink === currentPage) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        } else {
            link.classList.remove('active');
            link.removeAttribute('aria-current');
        }
    });
};

const initNavToggle = () => {
    const nav = document.querySelector('.main-nav');
    if (!nav) return;
    const toggle = nav.querySelector('.nav-toggle');
    const list = nav.querySelector('.nav-list');
    if (!toggle || !list) return;

    const closeNav = () => {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
    };

    toggle.addEventListener('click', () => {
        const expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
        nav.classList.toggle('is-open', !expanded);
    });

    list.addEventListener('click', (event) => {
        if (event.target.closest('a')) {
            closeNav();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeNav();
        }
    });
};

const initCurrentYear = () => {
    const yearTarget = document.querySelector('[data-current-year]');
    if (yearTarget) {
        yearTarget.textContent = new Date().getFullYear().toString();
    }
};

document.addEventListener('DOMContentLoaded', () => {
    const preferredLanguage = determinePreferredLanguage();
    applyLanguage(preferredLanguage);

    initThemeToggle();
    initLangToggle();
    initNavigationHighlight();
    initNavToggle();
    initCurrentYear();
});
