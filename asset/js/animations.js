/*Animation du container à propos de nous*/

document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".about-section  ");
  if (!section) return;
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          section.classList.add("visible");
          observer.unobserve(section);
        }
      });
    },
    { threshold: 0.2 }
  );
  observer.observe(section);

  // Animation pour la section "realisations-section"
  const realisationsSection = document.querySelector(".realisations-section");
  if (realisationsSection) {
    const observerRealisations = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            realisationsSection.classList.add("visible");
            observerRealisations.unobserve(realisationsSection);
          }
        });
      },
      { threshold: 0.2 }
    );
    observerRealisations.observe(realisationsSection);
  }

  const whyChooseSection = document.querySelector(".why-choose-section");
  if (whyChooseSection) {
    const observerWhyChoose = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            whyChooseSection.classList.add("visible");
            oberserverSection.unobserve(observewhyChoose);
          }
        });
      },
      { threshold: 0.2 }
    );
    observerWhyChoose.observe(whyChooseSection);
  }

  /*Animation d'apparition de la section formule*/
  const formulesSection = document.querySelector(".formules-section");
  if (formulesSection) {
    const observerFormules = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            formulesSection.classList.add("visible");
            observerFormules.unobserve(formulesSection);
          }
        });
      },
      { threshold: 0.2 }
    );
    observerFormules.observe(formulesSection);
  }
});

/*Animation dessin dans le container à propos de nous*/
lottie.loadAnimation({
  container: document.getElementById("lottie-computer-aboutUs"),
  renderer: "svg",
  loop: true,
  autoplay: true,
  path: "https://lottie.host/08eb5f50-45c8-43de-b235-5af2173cd158/TUhJ7OHOOC.json", // URL de l’animation Lottie choisie
});

/*animation pour la section pourquoi nous choisir*/
document.addEventListener("DOMContentLoaded", function () {
  if (window.lottie) {
    lottie.loadAnimation({
      container: document.getElementById("why-lottie-1"),
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "https://lottie.host/bf9a3577-8a1b-4689-9555-a4bc1e469cbd/cdtWU7rXN8.json",
    });
    lottie.loadAnimation({
      container: document.getElementById("why-lottie-2"),
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "https://lottie.host/8d8e9d81-4c87-40c6-820f-380d3b488e52/vw7TCaHpni.json",
    });
    lottie.loadAnimation({
      container: document.getElementById("why-lottie-3"),
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "https://lottie.host/3fedd853-b8bc-4231-a181-463e227789a1/PiuotuEi7g.json",
    });
    lottie.loadAnimation({
      container: document.getElementById("why-lottie-4"),
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "https://lottie.host/028b174f-dc2a-467e-bd26-6a69c718d0e6/gpbxaAuiRQ.json",
    });
    /*Animation pour la section formules*/
    if (window.lottie) {
      lottie.loadAnimation({
        container: document.getElementById("formule-lottie-1"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        path: "https://lottie.host/14504404-d3df-4e5e-b077-fdaa32c932ee/sDEw2NzTwT.json", // Animation vitrine
      });
      lottie.loadAnimation({
        container: document.getElementById("formule-lottie-2"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        path: "https://lottie.host/ab259f1f-9572-4464-a834-996ea2a268bf/i8tJo5mxKb.json", // Animation e-commerce
      });
      lottie.loadAnimation({
        container: document.getElementById("formule-lottie-3"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        path: "https://lottie.host/040a2a07-df1c-4859-974b-37c2e90914ab/eAV2lDMDI0.json", // Animation sur-mesure
      });
    }
  }
});

/*Ajout d'une fonctionnalité pour afficher une image sélectionnée en grand */
document.addEventListener('DOMContentLoaded', function () {
  const modalImages = document.querySelectorAll('.modal-image');
  const fullScreenContainer = document.createElement('div');
  fullScreenContainer.style.display = 'none';
  fullScreenContainer.style.position = 'fixed';
  fullScreenContainer.style.top = '0';
  fullScreenContainer.style.left = '0';
  fullScreenContainer.style.width = '100%';
  fullScreenContainer.style.height = '100%';
  fullScreenContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
  fullScreenContainer.style.zIndex = '1050';
  fullScreenContainer.style.justifyContent = 'center';
  fullScreenContainer.style.alignItems = 'center';
  fullScreenContainer.style.cursor = 'zoom-out';

  const fullScreenImage = document.createElement('img');
  fullScreenImage.style.maxWidth = '90%';
  fullScreenImage.style.maxHeight = '90%';
  fullScreenContainer.appendChild(fullScreenImage);

  const prevButton = document.createElement('button');
  prevButton.textContent = '<';
  prevButton.classList.add('modal-prev');
  fullScreenContainer.appendChild(prevButton);

  const nextButton = document.createElement('button');
  nextButton.textContent = '>';
  nextButton.classList.add('modal-next');
  fullScreenContainer.appendChild(nextButton);

  document.body.appendChild(fullScreenContainer);

  let currentIndex = 0;
  let currentImages = [];

  const updateModalImage = () => {
    fullScreenImage.src = currentImages[currentIndex].src;
  };

  modalImages.forEach((image) => {
    image.addEventListener('click', function () {
      const modalBody = this.closest('.modal-body');
      if (!modalBody) return;
      currentImages = Array.from(modalBody.querySelectorAll('.modal-image'));
      currentIndex = currentImages.indexOf(this);
      updateModalImage();
      fullScreenContainer.style.display = 'flex';
    });
  });

  prevButton.addEventListener('click', function (e) {
    e.stopPropagation();
    currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
    updateModalImage();
  });

  nextButton.addEventListener('click', function (e) {
    e.stopPropagation();
    currentIndex = (currentIndex + 1) % currentImages.length;
    updateModalImage();
  });

  fullScreenContainer.addEventListener('click', function (event) {
    if (event.target === fullScreenContainer) {
      this.style.display = 'none';
    }
  });
});

//Fonction permettant de fermer le menu burger en cliant en dehors de celui-ci
document.addEventListener('click', function (event) {
  const menu = document.getElementById('navbarNav');
  const toggler = document.querySelector('.navbar-toggler');

  // Vérifie si le clic est en dehors du menu et du bouton toggler
  if (!menu.contains(event.target) && !toggler.contains(event.target)) {
    menu.classList.remove('show');
  }
});


//Permet d'aller à la section demandée après fermeture du menu burger
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function () {
    const menu = document.getElementById('navbarNav');
    menu.classList.remove('show');
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const carousels = document.querySelectorAll('.real-card-carousel');

  carousels.forEach(carousel => {
    const images = carousel.querySelectorAll('img');
    let currentIndex = 0;

    const prevButton = document.createElement('button');
    prevButton.textContent = '<';
    prevButton.classList.add('carousel-prev');
    carousel.appendChild(prevButton);

    const nextButton = document.createElement('button');
    nextButton.textContent = '>';
    nextButton.classList.add('carousel-next');
    carousel.appendChild(nextButton);

    const updateCarousel = () => {
      images.forEach((img, index) => {
        img.style.display = index === currentIndex ? 'block' : 'none';
      });
    };

    prevButton.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      updateCarousel();
    });

    nextButton.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % images.length;
      updateCarousel();
    });

    updateCarousel();
  });
});