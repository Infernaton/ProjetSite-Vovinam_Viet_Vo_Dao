var section = document.querySelectorAll(".section-fade");

function fadeOutOnScroll(element) {
    section.forEach(element => {
	if (!element) {
		return;
	}
        
        var distanceToTop = window.pageYOffset + element.getBoundingClientRect().top;
        var elementHeight = element.offsetHeight;
        var scrollTop = document.documentElement.scrollTop;
        
        var opacity = 1;
        
        if (scrollTop > distanceToTop) {
            opacity = 1 - (scrollTop - distanceToTop) / elementHeight;
        }
        
        if (opacity >= 0) {
            element.style.opacity = opacity;
        }
    });
}

function scrollHandler() {
	fadeOutOnScroll(section);
}

window.addEventListener('scroll', scrollHandler);