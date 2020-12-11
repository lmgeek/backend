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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/babel-loader/lib/index.js):\\nError [ERR_PACKAGE_PATH_NOT_EXPORTED]: No \\\"exports\\\" main defined in C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\helper-compilation-targets\\\\package.json\\n    at throwExportsNotFound (internal/modules/esm/resolve.js:285:9)\\n    at packageExportsResolve (internal/modules/esm/resolve.js:491:3)\\n    at resolveExports (internal/modules/cjs/loader.js:444:36)\\n    at Function.Module._findPath (internal/modules/cjs/loader.js:484:31)\\n    at Function.Module._resolveFilename (internal/modules/cjs/loader.js:818:27)\\n    at Function.Module._load (internal/modules/cjs/loader.js:687:27)\\n    at Module.require (internal/modules/cjs/loader.js:903:19)\\n    at require (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\v8-compile-cache\\\\v8-compile-cache.js:161:20)\\n    at Object.<anonymous> (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\preset-env\\\\lib\\\\debug.js:8:33)\\n    at Module._compile (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\v8-compile-cache\\\\v8-compile-cache.js:192:30)\\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:1035:10)\\n    at Module.load (internal/modules/cjs/loader.js:879:32)\\n    at Function.Module._load (internal/modules/cjs/loader.js:724:14)\\n    at Module.require (internal/modules/cjs/loader.js:903:19)\\n    at require (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\v8-compile-cache\\\\v8-compile-cache.js:161:20)\\n    at Object.<anonymous> (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\preset-env\\\\lib\\\\index.js:11:14)\\n    at Module._compile (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\v8-compile-cache\\\\v8-compile-cache.js:192:30)\\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:1035:10)\\n    at Module.load (internal/modules/cjs/loader.js:879:32)\\n    at Function.Module._load (internal/modules/cjs/loader.js:724:14)\\n    at Module.require (internal/modules/cjs/loader.js:903:19)\\n    at require (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\v8-compile-cache\\\\v8-compile-cache.js:161:20)\\n    at requireModule (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\files\\\\plugins.js:165:12)\\n    at loadPreset (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\files\\\\plugins.js:83:17)\\n    at createDescriptor (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-descriptors.js:154:9)\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-descriptors.js:109:50\\n    at Array.map (<anonymous>)\\n    at createDescriptors (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-descriptors.js:109:29)\\n    at createPresetDescriptors (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-descriptors.js:101:10)\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-descriptors.js:58:104\\n    at cachedFunction (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\caching.js:62:27)\\n    at cachedFunction.next (<anonymous>)\\n    at evaluateSync (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\gensync\\\\index.js:244:28)\\n    at sync (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\gensync\\\\index.js:84:14)\\n    at presets (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-descriptors.js:29:84)\\n    at mergeChainOpts (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\config\\\\config-chain.js:320:26)\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hcHAuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/css-loader/index.js):\\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nValidationError: Invalid options object. Sass Loader has been initialized using an options object that does not match the API schema.\\n - options has an unknown property 'outputStyle'. These properties are valid:\\n   object { implementation?, sassOptions?, prependData?, sourceMap?, webpackImporter? }\\n    at validate (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\sass-loader\\\\node_modules\\\\schema-utils\\\\dist\\\\validate.js:98:11)\\n    at Object.loader (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\sass-loader\\\\dist\\\\index.js:36:28)\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\webpack\\\\lib\\\\NormalModule.js:316:20\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:367:11\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:233:18\\n    at runSyncOrAsync (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:143:3)\\n    at iterateNormalLoaders (C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:232:2)\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\loader-runner\\\\lib\\\\LoaderRunner.js:205:4\\n    at C:\\\\Users\\\\Luis Marin\\\\Desktop\\\\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\\\\laravel\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\CachedInputFileSystem.js:85:15\\n    at processTicksAndRejections (internal/process/task_queues.js:79:11)\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiIuL3Jlc291cmNlcy9zYXNzL2FwcC5zY3NzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Luis Marin\Desktop\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\laravel\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\Luis Marin\Desktop\themeforest-psxO1ADd-sofbox-responsive-bootstrap-4-admin-dashboard-template\laravel\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });