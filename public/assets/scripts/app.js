/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
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
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict'

	var ShuffleText = __webpack_require__(1)

	// load webfonts
	try { Typekit.load() } catch(e) {}

	// show contents
	var animated = true;
	show(animated);

	function show(animated) {
		structureAnimation(animated)
		partsAnimation(animated)
		sideWindowAnimation(animated)
	}

	function structureAnimation(animated) {
		var wrapper = $('#wrapper')
		var cover = $('#cover')

		setTimeout(function() {
			wrapper.css('opacity', 0.0).animate({
				opacity: 1.0
			})
		}, animated ? 1000 : 0)
	}

	function partsAnimation(animated) {
		var jumbotronTitles = $('#jumbotron .title')
		var jumbotronTexts = $('#jumbotron .text')
		jumbotronTitles.hide()
		jumbotronTexts.hide()

		var location = $('#location')
		var circles = $('#location .circle')
		var lines = $('#location .line')
		var titles = $('#location .title')
		location.css('opacity', 1.0)
		circles.css('opacity', 0.0)
		lines.hide()
		titles.hide()

		var shuffleTexts = []
		$('#content .shuffle').each(function() {
			shuffleTexts.push(new ShuffleText(this))
		})

		setTimeout(function() {
			jumbotronTitles.animate({
				opacity: 1.0,
			})
		}, animated ? 1000 : 0)

		setTimeout(function() {
			circles.animate({
				opacity: 1.0,
			})
		}, animated ? 3000 : 0)

		setTimeout(function() {
			jumbotronTexts.show(300)

			lines.show(300)
			titles.show(300)

			shuffleTexts.forEach(function (element) {
				element.start()
			})
		}, animated ? 3300 : 0)

		setTimeout(function() {
			jumbotronTitles.show('fast')
		}, animated ? 1000 : 0)
	}

	function sideWindowAnimation(animated) {
		// 情報ウインドウの初期状態を設定する
		$('#side-icons').show()

		setTimeout(function() {
			$('#side-icons').hide()
			$('#side-windows').show('slow')
			$('#location .circle').animate({
				opacity: 0.8,
			})
			$('#location .line').animate({
				opacity: 0.5,
			})
			$('#location .title').animate({
				opacity: 0.25,
			})
		}, animated ? 5000 : 0)

		setTimeout(function() {
			document.getElementById('window-open-sound').play()
		}, animated ? 4500 : 0)
	}


/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

	/*
	 * ShuffleText by Yasunobu Ikeda. Feb 3, 2012
	 * Visit http://clockmaker.jp/ for documentation, updates and examples.
	 *
	 *
	 * Copyright (c) 2012 Yasunobu Ikeda
	 *
	 * Permission is hereby granted, free of charge, to any person
	 * obtaining a copy of this software and associated documentation
	 * files (the "Software"), to deal in the Software without
	 * restriction, including without limitation the rights to use,
	 * copy, modify, merge, publish, distribute, sublicense, and/or sell
	 * copies of the Software, and to permit persons to whom the
	 * Software is furnished to do so, subject to the following
	 * conditions:
	 *
	 * The above copyright notice and this permission notice shall be
	 * included in all copies or substantial portions of the Software.
	 *
	 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
	 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
	 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
	 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
	 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
	 * OTHER DEALINGS IN THE SOFTWARE.
	 */

	(function () {
		/**
		 * スコープの委譲を処理するユーティリティークラス
		 */
		var Delegate = {
			/**
			 * スコープを移譲した関数を作成します。
			 * @param func 実行したい関数
			 * @param thisObj 移譲したいスコープ
			 * @return Function 移譲済みの関数
			 */
			create:function (func, thisObj) {
				var del = function () {
					return func.apply(thisObj, arguments);
				};
				//情報は関数のプロパティとして定義する
				del.func = func;
				del.thisObj = thisObj;
				return del;
			}
		};

		/**
		 * DOMエレメント用ランダムテキストクラス
		 * @param DOMエレメント
		 */
		function ShuffleText(element) {
			this._element = element;
			this.setText(element.innerHTML);
		}

		var p = ShuffleText.prototype;

		/** ランダムテキストに用いる文字列 */
		p.sourceRandomCharacter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		/** 空白に用いる文字列 */
		p.emptyCharacter = "-";
		/** フレームレート */
		p.fps = 60;
		/** 再生中かどうかを示すブール値 */
		p.isRunning = false;
		/** エフェクトの実行時間 */
		p.duration = 600;
		p._orijinalStr = "";
		p._orijinalLength = "";
		p._intervalId = 0;
		p._timeCurrent = 0;
		p._timeStart = 0;
		p._randomIndex = [];

		/** テキストを設定します。 */
		p.setText = function (text) {
			this._orijinalStr = text;
			this._orijinalLength = text.length;
		};

		/** 再生を開始します。 */
		p.start = function () {
			this.stop();

			p._randomIndex = [];
			var str = "";
			for (var i = 0; i < this._orijinalLength; i++) {
				var rate = i / this._orijinalLength;
				p._randomIndex[i] = Math.random() * (1 - rate) + rate;
				str += this.emptyCharacter;
			}

			this._timeStart = new Date().getTime();
			this._intervalId = setInterval(Delegate.create(this._onInterval, this), 1000 / p.fps);
			this.isRunning = true;

			this._element.innerHTML = str;

		};

		/** 停止します。 */
		p.stop = function () {
			if (this.isRunning) clearInterval(this._intervalId);
			this.isRunning = false;
		};

		p._onInterval = function () {
			this._timeCurrent = new Date().getTime() - this._timeStart;
			var percent = this._timeCurrent / this.duration;

			var str = "";
			for (var i = 0; i < this._orijinalLength; i++) {
				if (percent >= p._randomIndex[i]) {
					str += this._orijinalStr.charAt(i);
				} else if (percent < p._randomIndex[i] / 3) {
					str += this.emptyCharacter;
				} else {
					str += this.sourceRandomCharacter.charAt(Math.floor(Math.random() * (this.sourceRandomCharacter.length)));
				}
			}

			if (percent > 1) {
				str = this._orijinalStr;
				clearInterval(this._intervalId);
				this.isRunning = false;
			}
			this._element.innerHTML = str;
		}

		module.exports = ShuffleText;
	})();


/***/ }
/******/ ])