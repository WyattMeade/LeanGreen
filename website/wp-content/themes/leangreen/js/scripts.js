/*
 * Website: Lean Green
 * Author: Wyatt Meade
 */

var $ = jQuery;

var dom = document;
var menuBtn = document.getElementById('menu-button');
var menu = dom.getElementById('menu');

var hasClass = function (element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

var toggleMenu = function() {

	var classes = menu.className;
	
	if (hasClass(menu, 'open')) {

		menu.className = "main";

	} else {

		menu.className = "main open";

	}

};

document.addEventListener('click', toggleMenu, false);