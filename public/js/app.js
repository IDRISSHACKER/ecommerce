/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/typescript/app.ts");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/typescript/app.ts":
/*!*************************************!*\
  !*** ./resources/typescript/app.ts ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\r\nObject.defineProperty(exports, \"__esModule\", { value: true });\r\nvar Save_1 = __webpack_require__(/*! ./import/Save */ \"./resources/typescript/import/Save.ts\");\r\nvar Reload_1 = __webpack_require__(/*! ./import/Reload */ \"./resources/typescript/import/Reload.ts\");\r\nwindow.onload = function () {\r\n    (function (global) {\r\n        var settingsSave = {\r\n            input: \"#price\",\r\n            button: \"#add\",\r\n        };\r\n        var settingsReload = {\r\n            file: \"Ajax9ecd8123786622b0b15695b13eaddc9c/cont.php\",\r\n            button: \"#add\",\r\n            cont: \"#tab\"\r\n        };\r\n        var add = document.querySelector(\"#add\");\r\n        var price = new Save_1.default(settingsSave);\r\n        var reloadPrice = new Reload_1.default(settingsReload);\r\n        reloadPrice.reloading();\r\n        add.addEventListener(\"click\", function () {\r\n            reloadPrice.reloading();\r\n            price.saving();\r\n            reloadPrice.reloading();\r\n        });\r\n        //reloadPrice.reloading()\r\n    })(window);\r\n};\r\n\n\n//# sourceURL=webpack:///./resources/typescript/app.ts?");

/***/ }),

/***/ "./resources/typescript/import/Reload.ts":
/*!***********************************************!*\
  !*** ./resources/typescript/import/Reload.ts ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\r\n/**\r\n * --------------------------------------------------------------------------\r\n * IDRISS HACKER (v1.0.0): Save.ts\r\n * Licensed under MIT (https://github.com/twbs/idriss-hacker/blob/main/LICENSE)\r\n * --------------------------------------------------------------------------\r\n */\r\nObject.defineProperty(exports, \"__esModule\", { value: true });\r\n/**\r\n * ------------------------------------------------------------------------\r\n * Constants\r\n * ------------------------------------------------------------------------\r\n */\r\nvar version = 1.1;\r\nvar author = \"IDRISS HACKER\";\r\nvar name = \"Reload\";\r\nvar time = \"3.11.2020\";\r\nvar timeUpdated = \"3.11.2020\";\r\nvar file;\r\nvar button;\r\nvar cont;\r\n/**\r\n * ------------------------------------------------------------------------\r\n * Class Definition\r\n * ------------------------------------------------------------------------\r\n */\r\nvar Reload = /** @class */ (function () {\r\n    function Reload(data) {\r\n        file = data.file;\r\n        button = data.button;\r\n        cont = data.cont;\r\n    }\r\n    Reload.prototype.reloading = function () {\r\n        console.log('reload');\r\n        //button = document.querySelector(button)\r\n        var xhr = new XMLHttpRequest();\r\n        xhr.onload = function () {\r\n            if (xhr.readyState == 4 && xhr.status == 200) {\r\n                var content = xhr.responseText;\r\n                cont = document.querySelector(\"#tab\");\r\n                //content = document\r\n                cont.innerHTML = content;\r\n                //console.log(content)\r\n            }\r\n        };\r\n        xhr.open(\"GET\", file);\r\n        xhr.send();\r\n    };\r\n    return Reload;\r\n}()); //end Reload\r\nexports.default = Reload;\r\n\n\n//# sourceURL=webpack:///./resources/typescript/import/Reload.ts?");

/***/ }),

/***/ "./resources/typescript/import/Save.ts":
/*!*********************************************!*\
  !*** ./resources/typescript/import/Save.ts ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\r\n/**\r\n * --------------------------------------------------------------------------\r\n * IDRISS HACKER (v1.0.0): Save.ts\r\n * Licensed under MIT (https://github.com/twbs/idriss-hacker/blob/main/LICENSE)\r\n * --------------------------------------------------------------------------\r\n */\r\nObject.defineProperty(exports, \"__esModule\", { value: true });\r\n/**\r\n * ------------------------------------------------------------------------\r\n * Constants\r\n * ------------------------------------------------------------------------\r\n */\r\nvar version = 1.1;\r\nvar author = \"IDRISS HACKER\";\r\nvar name = \"Save\";\r\nvar time = \"3.11.2020\";\r\nvar timeUpdated = \"3.11.2020\";\r\nvar input;\r\nvar button;\r\n/**\r\n * ------------------------------------------------------------------------\r\n * Class Defined\r\n * ------------------------------------------------------------------------\r\n */\r\nvar Save = /** @class */ (function () {\r\n    function Save(data) {\r\n        input = data.input;\r\n        button = data.button;\r\n    }\r\n    Save.prototype.saving = function () {\r\n        console.log(\"saving\");\r\n        //button = document.querySelector(button)\r\n        var xhr = new XMLHttpRequest();\r\n        input = document.querySelector(\"#price\");\r\n        var price = input.value;\r\n        /*if(typeof price != \"number\"){\r\n\r\n            console.log(\"entrez un nombre\")\r\n            return false\r\n        }*/\r\n        xhr.onload = function () {\r\n            if (xhr.readyState == 4 && xhr.status == 200) {\r\n                var content = JSON.parse(xhr.responseText);\r\n                content = content[0];\r\n                console.log(content);\r\n                if (content == \"error\") {\r\n                    input.classList.remove(\"is-valid\");\r\n                    input.classList.add(\"is-invalid\");\r\n                }\r\n                else {\r\n                    input.classList.remove(\"is-invalid\");\r\n                    input.classList.add(\"is-valid\");\r\n                    input.value = \"\";\r\n                }\r\n            }\r\n        };\r\n        xhr.open(\"POST\", \"./Ajax9ecd8123786622b0b15695b13eaddc9c/saving.php\");\r\n        var data = new FormData();\r\n        data.append(\"price\", price);\r\n        xhr.send(data);\r\n    };\r\n    return Save;\r\n}()); //end save\r\nexports.default = Save;\r\n\n\n//# sourceURL=webpack:///./resources/typescript/import/Save.ts?");

/***/ })

/******/ });