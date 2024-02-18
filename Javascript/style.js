const navBar = document.querySelector("nav"),
       menuButtons = document.querySelectorAll(".menu-icon");

     menuButtons.forEach((menuBtn) => {
       menuBtn.addEventListener("click", () => {
         navBar.classList.toggle("open");
       });
     });

     menuButtons.addEventListener("click", () => {
       navBar.classList.remove("open");
     });
     function toggleSublist(event) {
      event.preventDefault();
      const sublist = event.currentTarget.parentNode.querySelector('.sublist');
      sublist.style.display = sublist.style.display === 'none' ? 'block' : 'none';

      const arrowIcon = event.currentTarget.querySelector('.arrow-icon');
      arrowIcon.style.transform = sublist.style.display === 'none' ? 'rotate(0deg)' : 'rotate(-180deg)';
  }