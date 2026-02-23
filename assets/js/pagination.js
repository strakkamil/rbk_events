export function initPagination() {
  const gallery_container = document.querySelector(".media-gallery");
  const paginationBtns = [
    ...document.querySelectorAll(".media-pagination button.page"),
  ];
  const pages = [...document.querySelectorAll(".page")];
  const pagination_buttons = [
    ...document.querySelectorAll(".media-pagination button"),
  ];
  let header_height = document
    .querySelector("nav.main-nav")
    .getBoundingClientRect().height;
  const scrollMargin = header_height + 40;
  const gap = 15;
  let page_width = pages[0].getBoundingClientRect().width;
  let lastWidth = window.innerWidth;

  const scrollToTop = () => {
    const top =
      pages[0].getBoundingClientRect().top + window.scrollY - scrollMargin;
    window.scrollTo({
      top,
      behavior: "smooth",
    });
  };

  const removeActiveClass = () => {
    for (let btn of pagination_buttons) {
      btn.classList.remove("active");
    }
  };

  const changePage = (index) => {
    const translate = index * page_width + index * gap;
    removeActiveClass();
    pagination_buttons[index].classList.add("active");
    gallery_container.style.transform = `translateX(-${translate}px)`;
    scrollToTop();
  };

  const resizeHelper = () => {
    if (window.innerWidth !== lastWidth) {
      header_height = document
        .querySelector("nav.main-nav")
        .getBoundingClientRect().height;
      page_width = pages[0].getBoundingClientRect().width;
      const activeButton = document.querySelector(
        ".media-pagination button.active",
      );
      activeButton.click();
    }
    lastWidth = window.innerWidth;
  };

  window.addEventListener("resize", resizeHelper);

  for (let paginationBtn of paginationBtns) {
    const index = +paginationBtn.dataset.index;

    paginationBtn.addEventListener("click", () => changePage(index));
  }
}
