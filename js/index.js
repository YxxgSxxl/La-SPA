// burger Menu //
let burgerIcon = document.querySelector("button.header-burgericon"); // burgerIcon to open headerMenu
let exitMenu = document.querySelector("button.header-menuexit"); // Cross to close headerMenu
let headerMenu = document.querySelector("header .header-menu") // headerMenu with all the hyperlinks
let menuTag = document.querySelectorAll("ul li a"); // All headerMenu hyperlinks


// Burger Menu Opening
burgerIcon.addEventListener("click", ()=> {
    headerMenu.classList.toggle('header-open');
    
    setTimeout(() => {
        burgerIcon.classList.add('no-visibility');
      }, "500");
})

// Closing Header Menu
exitMenu.addEventListener("click", ()=> {
    headerMenu.classList.toggle('header-open');
    burgerIcon.classList.remove('no-visibility');
})

// Closing Header Menu When Clicking On A Hyperlink
// HERE

// Detect if Phone goes from portrait to landscape mode
window.matchMedia("(orientation: portrait)").addEventListener("change", e => {
    const portrait = e.matches;

    if (portrait) {
        null;
    } else {
        function phoneLandscapeMode()
        {
            if (window.innerHeight < window.innerWidth) {
                alert("Pour une meilleure expérience, veuillez naviguer sur ce site en mode portrait. (FR)");
            }
            setTimeout(phoneLandscapeMode, 60000); // Every 1 minutes, it will repeat in landscape mode
        }
        setTimeout(phoneLandscapeMode, 1000); // Time it takes to make the alert when landscape mode is detected
    }
});

// Slider adopter
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const slides = document.querySelectorAll(".slide");
    const indicatorContainer = document.getElementById("indicatorContainer");

    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${100 * (i - index)}%)`;
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
        updateIndicators();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
        updateIndicators();
    }

    function createIndicators() {
        slides.forEach((_, i) => {
            const indicator = document.createElement("span");
            indicator.className = "indicator";
            indicator.onclick = () => goToSlide(i);
            indicatorContainer.appendChild(indicator);
        });

        updateIndicators();
    }

    function updateIndicators() {
        document.querySelectorAll('.indicator').forEach((indicator, i) => {
            indicator.classList.remove('active');
            if (i === currentIndex) {
                indicator.classList.add('active');
            }
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        showSlide(currentIndex);
        updateIndicators();
    }

    createIndicators();

    // Button event listeners
    document.querySelector(".carousel-button.next").addEventListener("click", nextSlide);
    document.querySelector(".carousel-button.prev").addEventListener("click", prevSlide);

    document.querySelector(".carousel").addEventListener("mouseenter", () => {
        // Pause on hover
        clearInterval(carouselInterval);
    });

    document.querySelector(".carousel").addEventListener("mouseleave", () => {
        // Resume on mouse leave
        startCarousel();
    });

    document.querySelector(".slider-center").addEventListener("swiperight", nextSlide);
    document.querySelector(".slider-center").addEventListener("swipeleft", prevSlide);

    function startCarousel() {
        // Auto slide every 3 seconds
        carouselInterval = setInterval(nextSlide, 3000);
    }

    startCarousel();
});

// Filtre animaux
function filtre(option) {
    let containers = document.querySelectorAll('div.slide');

            // Masquer tous les éléments
            containers.forEach(function(container) {
                container.style.display = "none";
            });


            if (option == "tout") {
                // Afficher uniquement les éléments correspondant au filtre sélectionné
                containers.forEach(function(container) {
                    container.style.display = "block";
                });
            } else {
                // Afficher uniquement les éléments correspondant au filtre sélectionné
                var filteredContainers= document.querySelectorAll('div.slide.'+option);
                filteredContainers.forEach(function(container) {
                    container.style.display = "block";
                });

            }
}