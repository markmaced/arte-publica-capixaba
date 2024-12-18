// Navigation toggle
window.addEventListener('load', function () {
      // let main_navigation = document.querySelector('#primary-menu');
      // document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
      //       e.preventDefault();
      //       main_navigation.classList.toggle('hidden');
      // });

      const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            slidesPerView: 'auto',
            allowTouchMove: true,
            spaceBetween: 20,
      })
});

// Faq
document.addEventListener("alpine:init", () => {
      Alpine.store("accordion", {
            tab: 0
      });

      Alpine.data("accordion", (idx) => ({
            init() {
                  this.idx = idx;
            },
            idx: -1,
            handleClick() {
                  this.$store.accordion.tab =
                        this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                  return this.$store.accordion.tab === this.idx ? "-rotate-180 !text-white" : "";
            },
            handleBackground() {
                  return this.$store.accordion.tab === this.idx ? "bg-logo-blue" : "";
            },
            handleTextChange() {
                  return this.$store.accordion.tab === this.idx ? "text-white" : "";
            },
            handleToggle() {
                  return this.$store.accordion.tab === this.idx
                        ? `max-height: ${this.$refs.tab.scrollHeight}px`
                        : "";
            }
      }));
});

// document.addEventListener("DOMContentLoaded", function () {
//       // Seleciona todos os itens do menu com submenus
//       const menuItems = document.querySelectorAll("li.menu-item-has-children");

//       menuItems.forEach(item => {
//             item.appendChild();
//       });
// });

document.addEventListener("DOMContentLoaded", function () {
      // Seleciona todos os itens do menu com submenus
      const menuItems = document.querySelectorAll("#mobileMenu li.menu-item-has-children");
  
      menuItems.forEach(item => {
          // Seleciona o submenu do item atual
          const submenu = item.querySelector(".sub-menu");
  
          if (submenu) {
              // Inicializa o estado escondido usando classes de Tailwind
              submenu.classList.add("h-0", "opacity-0", "overflow-hidden", "transition", "duration-500");
  
              // Adiciona o evento de clique no próprio <li>
              item.addEventListener("click", function (e) {
                  // Evita propagação caso o submenu também tenha eventos
                  e.stopPropagation();
  
                  // Alterna as classes para exibir/ocultar o submenu
                  submenu.classList.toggle("h-0");
                  submenu.classList.toggle("opacity-0");
                  submenu.classList.toggle("overflow-hidden");
                  submenu.classList.toggle("mt-2");
              });
          }
      });
  });
  



jQuery(document).ready(function ($) {
});