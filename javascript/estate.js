 const slides = document.getElementById('slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    let index = 0;

    document.getElementById('next').addEventListener('click', nextSlide);
    document.getElementById('prev').addEventListener('click', prevSlide);

    function showSlide()
 {
      slides.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
      index = (index + 1) % totalSlides;
      showSlide();
    }

    function prevSlide() {
      index = (index - 1 + totalSlides) % totalSlides;
      showSlide();
    }

    
    setInterval(nextSlide, 3000);

