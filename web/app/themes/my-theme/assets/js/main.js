// Mobile nav toggle
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.nav-toggle');
    var navLinks = document.querySelector('.nav-links');

    if (toggle && navLinks) {
        toggle.addEventListener('click', function () {
            navLinks.classList.toggle('active');
        });
    }

    // Infinite Carousel — supports multiple on one page
    var carousels = document.querySelectorAll('.carousel');

    carousels.forEach(function (carousel) {
        var track = carousel.querySelector('.carousel__track');
        var dotsContainer = carousel.querySelector('.carousel__dots');
        if (!track || !dotsContainer) return;

        var originalSlides = Array.prototype.slice.call(track.querySelectorAll('.carousel__slide'));
        var totalOriginal = originalSlides.length;
        var isGallery = carousel.classList.contains('carousel--gallery');
        var currentIndex = 0;
        var isTransitioning = false;

        function getSlidesPerView() {
            if (window.innerWidth <= 480) return 1;
            if (window.innerWidth <= 768) return isGallery ? 2 : 3;
            return isGallery ? 3 : 4;
        }

        var slidesPerView = getSlidesPerView();

        // Clone enough slides at front and back for seamless looping
        function setupClones() {
            // Remove old clones
            var oldClones = track.querySelectorAll('.carousel__slide--clone');
            for (var i = 0; i < oldClones.length; i++) {
                track.removeChild(oldClones[i]);
            }

            // Clone last N slides to prepend, first N slides to append
            for (var i = 0; i < slidesPerView; i++) {
                var frontClone = originalSlides[i].cloneNode(true);
                frontClone.classList.add('carousel__slide--clone');
                track.appendChild(frontClone);

                var backClone = originalSlides[totalOriginal - 1 - i].cloneNode(true);
                backClone.classList.add('carousel__slide--clone');
                track.insertBefore(backClone, track.firstChild);
            }
        }

        function getOffset(index) {
            // Account for prepended clones
            var realIndex = index + slidesPerView;
            return (100 / slidesPerView) * realIndex;
        }

        function jumpTo(index) {
            track.style.transition = 'none';
            track.style.transform = 'translateX(-' + getOffset(index) + '%)';
            // Force reflow
            track.offsetHeight;
        }

        function slideTo(index) {
            if (isTransitioning) return;
            isTransitioning = true;
            currentIndex = index;
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = 'translateX(-' + getOffset(index) + '%)';
        }

        track.addEventListener('transitionend', function () {
            isTransitioning = false;

            // If we've gone past the end, silently jump to start
            if (currentIndex >= totalOriginal) {
                currentIndex = 0;
                jumpTo(currentIndex);
            }
            // If we've gone before the start, silently jump to end
            if (currentIndex < 0) {
                currentIndex = totalOriginal - 1;
                jumpTo(currentIndex);
            }
            updateDots();
        });

        function goNext() {
            slideTo(currentIndex + 1);
            updateDots();
        }

        function goPrev() {
            slideTo(currentIndex - 1);
            updateDots();
        }

        function goTo(index) {
            slideTo(index);
            updateDots();
        }

        // Dots
        function buildDots() {
            dotsContainer.innerHTML = '';
            for (var i = 0; i < totalOriginal; i++) {
                var dot = document.createElement('button');
                dot.className = 'carousel__dot';
                dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                if (i === 0) dot.classList.add('carousel__dot--active');
                dot.addEventListener('click', (function (index) {
                    return function () {
                        goTo(index);
                    };
                })(i));
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            var dotIndex = currentIndex;
            if (dotIndex >= totalOriginal) dotIndex = 0;
            if (dotIndex < 0) dotIndex = totalOriginal - 1;
            var dots = dotsContainer.querySelectorAll('.carousel__dot');
            for (var i = 0; i < dots.length; i++) {
                dots[i].classList.toggle('carousel__dot--active', i === dotIndex);
            }
        }

        // Arrow buttons
        var prevBtn = document.createElement('button');
        prevBtn.className = 'carousel__arrow carousel__arrow--prev';
        prevBtn.setAttribute('aria-label', 'Previous');
        prevBtn.innerHTML = '&#8249;';
        prevBtn.addEventListener('click', goPrev);

        var nextBtn = document.createElement('button');
        nextBtn.className = 'carousel__arrow carousel__arrow--next';
        nextBtn.setAttribute('aria-label', 'Next');
        nextBtn.innerHTML = '&#8250;';
        nextBtn.addEventListener('click', goNext);

        carousel.appendChild(prevBtn);
        carousel.appendChild(nextBtn);

        // Touch swipe
        var startX = 0;
        var moveX = 0;
        var isDragging = false;

        track.addEventListener('touchstart', function (e) {
            startX = e.touches[0].clientX;
            moveX = startX;
            isDragging = true;
        }, { passive: true });

        track.addEventListener('touchmove', function (e) {
            if (!isDragging) return;
            moveX = e.touches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchend', function () {
            if (!isDragging) return;
            isDragging = false;
            var diff = startX - moveX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    goNext();
                } else {
                    goPrev();
                }
            }
        });

        function init() {
            slidesPerView = getSlidesPerView();
            setupClones();
            buildDots();
            jumpTo(0);
            currentIndex = 0;
            isTransitioning = false;
        }

        init();

        var resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(init, 200);
        });
    });
});
