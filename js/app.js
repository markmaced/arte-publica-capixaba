/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
window.addEventListener('load', function () {
  var swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    allowTouchMove: true,
    spaceBetween: 20
  });
});
document.addEventListener('DOMContentLoaded', function () {
  function showTab(letter) {
    // Ocultar todos os painéis
    document.querySelectorAll('.tab-panel').forEach(function (panel) {
      panel.classList.add('hidden');
    });

    // Desativar todos os botões
    document.querySelectorAll('.tab-button').forEach(function (button) {
      button.classList.remove('font-bold', 'text-white', 'bg-logo-blue', 'rounded-full');
    });

    // Mostrar o painel correspondente
    var panel = document.getElementById('tabpanel-' + letter);
    if (panel) {
      panel.classList.remove('hidden');
    }

    // Ativar o botão correspondente
    var button = _toConsumableArray(document.querySelectorAll('.tab-button')).find(function (btn) {
      return btn.dataset.tab === letter;
    });
    if (button) {
      button.classList.add('font-bold', 'text-white', 'bg-logo-blue', 'rounded-full');
    }
  }

  // Inicializar com a aba "A"
  showTab('A');

  // Adicionar eventos de clique aos botões
  document.querySelectorAll('.tab-button').forEach(function (button) {
    button.addEventListener('click', function () {
      var letter = button.dataset.tab;
      showTab(letter);
    });
  });
});

// Faq
document.addEventListener("alpine:init", function () {
  Alpine.store("accordion", {
    tab: 0
  });
  Alpine.data("accordion", function (idx) {
    return {
      init: function init() {
        this.idx = idx;
      },
      idx: -1,
      handleClick: function handleClick() {
        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
      },
      handleRotate: function handleRotate() {
        return this.$store.accordion.tab === this.idx ? "-rotate-180 !text-white" : "";
      },
      handleBackground: function handleBackground() {
        return this.$store.accordion.tab === this.idx ? "bg-logo-blue" : "";
      },
      handleTextChange: function handleTextChange() {
        return this.$store.accordion.tab === this.idx ? "text-white" : "";
      },
      handleToggle: function handleToggle() {
        return this.$store.accordion.tab === this.idx ? "max-height: ".concat(this.$refs.tab.scrollHeight, "px") : "";
      }
    };
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var menuItems = document.querySelectorAll("#mobileMenu li.menu-item-has-children");
  menuItems.forEach(function (item) {
    var submenu = item.querySelector(".sub-menu");
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
  if (mapElement) {
    var lat = parseFloat(mapElement.dataset.lat) || -20.3155; // Latitude padrão
    var _long = parseFloat(mapElement.dataset["long"]) || -40.3128; // Longitude padrão
    var mapsLink = mapElement.dataset.maps; // Link do Google Maps

    var map = L.map('map').setView([lat, _long], 11);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: "&copy; <a href=\"".concat(mapsLink, "\" target=\"_blank\">Abrir no Google Maps</a>")
    }).addTo(map);
    var marker = L.marker([lat, _long]).addTo(map);
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
      success: function success(response) {
        $('#libraryItems').html(response.data);
        Swal.close();
      },
      error: function error(xhr, exception, _error) {
        console.log(_error);
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
      didOpen: function didOpen() {
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

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0,
/******/ 			"css/editor-style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app","css/editor-style"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/app","css/editor-style"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app","css/editor-style"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;