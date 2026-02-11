(() => {
  const body = document.querySelector("body");
  const hamburger = document.querySelector("nav button.hamburger");

  const toggleHamburger = () => {
    hamburger.addEventListener("click", () => {
      body.classList.toggle("menu");
    });
  };
  window.addEventListener("load", toggleHamburger);
})();
