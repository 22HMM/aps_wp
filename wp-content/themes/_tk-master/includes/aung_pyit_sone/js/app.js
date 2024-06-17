document.addEventListener("DOMContentLoaded", () => {
  const doc = document;

  const addActiveClass = () => {
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    const contactBtn = document.querySelector(".btn-contact");
    const footerLinks = document.querySelectorAll(".footer .nav-link-f");
    const logoLink = document.querySelector(".navbar-brand");
    const servicesNavLinks = document.querySelectorAll(".services-nav-link");
    const dropdownItems = document.querySelectorAll(".dropdown-item");
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const aboutUsNavLink = document.querySelector(".about-us-nav-link");

    const removeActiveClass = () => {
      navLinks.forEach((link) => {
        link.classList.remove("active");
      });

      footerLinks.forEach((link) => {
        link.classList.remove("active");
      });

      servicesNavLinks.forEach((link) => {
        link.classList.remove("active");
      });

      if (logoLink) {
        logoLink.classList.remove("active");
      }

      dropdownItems.forEach((item) => {
        item.classList.remove("active");
      });

      if (dropdownToggle) {
        dropdownToggle.classList.remove("active");
      }
    };

    const activateLink = (link) => {
      removeActiveClass();
      link.classList.add("active");
      localStorage.setItem("activeLink", link.getAttribute("href"));
      window.location.href = link.getAttribute("href");
    };

    const setActiveLinkFromStorage = () => {
      const activeLink = localStorage.getItem("activeLink");

      navLinks.forEach((link) => {
        if (activeLink === link.getAttribute("href")) {
          link.classList.add("active");
        }
      });

      footerLinks.forEach((link) => {
        if (activeLink === link.getAttribute("href")) {
          link.classList.add("active");
        }
      });

      servicesNavLinks.forEach((link) => {
        if (activeLink === link.getAttribute("href")) {
          link.classList.add("active");
        }
      });

      if (activeLink === logoLink.getAttribute("href")) {
        logoLink.classList.add("active");
      }
    };

    setActiveLinkFromStorage();

    navLinks.forEach((link) => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        activateLink(this);
      });
    });

    footerLinks.forEach((link) => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        activateLink(this);
      });
    });

    dropdownItems.forEach((item) => {
      item.addEventListener("click", function (event) {
        event.preventDefault();
        activateLink(this);
      });
    });

    servicesNavLinks.forEach((link) => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        activateLink(this);
      });
    });

    if (logoLink) {
      logoLink.addEventListener("click", function (event) {
        event.preventDefault();
        activateLink(this);
      });
    }

    if (contactBtn) {
      contactBtn.addEventListener("click", function (event) {
        event.preventDefault();
        removeActiveClass();
        activateLink(this);
      });
    }

    if (aboutUsNavLink) {
      aboutUsNavLink.addEventListener("click", function (event) {
        event.preventDefault();
        removeActiveClass();
        activateLink(this);
      });
    }
  };

  /**
   * toggle navbar for smaller screens
   */
  const toggleNavbar = () => {
    const toggleBtn = document.querySelector(".toggle-btn");
    const closeToggle = document.querySelector(".close-toggle");
    const navbar = document.querySelector(".navbar-nav");

    const toggleNavWidth = () => {
      if (navbar.style.width === "50%") {
        navbar.style.width = "";
      } else {
        navbar.style.width = "50%";
      }
    };

    toggleBtn.addEventListener("click", toggleNavWidth);
    closeToggle.addEventListener("click", toggleNavWidth);

    if (window.innerWidth >= 993) {
      navbar.style.width = "";
    }
  };

  toggleNavbar();

  addActiveClass();
});
