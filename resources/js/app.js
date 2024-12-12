// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
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