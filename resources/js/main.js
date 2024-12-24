class AppUtils {
    constructor() {
        this.initOnDOMContentLoaded();
    }

    initOnDOMContentLoaded() {
        document.addEventListener('DOMContentLoaded', () => {
            this.initBackToTop();
            this.initFooterAnimations();
            this.initOffcanvasMenu();
            this.initHeroHeader();
            this.initContentSections();
            this.initFilmList();
            this.initSerieTV();
        });
    }

    // Back to Top Button
    initBackToTop() {
        const backToTop = document.querySelector('.back-to-top');
        if (!backToTop) return;

        const updateBackToTop = () => {
            const scrollPos = window.scrollY;
            if (scrollPos > 400) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        };

        window.addEventListener('scroll', () => {
            requestAnimationFrame(updateBackToTop);
        });

        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Footer position adjustment
        const footer = document.querySelector('footer');
        if (footer) {
            const footerObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    backToTop.style.bottom = entry.isIntersecting
                    ? `${footer.offsetHeight + 20}px`
                    : '30px';
                });
            });
            footerObserver.observe(footer);
        }
    }

    // Footer Animations
    initFooterAnimations() {
        const footer = document.querySelector('.footer-main');
        if (!footer) return;

        const elements = {
            columns: footer.querySelectorAll('.footer-column'),
            titles: footer.querySelectorAll('.footer-title'),
            texts: footer.querySelectorAll('.footer-text'),
            links: footer.querySelectorAll('.footer-link'),
            form: footer.querySelector('.footer-form')
        };

        const footerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    elements.columns.forEach((col, i) =>
                        setTimeout(() => col.classList.add('show'), i * 100));
                    elements.titles.forEach((title, i) =>
                        setTimeout(() => title.classList.add('show'), 200 + i * 100));
                    elements.texts.forEach((text, i) =>
                        setTimeout(() => text.classList.add('show'), 300 + i * 100));
                    if (elements.form) {
                        setTimeout(() => elements.form.classList.add('show'), 400);
                    }
                    footerObserver.unobserve(footer);
                }
            });
        }, { threshold: 0.2 });

        footerObserver.observe(footer);
    }

    // Offcanvas Menu
    initOffcanvasMenu() {
        const menuOffcanvas = document.getElementById('menuOffcanvas');
        if (!menuOffcanvas) return;

        const menuLinks = menuOffcanvas.querySelectorAll('.menu-link');
        const closeButton = menuOffcanvas.querySelector('.btn-close-white');
        const menuButton = document.querySelector('.menu-button');

        // Hover effects
        menuLinks.forEach(link => {
            link.addEventListener('mouseenter', () => link.classList.add('hover-active'));
            link.addEventListener('mouseleave', () => link.classList.remove('hover-active'));
        });

        // Animation on open/close
        menuOffcanvas.addEventListener('show.bs.offcanvas', () => {
            closeButton?.classList.add('show');
            menuLinks.forEach((link, i) => {
                setTimeout(() => {
                    link.classList.add('fade-in');
                    link.classList.remove('fade-out');
                }, 100 * (i + 1));
            });
        });

        menuOffcanvas.addEventListener('hide.bs.offcanvas', () => {
            closeButton?.classList.remove('show');
            menuLinks.forEach((link, i) => {
                setTimeout(() => {
                    link.classList.remove('fade-in');
                    link.classList.add('fade-out');
                }, 50 * (i + 1));
            });
        });

        menuOffcanvas.addEventListener('hidden.bs.offcanvas', () => {
            menuLinks.forEach(link => {
                link.classList.remove('fade-in', 'fade-out');
            });
        });
    }

    // Hero Header Animations
    initHeroHeader() {
        const hero = document.querySelector('.hero-header');
        if (!hero) return;

        setTimeout(() => hero.classList.add('show'), 100);
    }

    // Content Sections Animations
    initContentSections() {
        const options = { threshold: 0.2 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        document.querySelectorAll('.content-row, .content-image, .display-5, .category-text, .content-row a')
        .forEach(el => observer.observe(el));
    }

    // Film List Animations
    initFilmList() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        // Header animation
        const header = document.querySelector('.header-filmIndex');
        if (header) observer.observe(header);

        // Card animations
        document.querySelectorAll('.card-filmIndex').forEach(card => {
            observer.observe(card);

            // Hover animations for overlay
            const overlay = card.querySelector('.overlay-filmIndex');
            const info = card.querySelector('.info-filmIndex');
            const image = card.querySelector('.image-filmIndex');

            if (window.innerWidth > 820) { // Solo per desktop
                card.addEventListener('mouseenter', () => {
                    overlay.style.opacity = '1';
                    overlay.style.transform = 'translateY(0)';
                    info.style.transform = 'translateY(0)';
                    image.style.transform = 'scale(1.05)';
                });

                card.addEventListener('mouseleave', () => {
                    overlay.style.opacity = '0';
                    overlay.style.transform = 'translateY(10px)';
                    info.style.transform = 'translateY(20px)';
                    image.style.transform = 'scale(1)';
                });
            }
        });
    }

    // Serie TV Animations and Filtering
    // Modifica alla classe AppUtils - metodo initSerieTV
    initSerieTV() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        // Header animation
        const header = document.querySelector('.header-serieTV');
        if (header) observer.observe(header);

        // Card animations
        document.querySelectorAll('.card-serieTV').forEach(card => {
            observer.observe(card);

            const overlay = card.querySelector('.overlay-serieTV');
            const info = card.querySelector('.info-serieTV');
            const image = card.querySelector('.image-serieTV');

            if (window.innerWidth > 430) {
                card.addEventListener('mouseenter', () => {
                    overlay.style.opacity = '1';
                    info.style.opacity = '1';
                    info.style.transform = 'translateY(0)';
                    image.style.transform = 'scale(1.02)';
                });

                card.addEventListener('mouseleave', () => {
                    overlay.style.opacity = '0';
                    info.style.opacity = '0';
                    info.style.transform = 'translateY(20px)';
                    image.style.transform = 'scale(1)';
                });
            }
        });

        // Gestione dropdown dei filtri
        const dropdowns = document.querySelectorAll('.filterButton-serieTV');
        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('.dropdown-toggle');
            if (!button) return;

            // Aggiorna lo stile del pulsante quando viene selezionata un'opzione
            const updateButtonStyle = (text) => {
                const span = button.querySelector('span');
                if (span) {
                    span.textContent = text;
                    button.classList.add('active');
                }
            };

            // Gestione click sulle opzioni del dropdown
            const dropdownItems = dropdown.querySelectorAll('.dropdown-item');
            dropdownItems.forEach(item => {
                item.addEventListener('click', () => {
                    const value = item.textContent.trim();
                    updateButtonStyle(value);
                });
            });
        });
    }
}

// Initialize
const appUtils = new AppUtils();