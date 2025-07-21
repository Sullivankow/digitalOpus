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
  }
});
