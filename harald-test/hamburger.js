const navSlide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', ()=>{
        //Toggle Nav
        nav.classList.toggle('nav-active')

        //Animasjon av linker
        navLinks.forEach((link, index) => {
            if(link.style.animation){
               link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger-animasjon
        burger.classList.toggle('toggle');

    });

}

navSlide();

// Denne siden er utviklet av Harald Evensen, sist oppdatert av Harald Evensen den 18.10.2020.
//Kontrollert sist av Johs den 07.12.2020.
