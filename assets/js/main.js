import { initHeader } from "/assets/js/header.js";

const loadSliders = () => {
  const sliders = [...document.querySelectorAll(".slider-wrapper")];
  if (sliders.length) {
    import("/assets/js/slider.js").then((module) => {
      sliders.forEach((wrapper) => module.initSLider(wrapper.id));
    });
  }
};

const loadTooltips = () => {
  const tooltips = [...document.querySelectorAll(".head .cell.bg")];
  if (tooltips.length) {
    import("/assets/js/tooltip.js").then((module) => {
      module.initTooltips(tooltips);
    });
  }
};

const loadPagination = () => {
  const pagination = document.querySelector(".media-pagination");
  if(pagination){
        import("/assets/js/pagination.js").then((module) => {
          module.initPagination();
        });
  }
}

const loadModal = () => {
  const modal = document.querySelector(".media-modal-wrapper");
  if (modal) {
    import("/assets/js/modal.js").then((module) => {
      module.initModal(modal);
    });
  }
};

const loadHelper = () => {
  initHeader();
  loadSliders();
  loadTooltips();
  loadPagination();
  loadModal();
};

window.addEventListener("load", loadHelper);
