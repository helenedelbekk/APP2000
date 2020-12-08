function navToggleClickEventHandler(event) {
    toggleMainNav(this);
  }
  

  
  function subNavClickEventHandler(event) {
    const subNav = this.parentNode.querySelector('.subnav');
  
    if (subNav !== null) {
      event.preventDefault();
      toggleSubNav(this, subNav);
    }
  }
  
  function subNavKeydownHandler(event) {
    let subNav;
    let currentNavItem;
    
    if (this.classList.contains('.subNav')) {
      subNav = this;
      currentNavItem = this.querySelector('a');
    } else {
      subNav = this.parentNode.querySelector('.subnav');
      currentNavItem = event.target;
    }
    
    console.log(subNav);
    console.log(currentNavItem);
  }
  
  function closeMainNav(button) {
    button.setAttribute('aria-expanded', 'false');
    navWrapper.setAttribute('aria-hidden', 'true');
    navWrapper.classList.add('noshow');
  }
  
  function openMainNav(button) {
    button.setAttribute('aria-expanded', 'true');
    navWrapper.setAttribute('aria-hidden', 'false');
    navWrapper.classList.remove('noshow');
  }
  
  function toggleMainNav(button) {
    if (button.getAttribute('aria-expanded') === 'true') {
      closeMainNav(button);
    } else {
      openMainNav(button);
    }
  }
  
  

  
  function toggleSubNav(link, subNav) {
    const subNavs = [
      ...document.querySelectorAll('.hoved-nav .subnav')
    ];
    subNavs.forEach(siblingSubNav => {
    let siblingLink = siblingSubNav.parentNode.querySelector('a');
    closeSubNav(siblingLink, siblingSubNav);
    });
  

  }

  function setupNavLink(navLink) {
    navLink.addEventListener('click', subNavClickEventHandler);
    navLink.parentNode.addEventListener('keydown', subNavKeydownHandler);
  }
  
  function setupNavToggle(navToggle, navWrapper) {
    navToggle.setAttribute('aria-expanded', "false");
    navWrapper.classList.add('noshow');
  
    if(window.screen.width < 768) {
      
    }
    
    navToggle.addEventListener('click', navToggleClickEventHandler);
    navToggle.addEventListener('keydown', navToggleKeydownHandler);
  }
  
  
  // Do Main Magic...
  const header = document.querySelector('.jalla-nav');
  header.classList.add('bruker-js');
  const mainNav = document.querySelector('.hoved-nav');
  const navWrapper = document.querySelector('.nav-burger');
  
  let navLinks = [
    ...document.querySelectorAll('.hoved-nav > ul > li > a')
  ];
  navLinks.forEach(navLink => setupNavLink(navLink));
  
  const navToggle = document.querySelector('.nav-toggle');
  setupNavToggle(navToggle, navWrapper);
  
  