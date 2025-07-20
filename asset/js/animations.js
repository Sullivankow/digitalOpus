/*Animation du container à propos de nous*/

document.addEventListener("DOMContentLoaded", function () {
  const section = document.querySelector(".about-section");
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
});

/*Animation dessin dans le container à propos de nous*/
lottie.loadAnimation({
  container: document.getElementById("lottie-computer"),
  renderer: "svg",
  loop: true,
  autoplay: true,
  path: "https://lottie.host/08eb5f50-45c8-43de-b235-5af2173cd158/TUhJ7OHOOC.json", // URL de l’animation Lottie choisie
});
