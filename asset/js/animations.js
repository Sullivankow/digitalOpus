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
