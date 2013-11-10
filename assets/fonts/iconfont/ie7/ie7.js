/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'iconfont\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-stack-exchange': '&#xe60e;',
		'icon-reorder': '&#xe605;',
		'icon-infinity': '&#x221e;',
		'icon-google-plus': '&#xe601;',
		'icon-twitter': '&#xe603;',
		'icon-youtube': '&#xe606;',
		'icon-github': '&#xe608;',
		'icon-circleright': '&#xe60b;',
		'icon-link': '&#xe60c;',
		'icon-bookmark': '&#xe60d;',
		'icon-comments': '&#xe60f;',
		'icon-feed': '&#xe600;',
		'icon-tag': '&#xe602;',
		'icon-at': '&#xe607;',
		'icon-info': '&#xe609;',
		'icon-linkedin': '&#xe60a;',
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
