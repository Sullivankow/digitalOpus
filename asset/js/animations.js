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



/*Animation pour les images en plein écran dans la modal*/
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

  const carouselContainer = document.createElement('div');
  carouselContainer.style.display = 'flex';
  carouselContainer.style.alignItems = 'center';
  carouselContainer.style.justifyContent = 'space-between';
  carouselContainer.style.width = '80%';

  const prevButton = document.createElement('button');
  prevButton.textContent = '<';
  prevButton.style.fontSize = '2rem';
  prevButton.style.color = '#fff';
  prevButton.style.background = 'none';
  prevButton.style.border = 'none';
  prevButton.style.cursor = 'pointer';

  const nextButton = document.createElement('button');
  nextButton.textContent = '>';
  nextButton.style.fontSize = '2rem';
  nextButton.style.color = '#fff';
  nextButton.style.background = 'none';
  nextButton.style.border = 'none';
  nextButton.style.cursor = 'pointer';

  const fullScreenImage = document.createElement('img');
  fullScreenImage.style.maxWidth = '90%';
  fullScreenImage.style.maxHeight = '90%';

  carouselContainer.appendChild(prevButton);
  carouselContainer.appendChild(fullScreenImage);
  carouselContainer.appendChild(nextButton);
  fullScreenContainer.appendChild(carouselContainer);

  const closeButton = document.createElement('button');
  closeButton.textContent = '×';
  closeButton.style.position = 'absolute';
  closeButton.style.top = '10px';
  closeButton.style.right = '10px';
  closeButton.style.fontSize = '2rem';
  closeButton.style.color = '#fff';
  closeButton.style.background = 'none';
  closeButton.style.border = 'none';
  closeButton.style.cursor = 'pointer';
  fullScreenContainer.appendChild(closeButton);

  document.body.appendChild(fullScreenContainer);

  let currentIndex = 0;
  const updateImage = (images) => {
    fullScreenImage.src = images[currentIndex];
  };


  /*Ajout des évènements au clic sur les images de la modal pour effet carousel en plein écran*/
  modalImages.forEach(image => {
    image.addEventListener('click', function () {
      const cardImages = Array.from(this.closest('.modal').querySelectorAll('.modal-image')).map(img => img.src);
      currentIndex = cardImages.indexOf(this.src);
      updateImage(cardImages);
      fullScreenContainer.style.display = 'flex';

      prevButton.onclick = function () {
        currentIndex = (currentIndex - 1 + cardImages.length) % cardImages.length;
        updateImage(cardImages);
      };

      nextButton.onclick = function () {
        currentIndex = (currentIndex + 1) % cardImages.length;
        updateImage(cardImages);
      };
    });
  });

  closeButton.addEventListener('click', function () {
    fullScreenContainer.style.display = 'none';
  });

  fullScreenContainer.addEventListener('click', function (e) {
    if (e.target === fullScreenContainer) {
      fullScreenContainer.style.display = 'none';
    }
  });
});


