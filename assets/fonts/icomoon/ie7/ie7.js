/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-github': '&#xe600;',
		'icon-twitter2': '&#xe601;',
		'icon-google-plus': '&#xe602;',
		'icon-feed': '&#xe603;',
		'icon-checkbox-checked': '&#xe604;',
		'icon-question-sign': '&#x3f;',
		'icon-email': '&#x1f4e7;',
		'icon-star': '&#x2605;',
		'icon-youtube-sign': '&#xe608;',
		'icon-link': '&#xe609;',
		'icon-home': '&#xe60a;',
		'icon-linkedin': '&#xe60b;',
		'icon-at': '&#x61;',
		'icon-chevron-sign-right': '&#x27b2;',
		'icon-stackexchange': '&#xe60e;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
