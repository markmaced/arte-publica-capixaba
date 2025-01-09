window.addEventListener('load', function () {
      const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            slidesPerView: 'auto',
            allowTouchMove: true,
            spaceBetween: 20,
      })
});

document.addEventListener('DOMContentLoaded', () => {
      function showTab(letter) {
          // Ocultar todos os painéis
          document.querySelectorAll('.tab-panel').forEach(panel => {
              panel.classList.add('hidden');
          });

          // Desativar todos os botões
          document.querySelectorAll('.tab-button').forEach(button => {
              button.classList.remove('font-bold', 'text-white', 'bg-logo-blue', 'rounded-full');
          });

          // Mostrar o painel correspondente
          const panel = document.getElementById('tabpanel-' + letter);
          if (panel) {
              panel.classList.remove('hidden');
          }

          // Ativar o botão correspondente
          const button = [...document.querySelectorAll('.tab-button')].find(btn => btn.dataset.tab === letter);
          if (button) {
              button.classList.add('font-bold', 'text-white', 'bg-logo-blue', 'rounded-full');
          }
      }

      // Inicializar com a aba "A"
      showTab('A');

      // Adicionar eventos de clique aos botões
      document.querySelectorAll('.tab-button').forEach(button => {
          button.addEventListener('click', () => {
              const letter = button.dataset.tab;
              showTab(letter);
          });
      });
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

document.addEventListener("DOMContentLoaded", function () {
      const menuItems = document.querySelectorAll("#mobileMenu li.menu-item-has-children");

      menuItems.forEach(item => {
            const submenu = item.querySelector(".sub-menu");

            if (submenu) {
                  submenu.classList.add("h-0", "opacity-0", "overflow-hidden", "transition", "duration-500");
                  item.addEventListener("click", function (e) {
                        e.stopPropagation();

                        submenu.classList.toggle("h-0");
                        submenu.classList.toggle("opacity-0");
                        submenu.classList.toggle("overflow-hidden");
                        submenu.classList.toggle("mt-2");
                  });
            }
      });
});

// leaflet
document.addEventListener("DOMContentLoaded", function () {
      var mapElement = document.getElementById('map');

      if(mapElement) {
            var lat = parseFloat(mapElement.dataset.lat) || -20.3155; // Latitude padrão
            var long = parseFloat(mapElement.dataset.long) || -40.3128; // Longitude padrão
            var mapsLink = mapElement.dataset.maps; // Link do Google Maps
      
            var map = L.map('map').setView([lat, long], 11);
      
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  maxZoom: 19,
                  attribution: `&copy; <a href="${mapsLink}" target="_blank">Abrir no Google Maps</a>`
            }).addTo(map);
      
            var marker = L.marker([lat, long]).addTo(map);
      }
});


jQuery(document).ready(function ($) {
      function filterLibrary(filters) {
            console.log(filters);
            $.ajax({
                  url: wpurl.ajax,
                  dataType: 'json',
                  type: 'post',
                  data: {
                        action: 'filter_library',
                        search: filters.search,
                        tipoDeFicha: filters.tipoDeFicha
                  },
                  success: function (response) {
                        $('#libraryItems').html(response.data);
                        Swal.close();
                  },
                  error: function (xhr, exception, error) {
                        console.log(error);
                        Swal.close();
                  }
            });
      }

      function getFiltersAndSearch() {
            return {
                  search: $('#searchFilter').val(),
                  tipoDeFicha: $('#tipoDeFicha').val()
            };
      }

      function showLoading() {
            Swal.fire({
                  title: 'Carregando',
                  text: 'Pesquisando na biblioteca...',
                  allowOutsideClick: false,
                  didOpen: () => {
                        Swal.showLoading();
                  }
            });
      }

      $(document).on('click', '#searchBtn', function () {
            showLoading();
            filterLibrary(getFiltersAndSearch());
      });

      $(document).on('change', '#tipoDeFicha', function () {
            showLoading();
            filterLibrary(getFiltersAndSearch());
      });
});