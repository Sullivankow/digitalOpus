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

  // --- FERMETURE DU MENU BURGER EN CLIQUANT DANS LE VIDE (MOBILE) ---
  const navbarNav = document.getElementById("navbarNav");
  if (navbarNav) {
    navbarNav.addEventListener("click", function (e) {
      // Si on clique sur le fond (et pas sur un lien ou enfant du menu)
      if (e.target === navbarNav) {
        navbarNav.classList.remove("show");
      }
    });
  }

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
            observerWhyChoose.unobserve(whyChooseSection);
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

  /*Animation d'apparition de la section avis*/
  const reviewsSection = document.querySelector(".google-reviews-section");
  if (reviewsSection) {
    const observerReviews = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            reviewsSection.classList.add("visible");
            observerReviews.unobserve(reviewsSection);
          }
        });
      },
      { threshold: 0.2 }
    );
    observerReviews.observe(reviewsSection);
  }
  /*Animation d'apparition de la section faq*/
  const faqSection = document.querySelector(".faq-section");
  if (faqSection) {
    const observerfaq = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            faqSection.classList.add("visible");
            observerfaq.unobserve(faqSection);
          }
        });
      },
      { threshold: 0.2 }
    );
    observerfaq.observe(faqSection);
  }

  /*Animation d'apparition de la section contact*/
  const contactSection = document.querySelector(".contact-section");
  if (contactSection) {
    const observerContact = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            contactSection.classList.add("visible");
            observerContact.unobserve(contactSection);
          }
        });
      },
      { threshold: 0.2 }
    );
    observerContact.observe(contactSection);
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
document.addEventListener("DOMContentLoaded", function () {
  const modalImages = document.querySelectorAll(".modal img");
  const fullScreenContainer = document.createElement("div");
  fullScreenContainer.style.display = "none";
  fullScreenContainer.style.position = "fixed";
  fullScreenContainer.style.top = "0";
  fullScreenContainer.style.left = "0";
  fullScreenContainer.style.width = "100%";
  fullScreenContainer.style.height = "100%";
  fullScreenContainer.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
  fullScreenContainer.style.zIndex = "1050";
  fullScreenContainer.style.justifyContent = "center";
  fullScreenContainer.style.alignItems = "center";
  fullScreenContainer.style.cursor = "zoom-out";
  fullScreenContainer.style.flexDirection = "row";

  // Flèche gauche
  const leftArrow = document.createElement("button");
  leftArrow.innerHTML = "&#10094;";
  leftArrow.style.position = "absolute";
  leftArrow.style.left = "30px";
  leftArrow.style.top = "50%";
  leftArrow.style.transform = "translateY(-50%)";
  leftArrow.style.fontSize = "3rem";
  leftArrow.style.color = "white";
  leftArrow.style.background = "rgba(0,0,0,0.3)";
  leftArrow.style.border = "none";
  leftArrow.style.borderRadius = "50%";
  leftArrow.style.width = "56px";
  leftArrow.style.height = "56px";
  leftArrow.style.display = "flex";
  leftArrow.style.alignItems = "center";
  leftArrow.style.justifyContent = "center";
  leftArrow.style.cursor = "pointer";
  leftArrow.style.zIndex = "1060";

  // Flèche droite
  const rightArrow = document.createElement("button");
  rightArrow.innerHTML = "&#10095;";
  rightArrow.style.position = "absolute";
  rightArrow.style.right = "30px";
  rightArrow.style.top = "50%";
  rightArrow.style.transform = "translateY(-50%)";
  rightArrow.style.fontSize = "3rem";
  rightArrow.style.color = "white";
  rightArrow.style.background = "rgba(0,0,0,0.3)";
  rightArrow.style.border = "none";
  rightArrow.style.borderRadius = "50%";
  rightArrow.style.width = "56px";
  rightArrow.style.height = "56px";
  rightArrow.style.display = "flex";
  rightArrow.style.alignItems = "center";
  rightArrow.style.justifyContent = "center";
  rightArrow.style.cursor = "pointer";
  rightArrow.style.zIndex = "1060";

  const fullScreenImage = document.createElement("img");
  fullScreenImage.style.maxWidth = "90%";
  fullScreenImage.style.maxHeight = "90%";
  fullScreenImage.style.margin = "0 auto";
  fullScreenImage.style.display = "block";
  fullScreenContainer.appendChild(leftArrow);
  fullScreenContainer.appendChild(fullScreenImage);
  fullScreenContainer.appendChild(rightArrow);

  document.body.appendChild(fullScreenContainer);

  // Gestion des images du projet courant
  let currentImages = [];
  let currentIndex = 0;

  modalImages.forEach((image, idx, arr) => {
    image.addEventListener("click", function (e) {
      // On récupère toutes les images de la même grille (même parent .row)
      const row = this.closest(".row");
      currentImages = Array.from(row.querySelectorAll("img"));
      currentIndex = currentImages.indexOf(this);
      showImage(currentIndex);
      fullScreenContainer.style.display = "flex";
      e.stopPropagation();
    });
  });

  function showImage(idx) {
    if (!currentImages.length) return;
    if (idx < 0) idx = currentImages.length - 1;
    if (idx >= currentImages.length) idx = 0;
    currentIndex = idx;
    fullScreenImage.src = currentImages[currentIndex].src;
  }

  leftArrow.addEventListener("click", function (e) {
    e.stopPropagation();
    showImage(currentIndex - 1);
  });
  rightArrow.addEventListener("click", function (e) {
    e.stopPropagation();
    showImage(currentIndex + 1);
  });

  // Fermer la lightbox en cliquant sur le fond
  fullScreenContainer.addEventListener("click", function (e) {
    if (e.target === fullScreenContainer) {
      this.style.display = "none";
    }
  });
});

// Carousel automatique pour les avis
const carousel = document.querySelector(".reviews-carousel");
const cards = document.querySelectorAll(".review-card");
let index = 0;
let interval = null;

function showCards() {
  carousel.scrollTo({
    left: index * (cards[0].offsetWidth + 30),
    behavior: "smooth",
  });
}

function nextCard() {
  index = (index + 1) % cards.length;
  showCards();
}

function startCarousel() {
  interval = setInterval(nextCard, 3500);
}

function stopCarousel() {
  clearInterval(interval);
}

carousel.addEventListener("mouseenter", stopCarousel);
carousel.addEventListener("mouseleave", startCarousel);

window.addEventListener("DOMContentLoaded", () => {
  startCarousel();
});

// Animation accordéon pour la FAQ
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".faq-item");
  items.forEach((item) => {
    const btn = item.querySelector(".faq-question");
    btn.addEventListener("click", function () {
      const isOpen = item.classList.contains("open");
      items.forEach((i) => i.classList.remove("open"));
      if (!isOpen) item.classList.add("open");
    });
  });
  // Ouvre la première question par défaut
  if (items[0]) items[0].classList.add("open");
});
