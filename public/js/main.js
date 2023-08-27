document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        toggleCurrent();
    });
    function toggleCurrent() {
        const navigationLinks = document.querySelectorAll(".glass-menu a");
        const sections = document.querySelectorAll("section");
        let currentSection = null;

        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 100 && rect.bottom >= 100) {
                currentSection = section.id;
            }
        });


        navigationLinks.forEach(item => {
            item.classList.toggle('current', item.getAttribute('href') === `#${currentSection}`);
        });
    }
});
