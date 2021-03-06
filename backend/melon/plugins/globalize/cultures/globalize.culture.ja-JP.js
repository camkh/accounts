/*
 * Globalize Culture ja-JP
 *
 * http://github.com/jquery/globalize
 *
 * Copyright Software Freedom Conservancy, Inc.
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * This file was generated by the Globalize Culture Generator
 * Translation: bugs found in this file need to be fixed in the generator
 */

(function( window, undefined ) {

var Globalize;

if ( typeof require !== "undefined" &&
	typeof exports !== "undefined" &&
	typeof module !== "undefined" ) {
	// Assume CommonJS
	Globalize = require( "globalize" );
} else {
	// Global variable
	Globalize = window.Globalize;
}

Globalize.addCultureInfo( "ja-JP", "default", {
	name: "ja-JP",
	englishName: "Japanese (Japan)",
	nativeName: "æ—¥æœ¬èªž (æ—¥æœ¬)",
	language: "ja",
	numberFormat: {
		"NaN": "NaN (éžæ•°å€¤)",
		negativeInfinity: "-âˆž",
		positiveInfinity: "+âˆž",
		percent: {
			pattern: ["-n%","n%"]
		},
		currency: {
			pattern: ["-$n","$n"],
			decimals: 0,
			symbol: "Â¥"
		}
	},
	calendars: {
		standard: {
			days: {
				names: ["æ—¥æ›œæ—¥","æœˆæ›œæ—¥","ç«æ›œæ—¥","æ°´æ›œæ—¥","æœ¨æ›œæ—¥","é‡‘æ›œæ—¥","åœŸæ›œæ—¥"],
				namesAbbr: ["æ—¥","æœˆ","ç«","æ°´","æœ¨","é‡‘","åœŸ"],
				namesShort: ["æ—¥","æœˆ","ç«","æ°´","æœ¨","é‡‘","åœŸ"]
			},
			months: {
				names: ["1æœˆ","2æœˆ","3æœˆ","4æœˆ","5æœˆ","6æœˆ","7æœˆ","8æœˆ","9æœˆ","10æœˆ","11æœˆ","12æœˆ",""],
				namesAbbr: ["1","2","3","4","5","6","7","8","9","10","11","12",""]
			},
			AM: ["åˆå‰","åˆå‰","åˆå‰"],
			PM: ["åˆå¾Œ","åˆå¾Œ","åˆå¾Œ"],
			eras: [{"name":"è¥¿æš¦","start":null,"offset":0}],
			patterns: {
				d: "yyyy/MM/dd",
				D: "yyyy'å¹´'M'æœˆ'd'æ—¥'",
				t: "H:mm",
				T: "H:mm:ss",
				f: "yyyy'å¹´'M'æœˆ'd'æ—¥' H:mm",
				F: "yyyy'å¹´'M'æœˆ'd'æ—¥' H:mm:ss",
				M: "M'æœˆ'd'æ—¥'",
				Y: "yyyy'å¹´'M'æœˆ'"
			}
		},
		Japanese: {
			name: "Japanese",
			days: {
				names: ["æ—¥æ›œæ—¥","æœˆæ›œæ—¥","ç«æ›œæ—¥","æ°´æ›œæ—¥","æœ¨æ›œæ—¥","é‡‘æ›œæ—¥","åœŸæ›œæ—¥"],
				namesAbbr: ["æ—¥","æœˆ","ç«","æ°´","æœ¨","é‡‘","åœŸ"],
				namesShort: ["æ—¥","æœˆ","ç«","æ°´","æœ¨","é‡‘","åœŸ"]
			},
			months: {
				names: ["1æœˆ","2æœˆ","3æœˆ","4æœˆ","5æœˆ","6æœˆ","7æœˆ","8æœˆ","9æœˆ","10æœˆ","11æœˆ","12æœˆ",""],
				namesAbbr: ["1","2","3","4","5","6","7","8","9","10","11","12",""]
			},
			AM: ["åˆå‰","åˆå‰","åˆå‰"],
			PM: ["åˆå¾Œ","åˆå¾Œ","åˆå¾Œ"],
			eras: [{"name":"å¹³æˆ","start":null,"offset":1867},{"name":"æ˜­å’Œ","start":-1812153600000,"offset":1911},{"name":"å¤§æ­£","start":-1357603200000,"offset":1925},{"name":"æ˜Žæ²»","start":60022080000,"offset":1988}],
			twoDigitYearMax: 99,
			patterns: {
				d: "gg y/M/d",
				D: "gg y'å¹´'M'æœˆ'd'æ—¥'",
				t: "H:mm",
				T: "H:mm:ss",
				f: "gg y'å¹´'M'æœˆ'd'æ—¥' H:mm",
				F: "gg y'å¹´'M'æœˆ'd'æ—¥' H:mm:ss",
				M: "M'æœˆ'd'æ—¥'",
				Y: "gg y'å¹´'M'æœˆ'"
			}
		}
	}
});

}( this ));
