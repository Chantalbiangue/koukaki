jQuery(document).ready(function($){

/*MENU BURGER*/
  // Icone menu burger

  const icone_menuBurger = document.querySelector(".icone_menu-burger");
  const trait1 = document.querySelector(".trait1");
  const trait2 = document.querySelector(".trait2");
  const trait3 = document.querySelector(".trait3");

  icone_menuBurger.addEventListener("click", function () {
    icone_menuBurger.classList.toggle("crossed");
    if (icone_menuBurger.classList.contains("crossed")) {
      trait1.style.transform = "rotate(45deg) translate(5px, 5px)";
      trait2.style.opacity = "0";
      trait3.style.transform = "rotate(-45deg) translate(5px, -5px)";
    } else {
      trait1.style.transform = "none";
      trait2.style.opacity = "1";
      trait3.style.transform = "none";
    }
  });

  // ouverture-fermeture menu-burger


  document.querySelector(".menu-burger").addEventListener("click", openclosemenu);
  document.querySelectorAll(".menulink").forEach((link)=>{
    link.addEventListener("click", openclosemenu);
  })
  function openclosemenu(){
    const menuOuvert = document.querySelector(".menu_ouvert");
    if (menuOuvert.style.display === "flex") {
      menuOuvert.style.opacity = "0"; // Réinitialiser l'opacité à 0
      setTimeout(() => {
        menuOuvert.style.display = "none"; // Masquer le menu_ouvert après le fade-out
      }, 300); // Délai pour la transition de fade-out
    } else {
      menuOuvert.style.display = "flex"; // Afficher le menu_ouvert
      setTimeout(() => {
        menuOuvert.style.opacity = "1"; // Ajouter l'opacité à 1 pour le fade-in
      }, 10); // Délai pour déclencher la transition
    }
  }

  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
        delay: 2500,
    },
    spacebetween: 60,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

   // SCROLL NUAGES

  // Animation au scroll
  // Fonction pour animer les nuages lors du défilement de la page
  function animateCloudsOnScroll() {
    const cloud = document.querySelector(".cloud");
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;
    // clouds.forEach((cloud) => {
    const cloudPosition = cloud.getBoundingClientRect().top + window.scrollY;

    // Vérifie si le nuage est visible à l'écran
    if (
      cloudPosition < scrollPosition + windowHeight &&
      cloudPosition + cloud.clientHeight > scrollPosition
    ) {
      // Nuage visible à l'écran
      if (scrollPosition > cloudPosition) {
        // Défilement vers la gauche : appliquer animation reverse
        cloud.classList.add("cloud-animation-reverse");
        cloud.classList.remove("cloud-animation");
      } else {
        // Défilement vers la droite : appliquer animation normale
        cloud.classList.add("cloud-animation");
        cloud.classList.remove("cloud-animation-reverse");
      }
    } else {
      // Nuage non visible à l'écran : retirer les animations
      cloud.classList.remove("cloud-animation");
      cloud.classList.remove("cloud-animation-reverse");
    }
    // });
  }

  // Écouter l'événement de défilement de la fenêtre pour animer les nuages
  window.addEventListener("scroll", animateCloudsOnScroll);

  // Animer les nuages lors du chargement initial de la page
  animateCloudsOnScroll();

  const $paragraph =  $(".animatetitle");

  $(window).scroll(function () {
      $paragraph.each(function () {
          const paragraphMiddle = $(this).offset().top + (0.5 *$(this).height());
          const windowBottom = $(window).scrollTop() + $(window).height();
          
          if (paragraphMiddle < windowBottom) {
            $(this).addClass("slideIn");
          }
      });
  });
  
  /* On Load: Trigger Scroll Once*/
  $(window).scroll();

  // animation fade-in des sections

});
document.addEventListener('DOMContentLoaded', function () {
  const sections = document.querySelectorAll('.appear');

  const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
          if (entry.isIntersecting) {
              entry.target.classList.add('fade-in-active');
          }
      });
  }, { threshold: 0.5 });

  sections.forEach(function (section) {
      observer.observe(section);
  });
});