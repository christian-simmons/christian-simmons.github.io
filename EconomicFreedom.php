<title>EconomicFreedom</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>



<style type="text/css">
    /*!
*
* Twitter Bootstrap
*
*/
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot');
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 1.42857143;
  color: #000;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 3px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 18px;
  margin-bottom: 9px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 9px;
  margin-bottom: 9px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 33px;
}
h2,
.h2 {
  font-size: 27px;
}
h3,
.h3 {
  font-size: 23px;
}
h4,
.h4 {
  font-size: 17px;
}
h5,
.h5 {
  font-size: 13px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 19.5px;
  }
}
small,
.small {
  font-size: 92%;
}
mark,
.mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 9px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 541px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  font-size: inherit;
  border-left: 5px solid #eeeeee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 2px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #888;
  background-color: transparent;
  border-radius: 1px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 2px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
@media (min-width: 768px) {
  .container {
    width: 768px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 940px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1140px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
.row {
  margin-left: 0px;
  margin-right: 0px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 0px;
  padding-right: 0px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 18px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 13.5px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  border: 0;
  background-color: transparent;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eeeeee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 32px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 45px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 18px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 31px;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 30px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-lg {
  height: 45px;
  line-height: 45px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.form-group-lg select.form-control {
  height: 45px;
  line-height: 45px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 45px;
  min-height: 35px;
  padding: 11px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 40px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 45px;
  height: 45px;
  line-height: 45px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 23px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #404040;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 25px;
}
.form-horizontal .form-group {
  margin-left: 0px;
  margin-right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 17px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  border-radius: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 2px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 541px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  line-height: 45px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 2px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 1px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 17px;
  border-radius: 3px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #777777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 2px 2px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 2px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 30px;
  margin-bottom: 18px;
  border: 1px solid transparent;
}
@media (min-width: 541px) {
  .navbar {
    border-radius: 2px;
  }
}
@media (min-width: 541px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 0px;
  padding-left: 0px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 541px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 540px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: 0px;
  margin-left: 0px;
}
@media (min-width: 541px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 541px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 541px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 6px 0px;
  font-size: 17px;
  line-height: 18px;
  height: 30px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 541px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 0px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 0px;
  padding: 9px 10px;
  margin-top: -2px;
  margin-bottom: -2px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 2px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 541px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 3px 0px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 18px;
}
@media (max-width: 540px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 18px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 541px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 6px;
    padding-bottom: 6px;
  }
}
.navbar-form {
  margin-left: 0px;
  margin-right: 0px;
  padding: 10px 0px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: -1px;
  margin-bottom: -1px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 540px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 541px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: -1px;
  margin-bottom: -1px;
}
.navbar-btn.btn-sm {
  margin-top: 0px;
  margin-bottom: 0px;
}
.navbar-btn.btn-xs {
  margin-top: 4px;
  margin-bottom: 4px;
}
.navbar-text {
  margin-top: 6px;
  margin-bottom: 6px;
}
@media (min-width: 541px) {
  .navbar-text {
    float: left;
    margin-left: 0px;
    margin-right: 0px;
  }
}
@media (min-width: 541px) {
  .navbar-left {
    float: left !important;
    float: left;
  }
  .navbar-right {
    float: right !important;
    float: right;
    margin-right: 0px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 540px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #fff;
}
@media (max-width: 540px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 2px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #5e5e5e;
}
.breadcrumb > .active {
  color: #777777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 2px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 1px;
  border-top-left-radius: 1px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 1px;
  border-top-right-radius: 1px;
}
.pager {
  padding-left: 0;
  margin: 18px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777777;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  line-height: 1;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 3px;
  padding-left: 0px;
  padding-right: 0px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 59px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 18px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #000;
}
.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 2px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: #f5f5f5;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 18px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  zoom: 1;
  overflow: hidden;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 18px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 2px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 1px;
  border-top-right-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 1px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 1px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 18px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 2px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 3px;
}
.well-sm {
  padding: 9px;
  border-radius: 1px;
}
.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 12px;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 2px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 13px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 13px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 2px 2px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -moz-transition: -moz-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    -moz-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  margin-top: -10px;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  line-height: 1;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after,
.item_buttons:before,
.item_buttons:after {
  content: " ";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after,
.item_buttons:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*!
*
* Font Awesome
*
*/
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../components/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../components/font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../components/font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../components/font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-handshake-o:before {
  content: "\f2b5";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-o:before {
  content: "\f2b7";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-book-o:before {
  content: "\f2ba";
}
.fa-vcard:before,
.fa-address-card:before {
  content: "\f2bb";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: "\f2bc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-circle-o:before {
  content: "\f2be";
}
.fa-user-o:before {
  content: "\f2c0";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: "\f2c3";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: "\f2cd";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f2d3";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: "\f2d4";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-eercast:before {
  content: "\f2da";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-snowflake-o:before {
  content: "\f2dc";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-meetup:before {
  content: "\f2e0";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
/*!
*
* IPython base
*
*/
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
code {
  color: #000;
}
pre {
  font-size: inherit;
  line-height: inherit;
}
label {
  font-weight: normal;
}
/* Make the page background atleast 100% the height of the view port */
/* Make the page itself atleast 70% the height of the view port */
.border-box-sizing {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.corner-all {
  border-radius: 2px;
}
.no-padding {
  padding: 0px;
}
/* Flexible box model classes */
/* Taken from Alex Russell http://infrequently.org/2009/08/css-3-progress/ */
/* This file is a compatability layer.  It allows the usage of flexible box 
model layouts accross multiple browsers, including older browsers.  The newest,
universal implementation of the flexible box model is used when available (see
`Modern browsers` comments below).  Browsers that are known to implement this 
new spec completely include:

    Firefox 28.0+
    Chrome 29.0+
    Internet Explorer 11+ 
    Opera 17.0+

Browsers not listed, including Safari, are supported via the styling under the
`Old browsers` comments below.
*/
.hbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
.hbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.vbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
.vbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.hbox.reverse,
.vbox.reverse,
.reverse {
  /* Old browsers */
  -webkit-box-direction: reverse;
  -moz-box-direction: reverse;
  box-direction: reverse;
  /* Modern browsers */
  flex-direction: row-reverse;
}
.hbox.box-flex0,
.vbox.box-flex0,
.box-flex0 {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
  width: auto;
}
.hbox.box-flex1,
.vbox.box-flex1,
.box-flex1 {
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex,
.vbox.box-flex,
.box-flex {
  /* Old browsers */
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex2,
.vbox.box-flex2,
.box-flex2 {
  /* Old browsers */
  -webkit-box-flex: 2;
  -moz-box-flex: 2;
  box-flex: 2;
  /* Modern browsers */
  flex: 2;
}
.box-group1 {
  /*  Deprecated */
  -webkit-box-flex-group: 1;
  -moz-box-flex-group: 1;
  box-flex-group: 1;
}
.box-group2 {
  /* Deprecated */
  -webkit-box-flex-group: 2;
  -moz-box-flex-group: 2;
  box-flex-group: 2;
}
.hbox.start,
.vbox.start,
.start {
  /* Old browsers */
  -webkit-box-pack: start;
  -moz-box-pack: start;
  box-pack: start;
  /* Modern browsers */
  justify-content: flex-start;
}
.hbox.end,
.vbox.end,
.end {
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
}
.hbox.center,
.vbox.center,
.center {
  /* Old browsers */
  -webkit-box-pack: center;
  -moz-box-pack: center;
  box-pack: center;
  /* Modern browsers */
  justify-content: center;
}
.hbox.baseline,
.vbox.baseline,
.baseline {
  /* Old browsers */
  -webkit-box-pack: baseline;
  -moz-box-pack: baseline;
  box-pack: baseline;
  /* Modern browsers */
  justify-content: baseline;
}
.hbox.stretch,
.vbox.stretch,
.stretch {
  /* Old browsers */
  -webkit-box-pack: stretch;
  -moz-box-pack: stretch;
  box-pack: stretch;
  /* Modern browsers */
  justify-content: stretch;
}
.hbox.align-start,
.vbox.align-start,
.align-start {
  /* Old browsers */
  -webkit-box-align: start;
  -moz-box-align: start;
  box-align: start;
  /* Modern browsers */
  align-items: flex-start;
}
.hbox.align-end,
.vbox.align-end,
.align-end {
  /* Old browsers */
  -webkit-box-align: end;
  -moz-box-align: end;
  box-align: end;
  /* Modern browsers */
  align-items: flex-end;
}
.hbox.align-center,
.vbox.align-center,
.align-center {
  /* Old browsers */
  -webkit-box-align: center;
  -moz-box-align: center;
  box-align: center;
  /* Modern browsers */
  align-items: center;
}
.hbox.align-baseline,
.vbox.align-baseline,
.align-baseline {
  /* Old browsers */
  -webkit-box-align: baseline;
  -moz-box-align: baseline;
  box-align: baseline;
  /* Modern browsers */
  align-items: baseline;
}
.hbox.align-stretch,
.vbox.align-stretch,
.align-stretch {
  /* Old browsers */
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  box-align: stretch;
  /* Modern browsers */
  align-items: stretch;
}
div.error {
  margin: 2em;
  text-align: center;
}
div.error > h1 {
  font-size: 500%;
  line-height: normal;
}
div.error > p {
  font-size: 200%;
  line-height: normal;
}
div.traceback-wrapper {
  text-align: left;
  max-width: 800px;
  margin: auto;
}
div.traceback-wrapper pre.traceback {
  max-height: 600px;
  overflow: auto;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
body {
  background-color: #fff;
  /* This makes sure that the body covers the entire window and needs to
       be in a different element than the display: box in wrapper below */
  position: absolute;
  left: 0px;
  right: 0px;
  top: 0px;
  bottom: 0px;
  overflow: visible;
}
body > #header {
  /* Initially hidden to prevent FLOUC */
  display: none;
  background-color: #fff;
  /* Display over codemirror */
  position: relative;
  z-index: 100;
}
body > #header #header-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 5px;
  padding-bottom: 5px;
  padding-top: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
body > #header .header-bar {
  width: 100%;
  height: 1px;
  background: #e7e7e7;
  margin-bottom: -1px;
}
@media print {
  body > #header {
    display: none !important;
  }
}
#header-spacer {
  width: 100%;
  visibility: hidden;
}
@media print {
  #header-spacer {
    display: none;
  }
}
#ipython_notebook {
  padding-left: 0px;
  padding-top: 1px;
  padding-bottom: 1px;
}
[dir="rtl"] #ipython_notebook {
  margin-right: 10px;
  margin-left: 0;
}
[dir="rtl"] #ipython_notebook.pull-left {
  float: right !important;
  float: right;
}
.flex-spacer {
  flex: 1;
}
#noscript {
  width: auto;
  padding-top: 16px;
  padding-bottom: 16px;
  text-align: center;
  font-size: 22px;
  color: red;
  font-weight: bold;
}
#ipython_notebook img {
  height: 28px;
}
#site {
  width: 100%;
  display: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  overflow: auto;
}
@media print {
  #site {
    height: auto !important;
  }
}
/* Smaller buttons */
.ui-button .ui-button-text {
  padding: 0.2em 0.8em;
  font-size: 77%;
}
input.ui-button {
  padding: 0.3em 0.9em;
}
span#kernel_logo_widget {
  margin: 0 10px;
}
span#login_widget {
  float: right;
}
[dir="rtl"] span#login_widget {
  float: left;
}
span#login_widget > .button,
#logout {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button:focus,
#logout:focus,
span#login_widget > .button.focus,
#logout.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
span#login_widget > .button:hover,
#logout:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active:hover,
#logout:active:hover,
span#login_widget > .button.active:hover,
#logout.active:hover,
.open > .dropdown-togglespan#login_widget > .button:hover,
.open > .dropdown-toggle#logout:hover,
span#login_widget > .button:active:focus,
#logout:active:focus,
span#login_widget > .button.active:focus,
#logout.active:focus,
.open > .dropdown-togglespan#login_widget > .button:focus,
.open > .dropdown-toggle#logout:focus,
span#login_widget > .button:active.focus,
#logout:active.focus,
span#login_widget > .button.active.focus,
#logout.active.focus,
.open > .dropdown-togglespan#login_widget > .button.focus,
.open > .dropdown-toggle#logout.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  background-image: none;
}
span#login_widget > .button.disabled:hover,
#logout.disabled:hover,
span#login_widget > .button[disabled]:hover,
#logout[disabled]:hover,
fieldset[disabled] span#login_widget > .button:hover,
fieldset[disabled] #logout:hover,
span#login_widget > .button.disabled:focus,
#logout.disabled:focus,
span#login_widget > .button[disabled]:focus,
#logout[disabled]:focus,
fieldset[disabled] span#login_widget > .button:focus,
fieldset[disabled] #logout:focus,
span#login_widget > .button.disabled.focus,
#logout.disabled.focus,
span#login_widget > .button[disabled].focus,
#logout[disabled].focus,
fieldset[disabled] span#login_widget > .button.focus,
fieldset[disabled] #logout.focus {
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button .badge,
#logout .badge {
  color: #fff;
  background-color: #333;
}
.nav-header {
  text-transform: none;
}
#header > span {
  margin-top: 10px;
}
.modal_stretch .modal-dialog {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  min-height: 80vh;
}
.modal_stretch .modal-dialog .modal-body {
  max-height: calc(100vh - 200px);
  overflow: auto;
  flex: 1;
}
.modal-header {
  cursor: move;
}
@media (min-width: 768px) {
  .modal .modal-dialog {
    width: 700px;
  }
}
@media (min-width: 768px) {
  select.form-control {
    margin-left: 12px;
    margin-right: 12px;
  }
}
/*!
*
* IPython auth
*
*/
.center-nav {
  display: inline-block;
  margin-bottom: -4px;
}
[dir="rtl"] .center-nav form.pull-left {
  float: right !important;
  float: right;
}
[dir="rtl"] .center-nav .navbar-text {
  float: right;
}
[dir="rtl"] .navbar-inner {
  text-align: right;
}
[dir="rtl"] div.text-left {
  text-align: right;
}
/*!
*
* IPython tree view
*
*/
/* We need an invisible input field on top of the sentense*/
/* "Drag file onto the list ..." */
.alternate_upload {
  background-color: none;
  display: inline;
}
.alternate_upload.form {
  padding: 0;
  margin: 0;
}
.alternate_upload input.fileinput {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  overflow: hidden;
  cursor: pointer;
  opacity: 0;
  z-index: 2;
}
.alternate_upload .btn-xs > input.fileinput {
  margin: -1px -5px;
}
.alternate_upload .btn-upload {
  position: relative;
  height: 22px;
}
::-webkit-file-upload-button {
  cursor: pointer;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
ul#tabs {
  margin-bottom: 4px;
}
ul#tabs a {
  padding-top: 6px;
  padding-bottom: 4px;
}
[dir="rtl"] ul#tabs.nav-tabs > li {
  float: right;
}
[dir="rtl"] ul#tabs.nav.nav-tabs {
  padding-right: 0;
}
ul.breadcrumb a:focus,
ul.breadcrumb a:hover {
  text-decoration: none;
}
ul.breadcrumb i.icon-home {
  font-size: 16px;
  margin-right: 4px;
}
ul.breadcrumb span {
  color: #5e5e5e;
}
.list_toolbar {
  padding: 4px 0 4px 0;
  vertical-align: middle;
}
.list_toolbar .tree-buttons {
  padding-top: 1px;
}
[dir="rtl"] .list_toolbar .tree-buttons .pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .list_toolbar .col-sm-4,
[dir="rtl"] .list_toolbar .col-sm-8 {
  float: right;
}
.dynamic-buttons {
  padding-top: 3px;
  display: inline-block;
}
.list_toolbar [class*="span"] {
  min-height: 24px;
}
.list_header {
  font-weight: bold;
  background-color: #EEE;
}
.list_placeholder {
  font-weight: bold;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
}
.list_container {
  margin-top: 4px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 2px;
}
.list_container > div {
  border-bottom: 1px solid #ddd;
}
.list_container > div:hover .list-item {
  background-color: red;
}
.list_container > div:last-child {
  border: none;
}
.list_item:hover .list_item {
  background-color: #ddd;
}
.list_item a {
  text-decoration: none;
}
.list_item:hover {
  background-color: #fafafa;
}
.list_header > div,
.list_item > div {
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
.list_header > div input,
.list_item > div input {
  margin-right: 7px;
  margin-left: 14px;
  vertical-align: text-bottom;
  line-height: 22px;
  position: relative;
  top: -1px;
}
.list_header > div .item_link,
.list_item > div .item_link {
  margin-left: -1px;
  vertical-align: baseline;
  line-height: 22px;
}
[dir="rtl"] .list_item > div input {
  margin-right: 0;
}
.new-file input[type=checkbox] {
  visibility: hidden;
}
.item_name {
  line-height: 22px;
  height: 24px;
}
.item_icon {
  font-size: 14px;
  color: #5e5e5e;
  margin-right: 7px;
  margin-left: 7px;
  line-height: 22px;
  vertical-align: baseline;
}
.item_modified {
  margin-right: 7px;
  margin-left: 7px;
}
[dir="rtl"] .item_modified.pull-right {
  float: left !important;
  float: left;
}
.item_buttons {
  line-height: 1em;
  margin-left: -5px;
}
.item_buttons .btn,
.item_buttons .btn-group,
.item_buttons .input-group {
  float: left;
}
.item_buttons > .btn,
.item_buttons > .btn-group,
.item_buttons > .input-group {
  margin-left: 5px;
}
.item_buttons .btn {
  min-width: 13ex;
}
.item_buttons .running-indicator {
  padding-top: 4px;
  color: #5cb85c;
}
.item_buttons .kernel-name {
  padding-top: 4px;
  color: #5bc0de;
  margin-right: 7px;
  float: left;
}
[dir="rtl"] .item_buttons.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .item_buttons .kernel-name {
  margin-left: 7px;
  float: right;
}
.toolbar_info {
  height: 24px;
  line-height: 24px;
}
.list_item input:not([type=checkbox]) {
  padding-top: 3px;
  padding-bottom: 3px;
  height: 22px;
  line-height: 14px;
  margin: 0px;
}
.highlight_text {
  color: blue;
}
#project_name {
  display: inline-block;
  padding-left: 7px;
  margin-left: -2px;
}
#project_name > .breadcrumb {
  padding: 0px;
  margin-bottom: 0px;
  background-color: transparent;
  font-weight: bold;
}
.sort_button {
  display: inline-block;
  padding-left: 7px;
}
[dir="rtl"] .sort_button.pull-right {
  float: left !important;
  float: left;
}
#tree-selector {
  padding-right: 0px;
}
#button-select-all {
  min-width: 50px;
}
[dir="rtl"] #button-select-all.btn {
  float: right ;
}
#select-all {
  margin-left: 7px;
  margin-right: 2px;
  margin-top: 2px;
  height: 16px;
}
[dir="rtl"] #select-all.pull-left {
  float: right !important;
  float: right;
}
.menu_icon {
  margin-right: 2px;
}
.tab-content .row {
  margin-left: 0px;
  margin-right: 0px;
}
.folder_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f114";
}
.folder_icon:before.fa-pull-left {
  margin-right: .3em;
}
.folder_icon:before.fa-pull-right {
  margin-left: .3em;
}
.folder_icon:before.pull-left {
  margin-right: .3em;
}
.folder_icon:before.pull-right {
  margin-left: .3em;
}
.notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
}
.notebook_icon:before.fa-pull-left {
  margin-right: .3em;
}
.notebook_icon:before.fa-pull-right {
  margin-left: .3em;
}
.notebook_icon:before.pull-left {
  margin-right: .3em;
}
.notebook_icon:before.pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
  color: #5cb85c;
}
.running_notebook_icon:before.fa-pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.fa-pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before.pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.pull-right {
  margin-left: .3em;
}
.file_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f016";
  position: relative;
  top: -2px;
}
.file_icon:before.fa-pull-left {
  margin-right: .3em;
}
.file_icon:before.fa-pull-right {
  margin-left: .3em;
}
.file_icon:before.pull-left {
  margin-right: .3em;
}
.file_icon:before.pull-right {
  margin-left: .3em;
}
#notebook_toolbar .pull-right {
  padding-top: 0px;
  margin-right: -1px;
}
ul#new-menu {
  left: auto;
  right: 0;
}
#new-menu .dropdown-header {
  font-size: 10px;
  border-bottom: 1px solid #e5e5e5;
  padding: 0 0 3px;
  margin: -3px 20px 0;
}
.kernel-menu-icon {
  padding-right: 12px;
  width: 24px;
  content: "\f096";
}
.kernel-menu-icon:before {
  content: "\f096";
}
.kernel-menu-icon-current:before {
  content: "\f00c";
}
#tab_content {
  padding-top: 20px;
}
#running .panel-group .panel {
  margin-top: 3px;
  margin-bottom: 1em;
}
#running .panel-group .panel .panel-heading {
  background-color: #EEE;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
#running .panel-group .panel .panel-heading a:focus,
#running .panel-group .panel .panel-heading a:hover {
  text-decoration: none;
}
#running .panel-group .panel .panel-body {
  padding: 0px;
}
#running .panel-group .panel .panel-body .list_container {
  margin-top: 0px;
  margin-bottom: 0px;
  border: 0px;
  border-radius: 0px;
}
#running .panel-group .panel .panel-body .list_container .list_item {
  border-bottom: 1px solid #ddd;
}
#running .panel-group .panel .panel-body .list_container .list_item:last-child {
  border-bottom: 0px;
}
.delete-button {
  display: none;
}
.duplicate-button {
  display: none;
}
.rename-button {
  display: none;
}
.move-button {
  display: none;
}
.download-button {
  display: none;
}
.shutdown-button {
  display: none;
}
.dynamic-instructions {
  display: inline-block;
  padding-top: 4px;
}
/*!
*
* IPython text editor webapp
*
*/
.selected-keymap i.fa {
  padding: 0px 5px;
}
.selected-keymap i.fa:before {
  content: "\f00c";
}
#mode-menu {
  overflow: auto;
  max-height: 20em;
}
.edit_app #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.edit_app #menubar .navbar {
  /* Use a negative 1 bottom margin, so the border overlaps the border of the
    header */
  margin-bottom: -1px;
}
.dirty-indicator {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator.pull-left {
  margin-right: .3em;
}
.dirty-indicator.pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-dirty.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty.pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-clean.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00c";
}
.dirty-indicator-clean:before.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.pull-right {
  margin-left: .3em;
}
#filename {
  font-size: 16pt;
  display: table;
  padding: 0px 5px;
}
#current-mode {
  padding-left: 5px;
  padding-right: 5px;
}
#texteditor-backdrop {
  padding-top: 20px;
  padding-bottom: 20px;
}
@media not print {
  #texteditor-backdrop {
    background-color: #EEE;
  }
}
@media print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container {
    padding: 0px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
.CodeMirror-dialog {
  background-color: #fff;
}
/*!
*
* IPython notebook
*
*/
/* CSS font colors for translated ANSI escape sequences */
/* The color values are a mix of
   http://www.xcolors.net/dl/baskerville-ivorylight and
   http://www.xcolors.net/dl/euphrasia */
.ansi-black-fg {
  color: #3E424D;
}
.ansi-black-bg {
  background-color: #3E424D;
}
.ansi-black-intense-fg {
  color: #282C36;
}
.ansi-black-intense-bg {
  background-color: #282C36;
}
.ansi-red-fg {
  color: #E75C58;
}
.ansi-red-bg {
  background-color: #E75C58;
}
.ansi-red-intense-fg {
  color: #B22B31;
}
.ansi-red-intense-bg {
  background-color: #B22B31;
}
.ansi-green-fg {
  color: #00A250;
}
.ansi-green-bg {
  background-color: #00A250;
}
.ansi-green-intense-fg {
  color: #007427;
}
.ansi-green-intense-bg {
  background-color: #007427;
}
.ansi-yellow-fg {
  color: #DDB62B;
}
.ansi-yellow-bg {
  background-color: #DDB62B;
}
.ansi-yellow-intense-fg {
  color: #B27D12;
}
.ansi-yellow-intense-bg {
  background-color: #B27D12;
}
.ansi-blue-fg {
  color: #208FFB;
}
.ansi-blue-bg {
  background-color: #208FFB;
}
.ansi-blue-intense-fg {
  color: #0065CA;
}
.ansi-blue-intense-bg {
  background-color: #0065CA;
}
.ansi-magenta-fg {
  color: #D160C4;
}
.ansi-magenta-bg {
  background-color: #D160C4;
}
.ansi-magenta-intense-fg {
  color: #A03196;
}
.ansi-magenta-intense-bg {
  background-color: #A03196;
}
.ansi-cyan-fg {
  color: #60C6C8;
}
.ansi-cyan-bg {
  background-color: #60C6C8;
}
.ansi-cyan-intense-fg {
  color: #258F8F;
}
.ansi-cyan-intense-bg {
  background-color: #258F8F;
}
.ansi-white-fg {
  color: #C5C1B4;
}
.ansi-white-bg {
  background-color: #C5C1B4;
}
.ansi-white-intense-fg {
  color: #A1A6B2;
}
.ansi-white-intense-bg {
  background-color: #A1A6B2;
}
.ansi-default-inverse-fg {
  color: #FFFFFF;
}
.ansi-default-inverse-bg {
  background-color: #000000;
}
.ansi-bold {
  font-weight: bold;
}
.ansi-underline {
  text-decoration: underline;
}
/* The following styles are deprecated an will be removed in a future version */
.ansibold {
  font-weight: bold;
}
.ansi-inverse {
  outline: 0.5px dotted;
}
/* use dark versions for foreground, to improve visibility */
.ansiblack {
  color: black;
}
.ansired {
  color: darkred;
}
.ansigreen {
  color: darkgreen;
}
.ansiyellow {
  color: #c4a000;
}
.ansiblue {
  color: darkblue;
}
.ansipurple {
  color: darkviolet;
}
.ansicyan {
  color: steelblue;
}
.ansigray {
  color: gray;
}
/* and light for background, for the same reason */
.ansibgblack {
  background-color: black;
}
.ansibgred {
  background-color: red;
}
.ansibggreen {
  background-color: green;
}
.ansibgyellow {
  background-color: yellow;
}
.ansibgblue {
  background-color: blue;
}
.ansibgpurple {
  background-color: magenta;
}
.ansibgcyan {
  background-color: cyan;
}
.ansibggray {
  background-color: gray;
}
div.cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  border-radius: 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  border-width: 1px;
  border-style: solid;
  border-color: transparent;
  width: 100%;
  padding: 5px;
  /* This acts as a spacer between cells, that is outside the border */
  margin: 0px;
  outline: none;
  position: relative;
  overflow: visible;
}
div.cell:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: transparent;
}
div.cell.jupyter-soft-selected {
  border-left-color: #E3F2FD;
  border-left-width: 1px;
  padding-left: 5px;
  border-right-color: #E3F2FD;
  border-right-width: 1px;
  background: #E3F2FD;
}
@media print {
  div.cell.jupyter-soft-selected {
    border-color: transparent;
  }
}
div.cell.selected,
div.cell.selected.jupyter-soft-selected {
  border-color: #ababab;
}
div.cell.selected:before,
div.cell.selected.jupyter-soft-selected:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: #42A5F5;
}
@media print {
  div.cell.selected,
  div.cell.selected.jupyter-soft-selected {
    border-color: transparent;
  }
}
.edit_mode div.cell.selected {
  border-color: #66BB6A;
}
.edit_mode div.cell.selected:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: #66BB6A;
}
@media print {
  .edit_mode div.cell.selected {
    border-color: transparent;
  }
}
.prompt {
  /* This needs to be wide enough for 3 digit prompt numbers: In[100]: */
  min-width: 14ex;
  /* This padding is tuned to match the padding on the CodeMirror editor. */
  padding: 0.4em;
  margin: 0px;
  font-family: monospace;
  text-align: right;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
  /* Don't highlight prompt number selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* Use default cursor */
  cursor: default;
}
@media (max-width: 540px) {
  .prompt {
    text-align: left;
  }
}
div.inner_cell {
  min-width: 0;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_area {
  border: 1px solid #cfcfcf;
  border-radius: 2px;
  background: #f7f7f7;
  line-height: 1.21429em;
}
/* This is needed so that empty prompt areas can collapse to zero height when there
   is no content in the output_subarea and the prompt. The main purpose of this is
   to make sure that empty JavaScript output_subareas have no height. */
div.prompt:empty {
  padding-top: 0;
  padding-bottom: 0;
}
div.unrecognized_cell {
  padding: 5px 5px 5px 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.unrecognized_cell .inner_cell {
  border-radius: 2px;
  padding: 5px;
  font-weight: bold;
  color: red;
  border: 1px solid #cfcfcf;
  background: #eaeaea;
}
div.unrecognized_cell .inner_cell a {
  color: inherit;
  text-decoration: none;
}
div.unrecognized_cell .inner_cell a:hover {
  color: inherit;
  text-decoration: none;
}
@media (max-width: 540px) {
  div.unrecognized_cell > div.prompt {
    display: none;
  }
}
div.code_cell {
  /* avoid page breaking on code cells when printing */
}
@media print {
  div.code_cell {
    page-break-inside: avoid;
  }
}
/* any special styling for code cells that are currently running goes here */
div.input {
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.input {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_prompt {
  color: #303F9F;
  border-top: 1px solid transparent;
}
div.input_area > div.highlight {
  margin: 0.4em;
  border: none;
  padding: 0px;
  background-color: transparent;
}
div.input_area > div.highlight > pre {
  margin: 0px;
  border: none;
  padding: 0px;
  background-color: transparent;
}
/* The following gets added to the <head> if it is detected that the user has a
 * monospace font with inconsistent normal/bold/italic height.  See
 * notebookmain.js.  Such fonts will have keywords vertically offset with
 * respect to the rest of the text.  The user should select a better font.
 * See: https://github.com/ipython/ipython/issues/1503
 *
 * .CodeMirror span {
 *      vertical-align: bottom;
 * }
 */
.CodeMirror {
  line-height: 1.21429em;
  /* Changed from 1em to our global default */
  font-size: 14px;
  height: auto;
  /* Changed to auto to autogrow */
  background: none;
  /* Changed from white to allow our bg to show through */
}
.CodeMirror-scroll {
  /*  The CodeMirror docs are a bit fuzzy on if overflow-y should be hidden or visible.*/
  /*  We have found that if it is visible, vertical scrollbars appear with font size changes.*/
  overflow-y: hidden;
  overflow-x: auto;
}
.CodeMirror-lines {
  /* In CM2, this used to be 0.4em, but in CM3 it went to 4px. We need the em value because */
  /* we have set a different line-height and want this to scale with that. */
  /* Note that this should set vertical padding only, since CodeMirror assumes
       that horizontal padding will be set on CodeMirror pre */
  padding: 0.4em 0;
}
.CodeMirror-linenumber {
  padding: 0 8px 0 4px;
}
.CodeMirror-gutters {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.CodeMirror pre {
  /* In CM3 this went to 4px from 0 in CM2. This sets horizontal padding only,
    use .CodeMirror-lines for vertical */
  padding: 0 0.4em;
  border: 0;
  border-radius: 0;
}
.CodeMirror-cursor {
  border-left: 1.4px solid black;
}
@media screen and (min-width: 2138px) and (max-width: 4319px) {
  .CodeMirror-cursor {
    border-left: 2px solid black;
  }
}
@media screen and (min-width: 4320px) {
  .CodeMirror-cursor {
    border-left: 4px solid black;
  }
}
/*

Original style from softwaremaniacs.org (c) Ivan Sagalaev <Maniac@SoftwareManiacs.Org>
Adapted from GitHub theme

*/
.highlight-base {
  color: #000;
}
.highlight-variable {
  color: #000;
}
.highlight-variable-2 {
  color: #1a1a1a;
}
.highlight-variable-3 {
  color: #333333;
}
.highlight-string {
  color: #BA2121;
}
.highlight-comment {
  color: #408080;
  font-style: italic;
}
.highlight-number {
  color: #080;
}
.highlight-atom {
  color: #88F;
}
.highlight-keyword {
  color: #008000;
  font-weight: bold;
}
.highlight-builtin {
  color: #008000;
}
.highlight-error {
  color: #f00;
}
.highlight-operator {
  color: #AA22FF;
  font-weight: bold;
}
.highlight-meta {
  color: #AA22FF;
}
/* previously not defined, copying from default codemirror */
.highlight-def {
  color: #00f;
}
.highlight-string-2 {
  color: #f50;
}
.highlight-qualifier {
  color: #555;
}
.highlight-bracket {
  color: #997;
}
.highlight-tag {
  color: #170;
}
.highlight-attribute {
  color: #00c;
}
.highlight-header {
  color: blue;
}
.highlight-quote {
  color: #090;
}
.highlight-link {
  color: #00c;
}
/* apply the same style to codemirror */
.cm-s-ipython span.cm-keyword {
  color: #008000;
  font-weight: bold;
}
.cm-s-ipython span.cm-atom {
  color: #88F;
}
.cm-s-ipython span.cm-number {
  color: #080;
}
.cm-s-ipython span.cm-def {
  color: #00f;
}
.cm-s-ipython span.cm-variable {
  color: #000;
}
.cm-s-ipython span.cm-operator {
  color: #AA22FF;
  font-weight: bold;
}
.cm-s-ipython span.cm-variable-2 {
  color: #1a1a1a;
}
.cm-s-ipython span.cm-variable-3 {
  color: #333333;
}
.cm-s-ipython span.cm-comment {
  color: #408080;
  font-style: italic;
}
.cm-s-ipython span.cm-string {
  color: #BA2121;
}
.cm-s-ipython span.cm-string-2 {
  color: #f50;
}
.cm-s-ipython span.cm-meta {
  color: #AA22FF;
}
.cm-s-ipython span.cm-qualifier {
  color: #555;
}
.cm-s-ipython span.cm-builtin {
  color: #008000;
}
.cm-s-ipython span.cm-bracket {
  color: #997;
}
.cm-s-ipython span.cm-tag {
  color: #170;
}
.cm-s-ipython span.cm-attribute {
  color: #00c;
}
.cm-s-ipython span.cm-header {
  color: blue;
}
.cm-s-ipython span.cm-quote {
  color: #090;
}
.cm-s-ipython span.cm-link {
  color: #00c;
}
.cm-s-ipython span.cm-error {
  color: #f00;
}
.cm-s-ipython span.cm-tab {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAMCAYAAAAkuj5RAAAAAXNSR0IArs4c6QAAAGFJREFUSMft1LsRQFAQheHPowAKoACx3IgEKtaEHujDjORSgWTH/ZOdnZOcM/sgk/kFFWY0qV8foQwS4MKBCS3qR6ixBJvElOobYAtivseIE120FaowJPN75GMu8j/LfMwNjh4HUpwg4LUAAAAASUVORK5CYII=);
  background-position: right;
  background-repeat: no-repeat;
}
div.output_wrapper {
  /* this position must be relative to enable descendents to be absolute within it */
  position: relative;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  z-index: 1;
}
/* class for the output area when it should be height-limited */
div.output_scroll {
  /* ideally, this would be max-height, but FF barfs all over that */
  height: 24em;
  /* FF needs this *and the wrapper* to specify full width, or it will shrinkwrap */
  width: 100%;
  overflow: auto;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  display: block;
}
/* output div while it is collapsed */
div.output_collapsed {
  margin: 0px;
  padding: 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
div.out_prompt_overlay {
  height: 100%;
  padding: 0px 0.4em;
  position: absolute;
  border-radius: 2px;
}
div.out_prompt_overlay:hover {
  /* use inner shadow to get border that is computed the same on WebKit/FF */
  -webkit-box-shadow: inset 0 0 1px #000;
  box-shadow: inset 0 0 1px #000;
  background: rgba(240, 240, 240, 0.5);
}
div.output_prompt {
  color: #D84315;
}
/* This class is the outer container of all output sections. */
div.output_area {
  padding: 0px;
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.output_area .MathJax_Display {
  text-align: left !important;
}
div.output_area .rendered_html table {
  margin-left: 0;
  margin-right: 0;
}
div.output_area .rendered_html img {
  margin-left: 0;
  margin-right: 0;
}
div.output_area img,
div.output_area svg {
  max-width: 100%;
  height: auto;
}
div.output_area img.unconfined,
div.output_area svg.unconfined {
  max-width: none;
}
div.output_area .mglyph > img {
  max-width: none;
}
/* This is needed to protect the pre formating from global settings such
   as that of bootstrap */
.output {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.output_area {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
div.output_area pre {
  margin: 0;
  padding: 1px 0 1px 0;
  border: 0;
  vertical-align: baseline;
  color: black;
  background-color: transparent;
  border-radius: 0;
}
/* This class is for the output subarea inside the output_area and after
   the prompt div. */
div.output_subarea {
  overflow-x: auto;
  padding: 0.4em;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
  max-width: calc(100% - 14ex);
}
div.output_scroll div.output_subarea {
  overflow-x: visible;
}
/* The rest of the output_* classes are for special styling of the different
   output types */
/* all text output has this class: */
div.output_text {
  text-align: left;
  color: #000;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
}
/* stdout/stderr are 'text' as well as 'stream', but execute_result/error are *not* streams */
div.output_stderr {
  background: #fdd;
  /* very light red background for stderr */
}
div.output_latex {
  text-align: left;
}
/* Empty output_javascript divs should have no height */
div.output_javascript:empty {
  padding: 0;
}
.js-error {
  color: darkred;
}
/* raw_input styles */
div.raw_input_container {
  line-height: 1.21429em;
  padding-top: 5px;
}
pre.raw_input_prompt {
  /* nothing needed here. */
}
input.raw_input {
  font-family: monospace;
  font-size: inherit;
  color: inherit;
  width: auto;
  /* make sure input baseline aligns with prompt */
  vertical-align: baseline;
  /* padding + margin = 0.5em between prompt and cursor */
  padding: 0em 0.25em;
  margin: 0em 0.25em;
}
input.raw_input:focus {
  box-shadow: none;
}
p.p-space {
  margin-bottom: 10px;
}
div.output_unrecognized {
  padding: 5px;
  font-weight: bold;
  color: red;
}
div.output_unrecognized a {
  color: inherit;
  text-decoration: none;
}
div.output_unrecognized a:hover {
  color: inherit;
  text-decoration: none;
}
.rendered_html {
  color: #000;
  /* any extras will just be numbers: */
}
.rendered_html em {
  font-style: italic;
}
.rendered_html strong {
  font-weight: bold;
}
.rendered_html u {
  text-decoration: underline;
}
.rendered_html :link {
  text-decoration: underline;
}
.rendered_html :visited {
  text-decoration: underline;
}
.rendered_html h1 {
  font-size: 185.7%;
  margin: 1.08em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h2 {
  font-size: 157.1%;
  margin: 1.27em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h3 {
  font-size: 128.6%;
  margin: 1.55em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h4 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h5 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h6 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h1:first-child {
  margin-top: 0.538em;
}
.rendered_html h2:first-child {
  margin-top: 0.636em;
}
.rendered_html h3:first-child {
  margin-top: 0.777em;
}
.rendered_html h4:first-child {
  margin-top: 1em;
}
.rendered_html h5:first-child {
  margin-top: 1em;
}
.rendered_html h6:first-child {
  margin-top: 1em;
}
.rendered_html ul:not(.list-inline),
.rendered_html ol:not(.list-inline) {
  padding-left: 2em;
}
.rendered_html ul {
  list-style: disc;
}
.rendered_html ul ul {
  list-style: square;
  margin-top: 0;
}
.rendered_html ul ul ul {
  list-style: circle;
}
.rendered_html ol {
  list-style: decimal;
}
.rendered_html ol ol {
  list-style: upper-alpha;
  margin-top: 0;
}
.rendered_html ol ol ol {
  list-style: lower-alpha;
}
.rendered_html ol ol ol ol {
  list-style: lower-roman;
}
.rendered_html ol ol ol ol ol {
  list-style: decimal;
}
.rendered_html * + ul {
  margin-top: 1em;
}
.rendered_html * + ol {
  margin-top: 1em;
}
.rendered_html hr {
  color: black;
  background-color: black;
}
.rendered_html pre {
  margin: 1em 2em;
  padding: 0px;
  background-color: #fff;
}
.rendered_html code {
  background-color: #eff0f1;
}
.rendered_html p code {
  padding: 1px 5px;
}
.rendered_html pre code {
  background-color: #fff;
}
.rendered_html pre,
.rendered_html code {
  border: 0;
  color: #000;
  font-size: 100%;
}
.rendered_html blockquote {
  margin: 1em 2em;
}
.rendered_html table {
  margin-left: auto;
  margin-right: auto;
  border: none;
  border-collapse: collapse;
  border-spacing: 0;
  color: black;
  font-size: 12px;
  table-layout: fixed;
}
.rendered_html thead {
  border-bottom: 1px solid black;
  vertical-align: bottom;
}
.rendered_html tr,
.rendered_html th,
.rendered_html td {
  text-align: right;
  vertical-align: middle;
  padding: 0.5em 0.5em;
  line-height: normal;
  white-space: normal;
  max-width: none;
  border: none;
}
.rendered_html th {
  font-weight: bold;
}
.rendered_html tbody tr:nth-child(odd) {
  background: #f5f5f5;
}
.rendered_html tbody tr:hover {
  background: rgba(66, 165, 245, 0.2);
}
.rendered_html * + table {
  margin-top: 1em;
}
.rendered_html p {
  text-align: left;
}
.rendered_html * + p {
  margin-top: 1em;
}
.rendered_html img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.rendered_html * + img {
  margin-top: 1em;
}
.rendered_html img,
.rendered_html svg {
  max-width: 100%;
  height: auto;
}
.rendered_html img.unconfined,
.rendered_html svg.unconfined {
  max-width: none;
}
.rendered_html .alert {
  margin-bottom: initial;
}
.rendered_html * + .alert {
  margin-top: 1em;
}
[dir="rtl"] .rendered_html p {
  text-align: right;
}
div.text_cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.text_cell > div.prompt {
    display: none;
  }
}
div.text_cell_render {
  /*font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;*/
  outline: none;
  resize: none;
  width: inherit;
  border-style: none;
  padding: 0.5em 0.5em 0.5em 0.4em;
  color: #000;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
a.anchor-link:link {
  text-decoration: none;
  padding: 0px 20px;
  visibility: hidden;
}
h1:hover .anchor-link,
h2:hover .anchor-link,
h3:hover .anchor-link,
h4:hover .anchor-link,
h5:hover .anchor-link,
h6:hover .anchor-link {
  visibility: visible;
}
.text_cell.rendered .input_area {
  display: none;
}
.text_cell.rendered .rendered_html {
  overflow-x: auto;
  overflow-y: hidden;
}
.text_cell.rendered .rendered_html tr,
.text_cell.rendered .rendered_html th,
.text_cell.rendered .rendered_html td {
  max-width: none;
}
.text_cell.unrendered .text_cell_render {
  display: none;
}
.text_cell .dropzone .input_area {
  border: 2px dashed #bababa;
  margin: -1px;
}
.cm-header-1,
.cm-header-2,
.cm-header-3,
.cm-header-4,
.cm-header-5,
.cm-header-6 {
  font-weight: bold;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.cm-header-1 {
  font-size: 185.7%;
}
.cm-header-2 {
  font-size: 157.1%;
}
.cm-header-3 {
  font-size: 128.6%;
}
.cm-header-4 {
  font-size: 110%;
}
.cm-header-5 {
  font-size: 100%;
  font-style: italic;
}
.cm-header-6 {
  font-size: 100%;
  font-style: italic;
}
/*!
*
* IPython notebook webapp
*
*/
@media (max-width: 767px) {
  .notebook_app {
    padding-left: 0px;
    padding-right: 0px;
  }
}
#ipython-main-app {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook_panel {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook {
  font-size: 14px;
  line-height: 20px;
  overflow-y: hidden;
  overflow-x: auto;
  width: 100%;
  /* This spaces the page away from the edge of the notebook area */
  padding-top: 20px;
  margin: 0px;
  outline: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  min-height: 100%;
}
@media not print {
  #notebook-container {
    padding: 15px;
    background-color: #fff;
    min-height: 0;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
@media print {
  #notebook-container {
    width: 100%;
  }
}
div.ui-widget-content {
  border: 1px solid #ababab;
  outline: none;
}
pre.dialog {
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 0.4em;
  padding-left: 2em;
}
p.dialog {
  padding: 0.2em;
}
/* Word-wrap output correctly.  This is the CSS3 spelling, though Firefox seems
   to not honor it correctly.  Webkit browsers (Chrome, rekonq, Safari) do.
 */
pre,
code,
kbd,
samp {
  white-space: pre-wrap;
}
#fonttest {
  font-family: monospace;
}
p {
  margin-bottom: 0;
}
.end_space {
  min-height: 100px;
  transition: height .2s ease;
}
.notebook_app > #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
@media not print {
  .notebook_app {
    background-color: #EEE;
  }
}
kbd {
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  margin: 2px;
  padding-left: 2px;
  padding-right: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
.jupyter-keybindings {
  padding: 1px;
  line-height: 24px;
  border-bottom: 1px solid gray;
}
.jupyter-keybindings input {
  margin: 0;
  padding: 0;
  border: none;
}
.jupyter-keybindings i {
  padding: 6px;
}
.well code {
  background-color: #ffffff;
  border-color: #ababab;
  border-width: 1px;
  border-style: solid;
  padding: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
/* CSS for the cell toolbar */
.celltoolbar {
  border: thin solid #CFCFCF;
  border-bottom: none;
  background: #EEE;
  border-radius: 2px 2px 0px 0px;
  width: 100%;
  height: 29px;
  padding-right: 4px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
  display: -webkit-flex;
}
@media print {
  .celltoolbar {
    display: none;
  }
}
.ctb_hideshow {
  display: none;
  vertical-align: bottom;
}
/* ctb_show is added to the ctb_hideshow div to show the cell toolbar.
   Cell toolbars are only shown when the ctb_global_show class is also set.
*/
.ctb_global_show .ctb_show.ctb_hideshow {
  display: block;
}
.ctb_global_show .ctb_show + .input_area,
.ctb_global_show .ctb_show + div.text_cell_input,
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border: 1px solid #cfcfcf;
}
.celltoolbar {
  font-size: 87%;
  padding-top: 3px;
}
.celltoolbar select {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  width: inherit;
  font-size: inherit;
  height: 22px;
  padding: 0px;
  display: inline-block;
}
.celltoolbar select:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.celltoolbar select::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.celltoolbar select:-ms-input-placeholder {
  color: #999;
}
.celltoolbar select::-webkit-input-placeholder {
  color: #999;
}
.celltoolbar select::-ms-expand {
  border: 0;
  background-color: transparent;
}
.celltoolbar select[disabled],
.celltoolbar select[readonly],
fieldset[disabled] .celltoolbar select {
  background-color: #eeeeee;
  opacity: 1;
}
.celltoolbar select[disabled],
fieldset[disabled] .celltoolbar select {
  cursor: not-allowed;
}
textarea.celltoolbar select {
  height: auto;
}
select.celltoolbar select {
  height: 30px;
  line-height: 30px;
}
textarea.celltoolbar select,
select[multiple].celltoolbar select {
  height: auto;
}
.celltoolbar label {
  margin-left: 5px;
  margin-right: 5px;
}
.tags_button_container {
  width: 100%;
  display: flex;
}
.tag-container {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
  overflow: hidden;
  position: relative;
}
.tag-container > * {
  margin: 0 4px;
}
.remove-tag-btn {
  margin-left: 4px;
}
.tags-input {
  display: flex;
}
.cell-tag:last-child:after {
  content: "";
  position: absolute;
  right: 0;
  width: 40px;
  height: 100%;
  /* Fade to background color of cell toolbar */
  background: linear-gradient(to right, rgba(0, 0, 0, 0), #EEE);
}
.tags-input > * {
  margin-left: 4px;
}
.cell-tag,
.tags-input input,
.tags-input button {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  box-shadow: none;
  width: inherit;
  font-size: inherit;
  height: 22px;
  line-height: 22px;
  padding: 0px 4px;
  display: inline-block;
}
.cell-tag:focus,
.tags-input input:focus,
.tags-input button:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.cell-tag::-moz-placeholder,
.tags-input input::-moz-placeholder,
.tags-input button::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.cell-tag:-ms-input-placeholder,
.tags-input input:-ms-input-placeholder,
.tags-input button:-ms-input-placeholder {
  color: #999;
}
.cell-tag::-webkit-input-placeholder,
.tags-input input::-webkit-input-placeholder,
.tags-input button::-webkit-input-placeholder {
  color: #999;
}
.cell-tag::-ms-expand,
.tags-input input::-ms-expand,
.tags-input button::-ms-expand {
  border: 0;
  background-color: transparent;
}
.cell-tag[disabled],
.tags-input input[disabled],
.tags-input button[disabled],
.cell-tag[readonly],
.tags-input input[readonly],
.tags-input button[readonly],
fieldset[disabled] .cell-tag,
fieldset[disabled] .tags-input input,
fieldset[disabled] .tags-input button {
  background-color: #eeeeee;
  opacity: 1;
}
.cell-tag[disabled],
.tags-input input[disabled],
.tags-input button[disabled],
fieldset[disabled] .cell-tag,
fieldset[disabled] .tags-input input,
fieldset[disabled] .tags-input button {
  cursor: not-allowed;
}
textarea.cell-tag,
textarea.tags-input input,
textarea.tags-input button {
  height: auto;
}
select.cell-tag,
select.tags-input input,
select.tags-input button {
  height: 30px;
  line-height: 30px;
}
textarea.cell-tag,
textarea.tags-input input,
textarea.tags-input button,
select[multiple].cell-tag,
select[multiple].tags-input input,
select[multiple].tags-input button {
  height: auto;
}
.cell-tag,
.tags-input button {
  padding: 0px 4px;
}
.cell-tag {
  background-color: #fff;
  white-space: nowrap;
}
.tags-input input[type=text]:focus {
  outline: none;
  box-shadow: none;
  border-color: #ccc;
}
.completions {
  position: absolute;
  z-index: 110;
  overflow: hidden;
  border: 1px solid #ababab;
  border-radius: 2px;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  line-height: 1;
}
.completions select {
  background: white;
  outline: none;
  border: none;
  padding: 0px;
  margin: 0px;
  overflow: auto;
  font-family: monospace;
  font-size: 110%;
  color: #000;
  width: auto;
}
.completions select option.context {
  color: #286090;
}
#kernel_logo_widget .current_kernel_logo {
  display: none;
  margin-top: -1px;
  margin-bottom: -1px;
  width: 32px;
  height: 32px;
}
[dir="rtl"] #kernel_logo_widget {
  float: left !important;
  float: left;
}
.modal .modal-body .move-path {
  display: flex;
  flex-direction: row;
  justify-content: space;
  align-items: center;
}
.modal .modal-body .move-path .server-root {
  padding-right: 20px;
}
.modal .modal-body .move-path .path-input {
  flex: 1;
}
#menubar {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin-top: 1px;
}
#menubar .navbar {
  border-top: 1px;
  border-radius: 0px 0px 2px 2px;
  margin-bottom: 0px;
}
#menubar .navbar-toggle {
  float: left;
  padding-top: 7px;
  padding-bottom: 7px;
  border: none;
}
#menubar .navbar-collapse {
  clear: left;
}
[dir="rtl"] #menubar .navbar-toggle {
  float: right;
}
[dir="rtl"] #menubar .navbar-collapse {
  clear: right;
}
[dir="rtl"] #menubar .navbar-nav {
  float: right;
}
[dir="rtl"] #menubar .nav {
  padding-right: 0px;
}
[dir="rtl"] #menubar .navbar-nav > li {
  float: right;
}
[dir="rtl"] #menubar .navbar-right {
  float: left !important;
}
[dir="rtl"] ul.dropdown-menu {
  text-align: right;
  left: auto;
}
[dir="rtl"] ul#new-menu.dropdown-menu {
  right: auto;
  left: 0;
}
.nav-wrapper {
  border-bottom: 1px solid #e7e7e7;
}
i.menu-icon {
  padding-top: 4px;
}
[dir="rtl"] i.menu-icon.pull-right {
  float: left !important;
  float: left;
}
ul#help_menu li a {
  overflow: hidden;
  padding-right: 2.2em;
}
ul#help_menu li a i {
  margin-right: -1.2em;
}
[dir="rtl"] ul#help_menu li a {
  padding-left: 2.2em;
}
[dir="rtl"] ul#help_menu li a i {
  margin-right: 0;
  margin-left: -1.2em;
}
[dir="rtl"] ul#help_menu li a i.pull-right {
  float: left !important;
  float: left;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
}
[dir="rtl"] .dropdown-submenu > .dropdown-menu {
  right: 100%;
  margin-right: -1px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu > a:after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: block;
  content: "\f0da";
  float: right;
  color: #333333;
  margin-top: 2px;
  margin-right: -10px;
}
.dropdown-submenu > a:after.fa-pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.fa-pull-right {
  margin-left: .3em;
}
.dropdown-submenu > a:after.pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.pull-right {
  margin-left: .3em;
}
[dir="rtl"] .dropdown-submenu > a:after {
  float: left;
  content: "\f0d9";
  margin-right: 0;
  margin-left: -10px;
}
.dropdown-submenu:hover > a:after {
  color: #262626;
}
.dropdown-submenu.pull-left {
  float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}
#notification_area {
  float: right !important;
  float: right;
  z-index: 10;
}
[dir="rtl"] #notification_area {
  float: left !important;
  float: left;
}
.indicator_area {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
[dir="rtl"] .indicator_area {
  float: left !important;
  float: left;
}
#kernel_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  border-left: 1px solid;
}
#kernel_indicator .kernel_indicator_name {
  padding-left: 5px;
  padding-right: 5px;
}
[dir="rtl"] #kernel_indicator {
  float: left !important;
  float: left;
  border-left: 0;
  border-right: 1px solid;
}
#modal_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
[dir="rtl"] #modal_indicator {
  float: left !important;
  float: left;
}
#readonly-indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  margin-top: 2px;
  margin-bottom: 0px;
  margin-left: 0px;
  margin-right: 0px;
  display: none;
}
.modal_indicator:before {
  width: 1.28571429em;
  text-align: center;
}
.edit_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f040";
}
.edit_mode .modal_indicator:before.fa-pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.fa-pull-right {
  margin-left: .3em;
}
.edit_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: ' ';
}
.command_mode .modal_indicator:before.fa-pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.fa-pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f10c";
}
.kernel_idle_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f111";
}
.kernel_busy_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f1e2";
}
.kernel_dead_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f127";
}
.kernel_disconnected_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.pull-right {
  margin-left: .3em;
}
.notification_widget {
  color: #777;
  z-index: 10;
  background: rgba(240, 240, 240, 0.5);
  margin-right: 4px;
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget:focus,
.notification_widget.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.notification_widget:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active:hover,
.notification_widget.active:hover,
.open > .dropdown-toggle.notification_widget:hover,
.notification_widget:active:focus,
.notification_widget.active:focus,
.open > .dropdown-toggle.notification_widget:focus,
.notification_widget:active.focus,
.notification_widget.active.focus,
.open > .dropdown-toggle.notification_widget.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  background-image: none;
}
.notification_widget.disabled:hover,
.notification_widget[disabled]:hover,
fieldset[disabled] .notification_widget:hover,
.notification_widget.disabled:focus,
.notification_widget[disabled]:focus,
fieldset[disabled] .notification_widget:focus,
.notification_widget.disabled.focus,
.notification_widget[disabled].focus,
fieldset[disabled] .notification_widget.focus {
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget .badge {
  color: #fff;
  background-color: #333;
}
.notification_widget.warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning:focus,
.notification_widget.warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.notification_widget.warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active:hover,
.notification_widget.warning.active:hover,
.open > .dropdown-toggle.notification_widget.warning:hover,
.notification_widget.warning:active:focus,
.notification_widget.warning.active:focus,
.open > .dropdown-toggle.notification_widget.warning:focus,
.notification_widget.warning:active.focus,
.notification_widget.warning.active.focus,
.open > .dropdown-toggle.notification_widget.warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  background-image: none;
}
.notification_widget.warning.disabled:hover,
.notification_widget.warning[disabled]:hover,
fieldset[disabled] .notification_widget.warning:hover,
.notification_widget.warning.disabled:focus,
.notification_widget.warning[disabled]:focus,
fieldset[disabled] .notification_widget.warning:focus,
.notification_widget.warning.disabled.focus,
.notification_widget.warning[disabled].focus,
fieldset[disabled] .notification_widget.warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.notification_widget.success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success:focus,
.notification_widget.success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.notification_widget.success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active:hover,
.notification_widget.success.active:hover,
.open > .dropdown-toggle.notification_widget.success:hover,
.notification_widget.success:active:focus,
.notification_widget.success.active:focus,
.open > .dropdown-toggle.notification_widget.success:focus,
.notification_widget.success:active.focus,
.notification_widget.success.active.focus,
.open > .dropdown-toggle.notification_widget.success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  background-image: none;
}
.notification_widget.success.disabled:hover,
.notification_widget.success[disabled]:hover,
fieldset[disabled] .notification_widget.success:hover,
.notification_widget.success.disabled:focus,
.notification_widget.success[disabled]:focus,
fieldset[disabled] .notification_widget.success:focus,
.notification_widget.success.disabled.focus,
.notification_widget.success[disabled].focus,
fieldset[disabled] .notification_widget.success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.notification_widget.info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info:focus,
.notification_widget.info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.notification_widget.info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active:hover,
.notification_widget.info.active:hover,
.open > .dropdown-toggle.notification_widget.info:hover,
.notification_widget.info:active:focus,
.notification_widget.info.active:focus,
.open > .dropdown-toggle.notification_widget.info:focus,
.notification_widget.info:active.focus,
.notification_widget.info.active.focus,
.open > .dropdown-toggle.notification_widget.info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  background-image: none;
}
.notification_widget.info.disabled:hover,
.notification_widget.info[disabled]:hover,
fieldset[disabled] .notification_widget.info:hover,
.notification_widget.info.disabled:focus,
.notification_widget.info[disabled]:focus,
fieldset[disabled] .notification_widget.info:focus,
.notification_widget.info.disabled.focus,
.notification_widget.info[disabled].focus,
fieldset[disabled] .notification_widget.info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.notification_widget.danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger:focus,
.notification_widget.danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.notification_widget.danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active:hover,
.notification_widget.danger.active:hover,
.open > .dropdown-toggle.notification_widget.danger:hover,
.notification_widget.danger:active:focus,
.notification_widget.danger.active:focus,
.open > .dropdown-toggle.notification_widget.danger:focus,
.notification_widget.danger:active.focus,
.notification_widget.danger.active.focus,
.open > .dropdown-toggle.notification_widget.danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  background-image: none;
}
.notification_widget.danger.disabled:hover,
.notification_widget.danger[disabled]:hover,
fieldset[disabled] .notification_widget.danger:hover,
.notification_widget.danger.disabled:focus,
.notification_widget.danger[disabled]:focus,
fieldset[disabled] .notification_widget.danger:focus,
.notification_widget.danger.disabled.focus,
.notification_widget.danger[disabled].focus,
fieldset[disabled] .notification_widget.danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger .badge {
  color: #d9534f;
  background-color: #fff;
}
div#pager {
  background-color: #fff;
  font-size: 14px;
  line-height: 20px;
  overflow: hidden;
  display: none;
  position: fixed;
  bottom: 0px;
  width: 100%;
  max-height: 50%;
  padding-top: 8px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  /* Display over codemirror */
  z-index: 100;
  /* Hack which prevents jquery ui resizable from changing top. */
  top: auto !important;
}
div#pager pre {
  line-height: 1.21429em;
  color: #000;
  background-color: #f7f7f7;
  padding: 0.4em;
}
div#pager #pager-button-area {
  position: absolute;
  top: 8px;
  right: 20px;
}
div#pager #pager-contents {
  position: relative;
  overflow: auto;
  width: 100%;
  height: 100%;
}
div#pager #pager-contents #pager-container {
  position: relative;
  padding: 15px 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
div#pager .ui-resizable-handle {
  top: 0px;
  height: 8px;
  background: #f7f7f7;
  border-top: 1px solid #cfcfcf;
  border-bottom: 1px solid #cfcfcf;
  /* This injects handle bars (a short, wide = symbol) for 
        the resize handle. */
}
div#pager .ui-resizable-handle::after {
  content: '';
  top: 2px;
  left: 50%;
  height: 3px;
  width: 30px;
  margin-left: -15px;
  position: absolute;
  border-top: 1px solid #cfcfcf;
}
.quickhelp {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  line-height: 1.8em;
}
.shortcut_key {
  display: inline-block;
  width: 21ex;
  text-align: right;
  font-family: monospace;
}
.shortcut_descr {
  display: inline-block;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
span.save_widget {
  height: 30px;
  margin-top: 4px;
  display: flex;
  justify-content: flex-start;
  align-items: baseline;
  width: 50%;
  flex: 1;
}
span.save_widget span.filename {
  height: 100%;
  line-height: 1em;
  margin-left: 16px;
  border: none;
  font-size: 146.5%;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  border-radius: 2px;
}
span.save_widget span.filename:hover {
  background-color: #e6e6e6;
}
[dir="rtl"] span.save_widget.pull-left {
  float: right !important;
  float: right;
}
[dir="rtl"] span.save_widget span.filename {
  margin-left: 0;
  margin-right: 16px;
}
span.checkpoint_status,
span.autosave_status {
  font-size: small;
  white-space: nowrap;
  padding: 0 5px;
}
@media (max-width: 767px) {
  span.save_widget {
    font-size: small;
    padding: 0 0 0 5px;
  }
  span.checkpoint_status,
  span.autosave_status {
    display: none;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  span.checkpoint_status {
    display: none;
  }
  span.autosave_status {
    font-size: x-small;
  }
}
.toolbar {
  padding: 0px;
  margin-left: -5px;
  margin-top: 2px;
  margin-bottom: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.toolbar select,
.toolbar label {
  width: auto;
  vertical-align: middle;
  margin-right: 2px;
  margin-bottom: 0px;
  display: inline;
  font-size: 92%;
  margin-left: 0.3em;
  margin-right: 0.3em;
  padding: 0px;
  padding-top: 3px;
}
.toolbar .btn {
  padding: 2px 8px;
}
.toolbar .btn-group {
  margin-top: 0px;
  margin-left: 5px;
}
.toolbar-btn-label {
  margin-left: 6px;
}
#maintoolbar {
  margin-bottom: -3px;
  margin-top: -8px;
  border: 0px;
  min-height: 27px;
  margin-left: 0px;
  padding-top: 11px;
  padding-bottom: 3px;
}
#maintoolbar .navbar-text {
  float: none;
  vertical-align: middle;
  text-align: right;
  margin-left: 5px;
  margin-right: 0px;
  margin-top: 0px;
}
.select-xs {
  height: 24px;
}
[dir="rtl"] .btn-group > .btn,
.btn-group-vertical > .btn {
  float: right;
}
.pulse,
.dropdown-menu > li > a.pulse,
li.pulse > a.dropdown-toggle,
li.pulse.open > a.dropdown-toggle {
  background-color: #F37626;
  color: white;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
/** WARNING IF YOU ARE EDITTING THIS FILE, if this is a .css file, It has a lot
 * of chance of beeing generated from the ../less/[samename].less file, you can
 * try to get back the less file by reverting somme commit in history
 **/
/*
 * We'll try to get something pretty, so we
 * have some strange css to have the scroll bar on
 * the left with fix button on the top right of the tooltip
 */
@-moz-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-moz-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
/*properties of tooltip after "expand"*/
.bigtooltip {
  overflow: auto;
  height: 200px;
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
}
/*properties of tooltip before "expand"*/
.smalltooltip {
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
  text-overflow: ellipsis;
  overflow: hidden;
  height: 80px;
}
.tooltipbuttons {
  position: absolute;
  padding-right: 15px;
  top: 0px;
  right: 0px;
}
.tooltiptext {
  /*avoid the button to overlap on some docstring*/
  padding-right: 30px;
}
.ipython_tooltip {
  max-width: 700px;
  /*fade-in animation when inserted*/
  -webkit-animation: fadeOut 400ms;
  -moz-animation: fadeOut 400ms;
  animation: fadeOut 400ms;
  -webkit-animation: fadeIn 400ms;
  -moz-animation: fadeIn 400ms;
  animation: fadeIn 400ms;
  vertical-align: middle;
  background-color: #f7f7f7;
  overflow: visible;
  border: #ababab 1px solid;
  outline: none;
  padding: 3px;
  margin: 0px;
  padding-left: 7px;
  font-family: monospace;
  min-height: 50px;
  -moz-box-shadow: 0px 6px 10px -1px #adadad;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  border-radius: 2px;
  position: absolute;
  z-index: 1000;
}
.ipython_tooltip a {
  float: right;
}
.ipython_tooltip .tooltiptext pre {
  border: 0;
  border-radius: 0;
  font-size: 100%;
  background-color: #f7f7f7;
}
.pretooltiparrow {
  left: 0px;
  margin: 0px;
  top: -16px;
  width: 40px;
  height: 16px;
  overflow: hidden;
  position: absolute;
}
.pretooltiparrow:before {
  background-color: #f7f7f7;
  border: 1px #ababab solid;
  z-index: 11;
  content: "";
  position: absolute;
  left: 15px;
  top: 10px;
  width: 25px;
  height: 25px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}
ul.typeahead-list i {
  margin-left: -10px;
  width: 18px;
}
[dir="rtl"] ul.typeahead-list i {
  margin-left: 0;
  margin-right: -10px;
}
ul.typeahead-list {
  max-height: 80vh;
  overflow: auto;
}
ul.typeahead-list > li > a {
  /** Firefox bug **/
  /* see https://github.com/jupyter/notebook/issues/559 */
  white-space: normal;
}
ul.typeahead-list  > li > a.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .typeahead-list {
  text-align: right;
}
.cmd-palette .modal-body {
  padding: 7px;
}
.cmd-palette form {
  background: white;
}
.cmd-palette input {
  outline: none;
}
.no-shortcut {
  min-width: 20px;
  color: transparent;
}
[dir="rtl"] .no-shortcut.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .command-shortcut.pull-right {
  float: left !important;
  float: left;
}
.command-shortcut:before {
  content: "(command mode)";
  padding-right: 3px;
  color: #777777;
}
.edit-shortcut:before {
  content: "(edit)";
  padding-right: 3px;
  color: #777777;
}
[dir="rtl"] .edit-shortcut.pull-right {
  float: left !important;
  float: left;
}
#find-and-replace #replace-preview .match,
#find-and-replace #replace-preview .insert {
  background-color: #BBDEFB;
  border-color: #90CAF9;
  border-style: solid;
  border-width: 1px;
  border-radius: 0px;
}
[dir="ltr"] #find-and-replace .input-group-btn + .form-control {
  border-left: none;
}
[dir="rtl"] #find-and-replace .input-group-btn + .form-control {
  border-right: none;
}
#find-and-replace #replace-preview .replace .match {
  background-color: #FFCDD2;
  border-color: #EF9A9A;
  border-radius: 0px;
}
#find-and-replace #replace-preview .replace .insert {
  background-color: #C8E6C9;
  border-color: #A5D6A7;
  border-radius: 0px;
}
#find-and-replace #replace-preview {
  max-height: 60vh;
  overflow: auto;
}
#find-and-replace #replace-preview pre {
  padding: 5px 10px;
}
.terminal-app {
  background: #EEE;
}
.terminal-app #header {
  background: #fff;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.terminal-app .terminal {
  width: 100%;
  float: left;
  font-family: monospace;
  color: white;
  background: black;
  padding: 0.4em;
  border-radius: 2px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
}
.terminal-app .terminal,
.terminal-app .terminal dummy-screen {
  line-height: 1em;
  font-size: 14px;
}
.terminal-app .terminal .xterm-rows {
  padding: 10px;
}
.terminal-app .terminal-cursor {
  color: black;
  background: white;
}
.terminal-app #terminado-container {
  margin-top: 20px;
}
/*# sourceMappingURL=style.min.css.map */
    </style>
<style type="text/css">
    .highlight .hll { background-color: #ffffcc }
.highlight  { background: #f8f8f8; }
.highlight .c { color: #408080; font-style: italic } /* Comment */
.highlight .err { border: 1px solid #FF0000 } /* Error */
.highlight .k { color: #008000; font-weight: bold } /* Keyword */
.highlight .o { color: #666666 } /* Operator */
.highlight .ch { color: #408080; font-style: italic } /* Comment.Hashbang */
.highlight .cm { color: #408080; font-style: italic } /* Comment.Multiline */
.highlight .cp { color: #BC7A00 } /* Comment.Preproc */
.highlight .cpf { color: #408080; font-style: italic } /* Comment.PreprocFile */
.highlight .c1 { color: #408080; font-style: italic } /* Comment.Single */
.highlight .cs { color: #408080; font-style: italic } /* Comment.Special */
.highlight .gd { color: #A00000 } /* Generic.Deleted */
.highlight .ge { font-style: italic } /* Generic.Emph */
.highlight .gr { color: #FF0000 } /* Generic.Error */
.highlight .gh { color: #000080; font-weight: bold } /* Generic.Heading */
.highlight .gi { color: #00A000 } /* Generic.Inserted */
.highlight .go { color: #888888 } /* Generic.Output */
.highlight .gp { color: #000080; font-weight: bold } /* Generic.Prompt */
.highlight .gs { font-weight: bold } /* Generic.Strong */
.highlight .gu { color: #800080; font-weight: bold } /* Generic.Subheading */
.highlight .gt { color: #0044DD } /* Generic.Traceback */
.highlight .kc { color: #008000; font-weight: bold } /* Keyword.Constant */
.highlight .kd { color: #008000; font-weight: bold } /* Keyword.Declaration */
.highlight .kn { color: #008000; font-weight: bold } /* Keyword.Namespace */
.highlight .kp { color: #008000 } /* Keyword.Pseudo */
.highlight .kr { color: #008000; font-weight: bold } /* Keyword.Reserved */
.highlight .kt { color: #B00040 } /* Keyword.Type */
.highlight .m { color: #666666 } /* Literal.Number */
.highlight .s { color: #BA2121 } /* Literal.String */
.highlight .na { color: #7D9029 } /* Name.Attribute */
.highlight .nb { color: #008000 } /* Name.Builtin */
.highlight .nc { color: #0000FF; font-weight: bold } /* Name.Class */
.highlight .no { color: #880000 } /* Name.Constant */
.highlight .nd { color: #AA22FF } /* Name.Decorator */
.highlight .ni { color: #999999; font-weight: bold } /* Name.Entity */
.highlight .ne { color: #D2413A; font-weight: bold } /* Name.Exception */
.highlight .nf { color: #0000FF } /* Name.Function */
.highlight .nl { color: #A0A000 } /* Name.Label */
.highlight .nn { color: #0000FF; font-weight: bold } /* Name.Namespace */
.highlight .nt { color: #008000; font-weight: bold } /* Name.Tag */
.highlight .nv { color: #19177C } /* Name.Variable */
.highlight .ow { color: #AA22FF; font-weight: bold } /* Operator.Word */
.highlight .w { color: #bbbbbb } /* Text.Whitespace */
.highlight .mb { color: #666666 } /* Literal.Number.Bin */
.highlight .mf { color: #666666 } /* Literal.Number.Float */
.highlight .mh { color: #666666 } /* Literal.Number.Hex */
.highlight .mi { color: #666666 } /* Literal.Number.Integer */
.highlight .mo { color: #666666 } /* Literal.Number.Oct */
.highlight .sa { color: #BA2121 } /* Literal.String.Affix */
.highlight .sb { color: #BA2121 } /* Literal.String.Backtick */
.highlight .sc { color: #BA2121 } /* Literal.String.Char */
.highlight .dl { color: #BA2121 } /* Literal.String.Delimiter */
.highlight .sd { color: #BA2121; font-style: italic } /* Literal.String.Doc */
.highlight .s2 { color: #BA2121 } /* Literal.String.Double */
.highlight .se { color: #BB6622; font-weight: bold } /* Literal.String.Escape */
.highlight .sh { color: #BA2121 } /* Literal.String.Heredoc */
.highlight .si { color: #BB6688; font-weight: bold } /* Literal.String.Interpol */
.highlight .sx { color: #008000 } /* Literal.String.Other */
.highlight .sr { color: #BB6688 } /* Literal.String.Regex */
.highlight .s1 { color: #BA2121 } /* Literal.String.Single */
.highlight .ss { color: #19177C } /* Literal.String.Symbol */
.highlight .bp { color: #008000 } /* Name.Builtin.Pseudo */
.highlight .fm { color: #0000FF } /* Name.Function.Magic */
.highlight .vc { color: #19177C } /* Name.Variable.Class */
.highlight .vg { color: #19177C } /* Name.Variable.Global */
.highlight .vi { color: #19177C } /* Name.Variable.Instance */
.highlight .vm { color: #19177C } /* Name.Variable.Magic */
.highlight .il { color: #666666 } /* Literal.Number.Integer.Long */
    </style>
<style type="text/css">
    
/* Temporary definitions which will become obsolete with Notebook release 5.0 */
.ansi-black-fg { color: #3E424D; }
.ansi-black-bg { background-color: #3E424D; }
.ansi-black-intense-fg { color: #282C36; }
.ansi-black-intense-bg { background-color: #282C36; }
.ansi-red-fg { color: #E75C58; }
.ansi-red-bg { background-color: #E75C58; }
.ansi-red-intense-fg { color: #B22B31; }
.ansi-red-intense-bg { background-color: #B22B31; }
.ansi-green-fg { color: #00A250; }
.ansi-green-bg { background-color: #00A250; }
.ansi-green-intense-fg { color: #007427; }
.ansi-green-intense-bg { background-color: #007427; }
.ansi-yellow-fg { color: #DDB62B; }
.ansi-yellow-bg { background-color: #DDB62B; }
.ansi-yellow-intense-fg { color: #B27D12; }
.ansi-yellow-intense-bg { background-color: #B27D12; }
.ansi-blue-fg { color: #208FFB; }
.ansi-blue-bg { background-color: #208FFB; }
.ansi-blue-intense-fg { color: #0065CA; }
.ansi-blue-intense-bg { background-color: #0065CA; }
.ansi-magenta-fg { color: #D160C4; }
.ansi-magenta-bg { background-color: #D160C4; }
.ansi-magenta-intense-fg { color: #A03196; }
.ansi-magenta-intense-bg { background-color: #A03196; }
.ansi-cyan-fg { color: #60C6C8; }
.ansi-cyan-bg { background-color: #60C6C8; }
.ansi-cyan-intense-fg { color: #258F8F; }
.ansi-cyan-intense-bg { background-color: #258F8F; }
.ansi-white-fg { color: #C5C1B4; }
.ansi-white-bg { background-color: #C5C1B4; }
.ansi-white-intense-fg { color: #A1A6B2; }
.ansi-white-intense-bg { background-color: #A1A6B2; }

.ansi-bold { font-weight: bold; }

    </style>


<style type="text/css">
/* Overrides of notebook CSS for static HTML export */
body {
  overflow: visible;
  padding: 8px;
}

div#notebook {
  overflow: visible;
  border-top: none;
}@media print {
  div.cell {
    display: block;
    page-break-inside: avoid;
  } 
  div.output_wrapper { 
    display: block;
    page-break-inside: avoid; 
  }
  div.output { 
    display: block;
    page-break-inside: avoid; 
  }
}
</style>

<!-- Custom stylesheet, it must be in the same directory as the html file -->
<link rel="stylesheet" href="custom.css">

<!-- Loading mathjax macro -->
<!-- Load mathjax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_HTML"></script>
    <!-- MathJax configuration -->
    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true,
            processEnvironments: true
        },
        // Center justify equations in code and markdown cells. Elsewhere
        // we use CSS to left justify single line equations in code cells.
        displayAlign: 'center',
        "HTML-CSS": {
            styles: {'.MathJax_Display': {"margin": 0}},
            linebreaks: { automatic: true }
        }
    });
    </script>
    <!-- End of mathjax configuration --></head>
<body>
  <div tabindex="-1" id="notebook" class="border-box-sizing">
    <div class="container" id="notebook-container">

<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>1) Define Problem</p>

<pre><code>    We wanted to try to figure out which country would have the best quality of life in any number of years. heritage.org/index provided a lot of historical data about what they percieve as the best quality of life factors. 
    We used this data to construct our model and predict which countries would be on top in 5, 10, 20, or any number of years from now.</code></pre>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">seaborn</span> <span class="k">as</span> <span class="nn">sns</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>
<span class="o">%</span><span class="k">matplotlib</span> inline
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">from</span> <span class="nn">bokeh.plotting</span> <span class="k">import</span> <span class="n">figure</span><span class="p">,</span> <span class="n">output_file</span><span class="p">,</span> <span class="n">show</span>
<span class="kn">from</span> <span class="nn">bokeh.io</span> <span class="k">import</span> <span class="n">output_notebook</span>
<span class="kn">from</span> <span class="nn">sklearn.linear_model</span> <span class="k">import</span> <span class="n">LinearRegression</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="k">import</span> <span class="n">mean_squared_error</span><span class="p">,</span> <span class="n">r2_score</span>
<span class="kn">from</span> <span class="nn">sklearn</span> <span class="k">import</span> <span class="n">tree</span>
<span class="kn">from</span> <span class="nn">sklearn.linear_model</span> <span class="k">import</span> <span class="n">LogisticRegression</span>
<span class="kn">from</span> <span class="nn">sklearn</span> <span class="k">import</span> <span class="n">svm</span>
<span class="kn">from</span> <span class="nn">sklearn</span> <span class="k">import</span> <span class="n">linear_model</span>
<span class="kn">from</span> <span class="nn">sklearn.model_selection</span> <span class="k">import</span> <span class="n">train_test_split</span>
<span class="kn">from</span> <span class="nn">operator</span> <span class="k">import</span> <span class="n">itemgetter</span>
<span class="kn">import</span> <span class="nn">math</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="s1">&#39;https://raw.githubusercontent.com/christian-simmons/DS201-Final/master/data-full.csv&#39;</span><span class="p">)</span>
<span class="n">df</span><span class="o">.</span><span class="n">shape</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>(3583, 14)</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># I did not do this by hand, I just made an Excel function to do it:</span>
<span class="c1"># (=A1&amp;&quot;_data = df[df[&quot; &amp; CHAR(34) &amp; &quot;name&quot; &amp; CHAR(34)  &amp; &quot;]==&quot; &amp; CHAR(34) &amp; A1 &amp; CHAR(34) &amp;&quot;]&quot;)</span>
<span class="c1"># With A1 being the country name in cell A1</span>

<span class="n">Albania_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Albania&quot;</span><span class="p">]</span>
<span class="n">Algeria_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Algeria&quot;</span><span class="p">]</span>
<span class="n">Argentina_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Argentina&quot;</span><span class="p">]</span>
<span class="n">Armenia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Armenia&quot;</span><span class="p">]</span>
<span class="n">Australia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Australia&quot;</span><span class="p">]</span>
<span class="n">Austria_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Austria&quot;</span><span class="p">]</span>
<span class="n">Azerbaijan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Azerbaijan&quot;</span><span class="p">]</span>
<span class="n">Bahrain_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Bahrain&quot;</span><span class="p">]</span>
<span class="n">Bangladesh__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Bangladesh_&quot;</span><span class="p">]</span>
<span class="n">Barbados_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Barbados&quot;</span><span class="p">]</span>
<span class="n">Belarus_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Belarus&quot;</span><span class="p">]</span>
<span class="n">Belgium_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Belgium&quot;</span><span class="p">]</span>
<span class="n">Belize_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Belize&quot;</span><span class="p">]</span>
<span class="n">Benin_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Benin&quot;</span><span class="p">]</span>
<span class="n">Bolivia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Bolivia&quot;</span><span class="p">]</span>
<span class="n">Bosnia_and_Herzegovina_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Bosnia_and_Herzegovina&quot;</span><span class="p">]</span>
<span class="n">Botswana_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Botswana&quot;</span><span class="p">]</span>
<span class="n">Brazil_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Brazil&quot;</span><span class="p">]</span>
<span class="n">Brunei_Darussalam_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Brunei_Darussalam&quot;</span><span class="p">]</span>
<span class="n">Bulgaria_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Bulgaria&quot;</span><span class="p">]</span>
<span class="n">Burkina_Faso_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Burkina_Faso&quot;</span><span class="p">]</span>
<span class="n">Burma_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Burma&quot;</span><span class="p">]</span>
<span class="n">Cabo_Verde_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Cabo_Verde&quot;</span><span class="p">]</span>
<span class="n">Cambodia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Cambodia&quot;</span><span class="p">]</span>
<span class="n">Cameroon_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Cameroon&quot;</span><span class="p">]</span>
<span class="n">Canada_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Canada&quot;</span><span class="p">]</span>
<span class="n">Chad_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Chad&quot;</span><span class="p">]</span>
<span class="n">Chile_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Chile&quot;</span><span class="p">]</span>
<span class="n">China_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;China&quot;</span><span class="p">]</span>
<span class="n">Colombia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Colombia&quot;</span><span class="p">]</span>
<span class="n">Costa_Rica__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Costa_Rica_&quot;</span><span class="p">]</span>
<span class="n">Cote_d_Ivoire__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Cote_d&#39;Ivoire_&quot;</span><span class="p">]</span>
<span class="n">Croatia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Croatia&quot;</span><span class="p">]</span>
<span class="n">Cuba_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Cuba&quot;</span><span class="p">]</span>
<span class="n">Cyprus_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Cyprus&quot;</span><span class="p">]</span>
<span class="n">Czech_Republic_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Czech_Republic&quot;</span><span class="p">]</span>
<span class="n">Denmark_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Denmark&quot;</span><span class="p">]</span>
<span class="n">Djibouti_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Djibouti&quot;</span><span class="p">]</span>
<span class="n">Dominican_Republic_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Dominican_Republic&quot;</span><span class="p">]</span>
<span class="n">Ecuador_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Ecuador&quot;</span><span class="p">]</span>
<span class="n">Egypt_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Egypt&quot;</span><span class="p">]</span>
<span class="n">El_Salvador__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;El_Salvador_&quot;</span><span class="p">]</span>
<span class="n">Equatorial_Guinea_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Equatorial_Guinea&quot;</span><span class="p">]</span>
<span class="n">Estonia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Estonia&quot;</span><span class="p">]</span>
<span class="n">Eswatini_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Eswatini&quot;</span><span class="p">]</span>
<span class="n">Ethiopia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Ethiopia&quot;</span><span class="p">]</span>
<span class="n">Fiji_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Fiji&quot;</span><span class="p">]</span>
<span class="n">Finland_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Finland&quot;</span><span class="p">]</span>
<span class="n">France_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;France&quot;</span><span class="p">]</span>
<span class="n">Gabon_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Gabon&quot;</span><span class="p">]</span>
<span class="n">Georgia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Georgia&quot;</span><span class="p">]</span>
<span class="n">Germany_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Germany&quot;</span><span class="p">]</span>
<span class="n">Ghana_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Ghana&quot;</span><span class="p">]</span>
<span class="n">Greece_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Greece&quot;</span><span class="p">]</span>
<span class="n">Guatemala__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Guatemala_&quot;</span><span class="p">]</span>
<span class="n">Guinea_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Guinea&quot;</span><span class="p">]</span>
<span class="n">Guyana_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Guyana&quot;</span><span class="p">]</span>
<span class="n">Haiti_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Haiti&quot;</span><span class="p">]</span>
<span class="n">Honduras__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Honduras_&quot;</span><span class="p">]</span>
<span class="n">Hong_Kong_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Hong_Kong&quot;</span><span class="p">]</span>
<span class="n">Hungary__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Hungary_&quot;</span><span class="p">]</span>
<span class="n">Iceland_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Iceland&quot;</span><span class="p">]</span>
<span class="n">India_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;India&quot;</span><span class="p">]</span>
<span class="n">Indonesia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Indonesia&quot;</span><span class="p">]</span>
<span class="n">Iran_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Iran&quot;</span><span class="p">]</span>
<span class="n">Ireland_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Ireland&quot;</span><span class="p">]</span>
<span class="n">Israel_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Israel&quot;</span><span class="p">]</span>
<span class="n">Italy_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Italy&quot;</span><span class="p">]</span>
<span class="n">Jamaica__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Jamaica_&quot;</span><span class="p">]</span>
<span class="n">Japan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Japan&quot;</span><span class="p">]</span>
<span class="n">Jordan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Jordan&quot;</span><span class="p">]</span>
<span class="n">Kazakhstan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Kazakhstan&quot;</span><span class="p">]</span>
<span class="n">Kenya_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Kenya&quot;</span><span class="p">]</span>
<span class="n">Kuwait_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Kuwait&quot;</span><span class="p">]</span>
<span class="n">Kyrgyz_Republic__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Kyrgyz_Republic_&quot;</span><span class="p">]</span>
<span class="n">Laos_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Laos&quot;</span><span class="p">]</span>
<span class="n">Latvia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Latvia&quot;</span><span class="p">]</span>
<span class="n">Lebanon_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Lebanon&quot;</span><span class="p">]</span>
<span class="n">Lesotho_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Lesotho&quot;</span><span class="p">]</span>
<span class="n">Lithuania_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Lithuania&quot;</span><span class="p">]</span>
<span class="n">Luxembourg_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Luxembourg&quot;</span><span class="p">]</span>
<span class="n">Madagascar_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Madagascar&quot;</span><span class="p">]</span>
<span class="n">Malawi_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Malawi&quot;</span><span class="p">]</span>
<span class="n">Malaysia__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Malaysia_&quot;</span><span class="p">]</span>
<span class="n">Mali_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Mali&quot;</span><span class="p">]</span>
<span class="n">Malta_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Malta&quot;</span><span class="p">]</span>
<span class="n">Mauritania_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Mauritania&quot;</span><span class="p">]</span>
<span class="n">Mexico_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Mexico&quot;</span><span class="p">]</span>
<span class="n">Moldova_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Moldova&quot;</span><span class="p">]</span>
<span class="n">Mongolia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Mongolia&quot;</span><span class="p">]</span>
<span class="n">Morocco_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Morocco&quot;</span><span class="p">]</span>
<span class="n">Mozambique__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Mozambique_&quot;</span><span class="p">]</span>
<span class="n">Namibia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Namibia&quot;</span><span class="p">]</span>
<span class="n">Nepal_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Nepal&quot;</span><span class="p">]</span>
<span class="n">Netherlands_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Netherlands&quot;</span><span class="p">]</span>
<span class="n">New_Zealand_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;New_Zealand&quot;</span><span class="p">]</span>
<span class="n">Nicaragua__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Nicaragua_&quot;</span><span class="p">]</span>
<span class="n">Niger_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Niger&quot;</span><span class="p">]</span>
<span class="n">Nigeria_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Nigeria&quot;</span><span class="p">]</span>
<span class="n">North_Korea_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;North_Korea&quot;</span><span class="p">]</span>
<span class="n">Norway_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Norway&quot;</span><span class="p">]</span>
<span class="n">Oman_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Oman&quot;</span><span class="p">]</span>
<span class="n">Pakistan__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Pakistan_&quot;</span><span class="p">]</span>
<span class="n">Panama__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Panama_&quot;</span><span class="p">]</span>
<span class="n">Paraguay__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Paraguay_&quot;</span><span class="p">]</span>
<span class="n">Peru_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Peru&quot;</span><span class="p">]</span>
<span class="n">Philippines_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Philippines&quot;</span><span class="p">]</span>
<span class="n">Poland_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Poland&quot;</span><span class="p">]</span>
<span class="n">Portugal_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Portugal&quot;</span><span class="p">]</span>
<span class="n">Republic_of_Congo__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Republic_of_Congo_&quot;</span><span class="p">]</span>
<span class="n">Romania_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Romania&quot;</span><span class="p">]</span>
<span class="n">Russia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Russia&quot;</span><span class="p">]</span>
<span class="n">Rwanda_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Rwanda&quot;</span><span class="p">]</span>
<span class="n">Saudi_Arabia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Saudi_Arabia&quot;</span><span class="p">]</span>
<span class="n">Senegal_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Senegal&quot;</span><span class="p">]</span>
<span class="n">Sierra_Leone_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Sierra_Leone&quot;</span><span class="p">]</span>
<span class="n">Singapore_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Singapore&quot;</span><span class="p">]</span>
<span class="n">Slovakia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Slovakia&quot;</span><span class="p">]</span>
<span class="n">Slovenia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Slovenia&quot;</span><span class="p">]</span>
<span class="n">South_Africa_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;South_Africa&quot;</span><span class="p">]</span>
<span class="n">South_Korea_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;South_Korea&quot;</span><span class="p">]</span>
<span class="n">Spain_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Spain&quot;</span><span class="p">]</span>
<span class="n">Sri_Lanka_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Sri_Lanka&quot;</span><span class="p">]</span>
<span class="n">Suriname_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Suriname&quot;</span><span class="p">]</span>
<span class="n">Sweden_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Sweden&quot;</span><span class="p">]</span>
<span class="n">Switzerland_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Switzerland&quot;</span><span class="p">]</span>
<span class="n">Taiwan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Taiwan&quot;</span><span class="p">]</span>
<span class="n">Tajikistan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Tajikistan&quot;</span><span class="p">]</span>
<span class="n">Tanzania_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Tanzania&quot;</span><span class="p">]</span>
<span class="n">Thailand__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Thailand_&quot;</span><span class="p">]</span>
<span class="n">The_Bahamas_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;The_Bahamas&quot;</span><span class="p">]</span>
<span class="n">The_Gambia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;The_Gambia&quot;</span><span class="p">]</span>
<span class="n">Trinidad_and_Tobago_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Trinidad_and_Tobago&quot;</span><span class="p">]</span>
<span class="n">Tunisia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Tunisia&quot;</span><span class="p">]</span>
<span class="n">Turkey_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Turkey&quot;</span><span class="p">]</span>
<span class="n">Turkmenistan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Turkmenistan&quot;</span><span class="p">]</span>
<span class="n">Uganda_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Uganda&quot;</span><span class="p">]</span>
<span class="n">Ukraine_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Ukraine&quot;</span><span class="p">]</span>
<span class="n">United_Arab_Emirates_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;United_Arab_Emirates&quot;</span><span class="p">]</span>
<span class="n">United_Kingdom_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;United_Kingdom&quot;</span><span class="p">]</span>
<span class="n">United_States_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;United_States&quot;</span><span class="p">]</span>
<span class="n">Uruguay__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Uruguay_&quot;</span><span class="p">]</span>
<span class="n">Uzbekistan_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Uzbekistan&quot;</span><span class="p">]</span>
<span class="n">Venezuela__data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Venezuela_&quot;</span><span class="p">]</span>
<span class="n">Vietnam_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Vietnam&quot;</span><span class="p">]</span>
<span class="n">Zambia_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Zambia&quot;</span><span class="p">]</span>
<span class="n">Zimbabwe_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">==</span><span class="s2">&quot;Zimbabwe&quot;</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">country_data</span> <span class="o">=</span> <span class="p">[</span>
   <span class="n">Albania_data</span><span class="p">,</span>
<span class="n">Algeria_data</span><span class="p">,</span>
<span class="n">Argentina_data</span><span class="p">,</span>
<span class="n">Armenia_data</span><span class="p">,</span>
<span class="n">Australia_data</span><span class="p">,</span>
<span class="n">Austria_data</span><span class="p">,</span>
<span class="n">Azerbaijan_data</span><span class="p">,</span>
<span class="n">Bahrain_data</span><span class="p">,</span>
<span class="n">Bangladesh__data</span><span class="p">,</span>
<span class="n">Barbados_data</span><span class="p">,</span>
<span class="n">Belarus_data</span><span class="p">,</span>
<span class="n">Belgium_data</span><span class="p">,</span>
<span class="n">Belize_data</span><span class="p">,</span>
<span class="n">Benin_data</span><span class="p">,</span>
<span class="n">Bolivia_data</span><span class="p">,</span>
<span class="n">Bosnia_and_Herzegovina_data</span><span class="p">,</span>
<span class="n">Botswana_data</span><span class="p">,</span>
<span class="n">Brazil_data</span><span class="p">,</span>
<span class="n">Brunei_Darussalam_data</span><span class="p">,</span>
<span class="n">Bulgaria_data</span><span class="p">,</span>
<span class="n">Burkina_Faso_data</span><span class="p">,</span>
<span class="n">Burma_data</span><span class="p">,</span>
<span class="n">Cabo_Verde_data</span><span class="p">,</span>
<span class="n">Cambodia_data</span><span class="p">,</span>
<span class="n">Cameroon_data</span><span class="p">,</span>
<span class="n">Canada_data</span><span class="p">,</span>
<span class="n">Chad_data</span><span class="p">,</span>
<span class="n">Chile_data</span><span class="p">,</span>
<span class="n">China_data</span><span class="p">,</span>
<span class="n">Colombia_data</span><span class="p">,</span>
<span class="n">Costa_Rica__data</span><span class="p">,</span>
<span class="n">Cote_d_Ivoire__data</span><span class="p">,</span>
<span class="n">Croatia_data</span><span class="p">,</span>
<span class="n">Cuba_data</span><span class="p">,</span>
<span class="n">Cyprus_data</span><span class="p">,</span>
<span class="n">Czech_Republic_data</span><span class="p">,</span>
<span class="n">Denmark_data</span><span class="p">,</span>
<span class="n">Djibouti_data</span><span class="p">,</span>
<span class="n">Dominican_Republic_data</span><span class="p">,</span>
<span class="n">Ecuador_data</span><span class="p">,</span>
<span class="n">Egypt_data</span><span class="p">,</span>
<span class="n">El_Salvador__data</span><span class="p">,</span>
<span class="n">Equatorial_Guinea_data</span><span class="p">,</span>
<span class="n">Estonia_data</span><span class="p">,</span>
<span class="n">Eswatini_data</span><span class="p">,</span>
<span class="n">Ethiopia_data</span><span class="p">,</span>
<span class="n">Fiji_data</span><span class="p">,</span>
<span class="n">Finland_data</span><span class="p">,</span>
<span class="n">France_data</span><span class="p">,</span>
<span class="n">Gabon_data</span><span class="p">,</span>
<span class="n">Georgia_data</span><span class="p">,</span>
<span class="n">Germany_data</span><span class="p">,</span>
<span class="n">Ghana_data</span><span class="p">,</span>
<span class="n">Greece_data</span><span class="p">,</span>
<span class="n">Guatemala__data</span><span class="p">,</span>
<span class="n">Guinea_data</span><span class="p">,</span>
<span class="n">Guyana_data</span><span class="p">,</span>
<span class="n">Haiti_data</span><span class="p">,</span>
<span class="n">Honduras__data</span><span class="p">,</span>
<span class="n">Hong_Kong_data</span><span class="p">,</span>
<span class="n">Hungary__data</span><span class="p">,</span>
<span class="n">Iceland_data</span><span class="p">,</span>
<span class="n">India_data</span><span class="p">,</span>
<span class="n">Indonesia_data</span><span class="p">,</span>
<span class="n">Iran_data</span><span class="p">,</span>
<span class="n">Ireland_data</span><span class="p">,</span>
<span class="n">Israel_data</span><span class="p">,</span>
<span class="n">Italy_data</span><span class="p">,</span>
<span class="n">Jamaica__data</span><span class="p">,</span>
<span class="n">Japan_data</span><span class="p">,</span>
<span class="n">Jordan_data</span><span class="p">,</span>
<span class="n">Kazakhstan_data</span><span class="p">,</span>
<span class="n">Kenya_data</span><span class="p">,</span>
<span class="n">Kuwait_data</span><span class="p">,</span>
<span class="n">Kyrgyz_Republic__data</span><span class="p">,</span>
<span class="n">Laos_data</span><span class="p">,</span>
<span class="n">Latvia_data</span><span class="p">,</span>
<span class="n">Lebanon_data</span><span class="p">,</span>
<span class="n">Lesotho_data</span><span class="p">,</span>
<span class="n">Lithuania_data</span><span class="p">,</span>
<span class="n">Luxembourg_data</span><span class="p">,</span>
<span class="n">Madagascar_data</span><span class="p">,</span>
<span class="n">Malawi_data</span><span class="p">,</span>
<span class="n">Malaysia__data</span><span class="p">,</span>
<span class="n">Mali_data</span><span class="p">,</span>
<span class="n">Malta_data</span><span class="p">,</span>
<span class="n">Mauritania_data</span><span class="p">,</span>
<span class="n">Mexico_data</span><span class="p">,</span>
<span class="n">Moldova_data</span><span class="p">,</span>
<span class="n">Mongolia_data</span><span class="p">,</span>
<span class="n">Morocco_data</span><span class="p">,</span>
<span class="n">Mozambique__data</span><span class="p">,</span>
<span class="n">Namibia_data</span><span class="p">,</span>
<span class="n">Nepal_data</span><span class="p">,</span>
<span class="n">Netherlands_data</span><span class="p">,</span>
<span class="n">New_Zealand_data</span><span class="p">,</span>
<span class="n">Nicaragua__data</span><span class="p">,</span>
<span class="n">Niger_data</span><span class="p">,</span>
<span class="n">Nigeria_data</span><span class="p">,</span>
<span class="n">North_Korea_data</span><span class="p">,</span>
<span class="n">Norway_data</span><span class="p">,</span>
<span class="n">Oman_data</span><span class="p">,</span>
<span class="n">Pakistan__data</span><span class="p">,</span>
<span class="n">Panama__data</span><span class="p">,</span>
<span class="n">Paraguay__data</span><span class="p">,</span>
<span class="n">Peru_data</span><span class="p">,</span>
<span class="n">Philippines_data</span><span class="p">,</span>
<span class="n">Poland_data</span><span class="p">,</span>
<span class="n">Portugal_data</span><span class="p">,</span>
<span class="n">Republic_of_Congo__data</span><span class="p">,</span>
<span class="n">Romania_data</span><span class="p">,</span>
<span class="n">Russia_data</span><span class="p">,</span>
<span class="n">Rwanda_data</span><span class="p">,</span>
<span class="n">Saudi_Arabia_data</span><span class="p">,</span>
<span class="n">Senegal_data</span><span class="p">,</span>
<span class="n">Sierra_Leone_data</span><span class="p">,</span>
<span class="n">Singapore_data</span><span class="p">,</span>
<span class="n">Slovakia_data</span><span class="p">,</span>
<span class="n">Slovenia_data</span><span class="p">,</span>
<span class="n">South_Africa_data</span><span class="p">,</span>
<span class="n">South_Korea_data</span><span class="p">,</span>
<span class="n">Spain_data</span><span class="p">,</span>
<span class="n">Sri_Lanka_data</span><span class="p">,</span>
<span class="n">Suriname_data</span><span class="p">,</span>
<span class="n">Sweden_data</span><span class="p">,</span>
<span class="n">Switzerland_data</span><span class="p">,</span>
<span class="n">Taiwan_data</span><span class="p">,</span>
<span class="n">Tajikistan_data</span><span class="p">,</span>
<span class="n">Tanzania_data</span><span class="p">,</span>
<span class="n">Thailand__data</span><span class="p">,</span>
<span class="n">The_Bahamas_data</span><span class="p">,</span>
<span class="n">The_Gambia_data</span><span class="p">,</span>
<span class="n">Trinidad_and_Tobago_data</span><span class="p">,</span>
<span class="n">Tunisia_data</span><span class="p">,</span>
<span class="n">Turkey_data</span><span class="p">,</span>
<span class="n">Turkmenistan_data</span><span class="p">,</span>
<span class="n">Uganda_data</span><span class="p">,</span>
<span class="n">Ukraine_data</span><span class="p">,</span>
<span class="n">United_Arab_Emirates_data</span><span class="p">,</span>
<span class="n">United_Kingdom_data</span><span class="p">,</span>
<span class="n">United_States_data</span><span class="p">,</span>
<span class="n">Uruguay__data</span><span class="p">,</span>
<span class="n">Uzbekistan_data</span><span class="p">,</span>
<span class="n">Venezuela__data</span><span class="p">,</span>
<span class="n">Vietnam_data</span><span class="p">,</span>
<span class="n">Zambia_data</span><span class="p">,</span>
<span class="n">Zimbabwe_data</span>
<span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df</span><span class="o">.</span><span class="n">isnull</span><span class="p">()</span>
<span class="n">df</span><span class="o">.</span><span class="n">isnull</span><span class="p">()</span><span class="o">.</span><span class="n">sum</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>name                    0
index_country           0
index_year              0
adjusted_score          0
overall_score           0
property_rights         0
government_integrity    0
tax_burden              0
government_spending     0
business_freedom        0
monetary_freedom        0
trade_freedom           0
investment_freedom      0
financial_freedom       0
dtype: int64</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>This heatmap was useful to us to find which factor had the highest correlation to score.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">df_noyear</span> <span class="o">=</span> <span class="n">df</span><span class="o">.</span><span class="n">drop</span><span class="p">([</span><span class="s1">&#39;index_country&#39;</span><span class="p">,</span> <span class="s1">&#39;index_year&#39;</span><span class="p">,</span><span class="s1">&#39;overall_score&#39;</span><span class="p">],</span> <span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">)</span> 
<span class="n">corr</span> <span class="o">=</span> <span class="n">df_noyear</span><span class="o">.</span><span class="n">corr</span><span class="p">()</span>

<span class="n">corr</span><span class="o">.</span><span class="n">style</span><span class="o">.</span><span class="n">background_gradient</span><span class="p">(</span><span class="n">cmap</span><span class="o">=</span><span class="s1">&#39;coolwarm&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<style  type="text/css" >
    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col0 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col1 {
            background-color:  #e46e56;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col2 {
            background-color:  #e8765c;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col3 {
            background-color:  #b2ccfb;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col4 {
            background-color:  #9fbfff;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col5 {
            background-color:  #e8765c;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col6 {
            background-color:  #f6bea4;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col7 {
            background-color:  #f7b194;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col8 {
            background-color:  #ec7f63;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col9 {
            background-color:  #e57058;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col0 {
            background-color:  #ef886b;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col1 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col2 {
            background-color:  #d85646;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col3 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col4 {
            background-color:  #4a63d3;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col5 {
            background-color:  #f18d6f;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col6 {
            background-color:  #bcd2f7;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col7 {
            background-color:  #dadce0;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col8 {
            background-color:  #f7a688;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col9 {
            background-color:  #f7a688;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col0 {
            background-color:  #f39778;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col1 {
            background-color:  #da5a49;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col2 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col3 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col4 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col5 {
            background-color:  #f39778;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col6 {
            background-color:  #c7d7f0;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col7 {
            background-color:  #ead5c9;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col8 {
            background-color:  #f6bfa6;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col9 {
            background-color:  #f7b599;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col0 {
            background-color:  #8badfd;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col1 {
            background-color:  #6485ec;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col2 {
            background-color:  #7396f5;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col3 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col4 {
            background-color:  #f7b89c;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col5 {
            background-color:  #7ea1fa;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col6 {
            background-color:  #6a8bef;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col7 {
            background-color:  #aac7fd;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col8 {
            background-color:  #5e7de7;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col9 {
            background-color:  #7396f5;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col0 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col1 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col2 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col3 {
            background-color:  #f1ccb8;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col4 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col5 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col6 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col7 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col8 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col9 {
            background-color:  #3b4cc0;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col0 {
            background-color:  #ee8669;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col1 {
            background-color:  #ed8366;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col2 {
            background-color:  #ef886b;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col3 {
            background-color:  #7699f6;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col4 {
            background-color:  #6b8df0;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col5 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col6 {
            background-color:  #bed2f6;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col7 {
            background-color:  #e7d7ce;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col8 {
            background-color:  #f7ba9f;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col9 {
            background-color:  #f7b396;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col0 {
            background-color:  #f6bda2;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col1 {
            background-color:  #ead4c8;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col2 {
            background-color:  #f2c9b4;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col3 {
            background-color:  #9abbff;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col4 {
            background-color:  #a3c2fe;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col5 {
            background-color:  #dfdbd9;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col6 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col7 {
            background-color:  #d7dce3;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col8 {
            background-color:  #e0dbd8;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col9 {
            background-color:  #e9d5cb;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col0 {
            background-color:  #f4c5ad;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col1 {
            background-color:  #ead5c9;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col2 {
            background-color:  #f5c4ac;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col3 {
            background-color:  #a6c4fe;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col4 {
            background-color:  #6f92f3;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col5 {
            background-color:  #e8d6cc;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col6 {
            background-color:  #b5cdfa;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col7 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col8 {
            background-color:  #e5d8d1;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col9 {
            background-color:  #e6d7cf;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col0 {
            background-color:  #f18f71;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col1 {
            background-color:  #f4987a;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col2 {
            background-color:  #f7ac8e;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col3 {
            background-color:  #5977e3;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col4 {
            background-color:  #6f92f3;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col5 {
            background-color:  #f7b99e;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col6 {
            background-color:  #c3d5f4;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col7 {
            background-color:  #e4d9d2;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col8 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col9 {
            background-color:  #f29072;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col0 {
            background-color:  #ec7f63;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col1 {
            background-color:  #f39778;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col2 {
            background-color:  #f6a283;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col3 {
            background-color:  #7093f3;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col4 {
            background-color:  #7295f4;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col5 {
            background-color:  #f7b093;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col6 {
            background-color:  #d2dbe8;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col7 {
            background-color:  #e7d7ce;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col8 {
            background-color:  #f29072;
            color:  #000000;
        }    #T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col9 {
            background-color:  #b40426;
            color:  #f1f1f1;
        }</style><table id="T_1c924784_6dcd_11e9_931f_0242ac1c0002" ><thead>    <tr>        <th class="blank level0" ></th>        <th class="col_heading level0 col0" >adjusted_score</th>        <th class="col_heading level0 col1" >property_rights</th>        <th class="col_heading level0 col2" >government_integrity</th>        <th class="col_heading level0 col3" >tax_burden</th>        <th class="col_heading level0 col4" >government_spending</th>        <th class="col_heading level0 col5" >business_freedom</th>        <th class="col_heading level0 col6" >monetary_freedom</th>        <th class="col_heading level0 col7" >trade_freedom</th>        <th class="col_heading level0 col8" >investment_freedom</th>        <th class="col_heading level0 col9" >financial_freedom</th>    </tr></thead><tbody>
                <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row0" class="row_heading level0 row0" >adjusted_score</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col0" class="data row0 col0" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col1" class="data row0 col1" >0.792077</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col2" class="data row0 col2" >0.757333</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col3" class="data row0 col3" >0.243654</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col4" class="data row0 col4" >-0.00183445</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col5" class="data row0 col5" >0.794167</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col6" class="data row0 col6" >0.65105</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col7" class="data row0 col7" >0.623332</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col8" class="data row0 col8" >0.774741</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row0_col9" class="data row0 col9" >0.81207</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row1" class="row_heading level0 row1" >property_rights</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col0" class="data row1 col0" >0.792077</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col1" class="data row1 col1" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col2" class="data row1 col2" >0.844348</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col3" class="data row1 col3" >-0.17471</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col4" class="data row1 col4" >-0.35795</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col5" class="data row1 col5" >0.73406</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col6" class="data row1 col6" >0.399394</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col7" class="data row1 col7" >0.390069</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col8" class="data row1 col8" >0.662032</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row1_col9" class="data row1 col9" >0.666881</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row2" class="row_heading level0 row2" >government_integrity</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col0" class="data row2 col0" >0.757333</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col1" class="data row2 col1" >0.844348</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col2" class="data row2 col2" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col3" class="data row2 col3" >-0.176168</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col4" class="data row2 col4" >-0.433027</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col5" class="data row2 col5" >0.702861</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col6" class="data row2 col6" >0.43486</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col7" class="data row2 col7" >0.467036</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col8" class="data row2 col8" >0.570803</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row2_col9" class="data row2 col9" >0.613645</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row3" class="row_heading level0 row3" >tax_burden</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col0" class="data row3 col0" >0.243654</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col1" class="data row3 col1" >-0.17471</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col2" class="data row3 col2" >-0.176168</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col3" class="data row3 col3" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col4" class="data row3 col4" >0.522203</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col5" class="data row3 col5" >0.0420737</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col6" class="data row3 col6" >0.163307</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col7" class="data row3 col7" >0.20387</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col8" class="data row3 col8" >-0.0567688</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row3_col9" class="data row3 col9" >0.0252858</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row4" class="row_heading level0 row4" >government_spending</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col0" class="data row4 col0" >-0.00183445</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col1" class="data row4 col1" >-0.35795</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col2" class="data row4 col2" >-0.433027</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col3" class="data row4 col3" >0.522203</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col4" class="data row4 col4" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col5" class="data row4 col5" >-0.211815</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col6" class="data row4 col6" >0.0161732</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col7" class="data row4 col7" >-0.194398</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col8" class="data row4 col8" >-0.196446</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row4_col9" class="data row4 col9" >-0.183304</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row5" class="row_heading level0 row5" >business_freedom</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col0" class="data row5 col0" >0.794167</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col1" class="data row5 col1" >0.73406</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col2" class="data row5 col2" >0.702861</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col3" class="data row5 col3" >0.0420737</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col4" class="data row5 col4" >-0.211815</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col5" class="data row5 col5" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col6" class="data row5 col6" >0.404132</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col7" class="data row5 col7" >0.449622</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col8" class="data row5 col8" >0.590173</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row5_col9" class="data row5 col9" >0.623479</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row6" class="row_heading level0 row6" >monetary_freedom</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col0" class="data row6 col0" >0.65105</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col1" class="data row6 col1" >0.399394</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col2" class="data row6 col2" >0.43486</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col3" class="data row6 col3" >0.163307</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col4" class="data row6 col4" >0.0161732</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col5" class="data row6 col5" >0.404132</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col6" class="data row6 col6" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col7" class="data row6 col7" >0.377302</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col8" class="data row6 col8" >0.41752</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row6_col9" class="data row6 col9" >0.467415</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row7" class="row_heading level0 row7" >trade_freedom</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col0" class="data row7 col0" >0.623332</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col1" class="data row7 col1" >0.390069</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col2" class="data row7 col2" >0.467036</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col3" class="data row7 col3" >0.20387</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col4" class="data row7 col4" >-0.194398</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col5" class="data row7 col5" >0.449622</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col6" class="data row7 col6" >0.377302</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col7" class="data row7 col7" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col8" class="data row7 col8" >0.4394</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row7_col9" class="data row7 col9" >0.450516</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row8" class="row_heading level0 row8" >investment_freedom</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col0" class="data row8 col0" >0.774741</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col1" class="data row8 col1" >0.662032</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col2" class="data row8 col2" >0.570803</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col3" class="data row8 col3" >-0.0567688</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col4" class="data row8 col4" >-0.196446</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col5" class="data row8 col5" >0.590173</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col6" class="data row8 col6" >0.41752</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col7" class="data row8 col7" >0.4394</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col8" class="data row8 col8" >1</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row8_col9" class="data row8 col9" >0.728895</td>
            </tr>
            <tr>
                        <th id="T_1c924784_6dcd_11e9_931f_0242ac1c0002level0_row9" class="row_heading level0 row9" >financial_freedom</th>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col0" class="data row9 col0" >0.81207</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col1" class="data row9 col1" >0.666881</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col2" class="data row9 col2" >0.613645</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col3" class="data row9 col3" >0.0252858</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col4" class="data row9 col4" >-0.183304</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col5" class="data row9 col5" >0.623479</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col6" class="data row9 col6" >0.467415</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col7" class="data row9 col7" >0.450516</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col8" class="data row9 col8" >0.728895</td>
                        <td id="T_1c924784_6dcd_11e9_931f_0242ac1c0002row9_col9" class="data row9 col9" >1</td>
            </tr>
    </tbody></table>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>This function simply found the top five adjusted scores</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">top</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">country_data</span><span class="p">:</span>
  <span class="n">top</span><span class="o">.</span><span class="n">append</span><span class="p">([[</span><span class="n">x</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="o">-</span><span class="mi">1</span><span class="p">][</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">]],[</span><span class="n">x</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="s1">&#39;name&#39;</span><span class="p">]]])</span>
  
<span class="n">top</span><span class="o">.</span><span class="n">sort</span><span class="p">(</span><span class="n">key</span><span class="o">=</span><span class="n">itemgetter</span><span class="p">(</span><span class="mi">0</span><span class="p">),</span> <span class="n">reverse</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">top</span><span class="p">[:</span><span class="mi">5</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[[[90.85], [&#39;Hong_Kong&#39;]],
 [[89.89], [&#39;Singapore&#39;]],
 [[82.84], [&#39;New_Zealand&#39;]],
 [[81.41], [&#39;Ireland&#39;]],
 [[81.35], [&#39;Switzerland&#39;]]]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">output_notebook</span><span class="p">()</span>

<span class="n">v</span> <span class="o">=</span> <span class="n">figure</span><span class="p">(</span><span class="n">title</span> <span class="o">=</span> <span class="s1">&#39;Countries Overall Score By Year&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">title</span><span class="o">.</span><span class="n">align</span> <span class="o">=</span> <span class="s1">&#39;center&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">xaxis</span><span class="o">.</span><span class="n">axis_label</span> <span class="o">=</span> <span class="s1">&#39;Year&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">xaxis</span><span class="o">.</span><span class="n">axis_label_text_font_size</span> <span class="o">=</span> <span class="s2">&quot;12pt&quot;</span>
<span class="n">v</span><span class="o">.</span><span class="n">yaxis</span><span class="o">.</span><span class="n">axis_label</span> <span class="o">=</span> <span class="s1">&#39;Overall Score&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">yaxis</span><span class="o">.</span><span class="n">axis_label_text_font_size</span> <span class="o">=</span> <span class="s2">&quot;12pt&quot;</span>



<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Hong_Kong_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Hong_Kong_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;red&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Hong Kong&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Hong_Kong_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Hong_Kong_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;red&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Hong Kong&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">New_Zealand_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span> <span class="o">=</span> <span class="n">New_Zealand_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;purple&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;New Zealand&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">New_Zealand_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span> <span class="o">=</span> <span class="n">New_Zealand_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;purple&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;New Zealand&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Singapore_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Singapore_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;green&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Singapore&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Singapore_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Singapore_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;green&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Singapore&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Switzerland_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Switzerland_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;black&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Switzerland&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Switzerland_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Switzerland_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;black&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Switzerland&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Ireland_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Ireland_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;blue&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Ireland&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">Ireland_data</span><span class="p">[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">Ireland_data</span><span class="p">[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;blue&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Ireland&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">legend</span><span class="o">.</span><span class="n">location</span> <span class="o">=</span> <span class="s1">&#39;bottom_right&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">legend</span><span class="o">.</span><span class="n">background_fill_color</span> <span class="o">=</span> <span class="s2">&quot;gray&quot;</span>
<span class="n">v</span><span class="o">.</span><span class="n">legend</span><span class="o">.</span><span class="n">background_fill_alpha</span> <span class="o">=</span> <span class="o">.</span><span class="mi">1</span>

<span class="n">show</span><span class="p">(</span><span class="n">v</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">

    <div class="bk-root">
        <a href="https://bokeh.pydata.org" target="_blank" class="bk-logo bk-logo-small bk-logo-notebook"></a>
        <span id="1001">Loading BokehJS ...</span>
    </div>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>





<div id="fe84c9b7-ed21-4e28-8a57-e397f1faa091"></div>
<div class="output_subarea output_javascript ">
<script type="text/javascript">
var element = $('#fe84c9b7-ed21-4e28-8a57-e397f1faa091');

(function(root) {
  function now() {
    return new Date();
  }

  var force = true;

  if (typeof (root._bokeh_onload_callbacks) === "undefined" || force === true) {
    root._bokeh_onload_callbacks = [];
    root._bokeh_is_loading = undefined;
  }

  var JS_MIME_TYPE = 'application/javascript';
  var HTML_MIME_TYPE = 'text/html';
  var EXEC_MIME_TYPE = 'application/vnd.bokehjs_exec.v0+json';
  var CLASS_NAME = 'output_bokeh rendered_html';

  /**
   * Render data to the DOM node
   */
  function render(props, node) {
    var script = document.createElement("script");
    node.appendChild(script);
  }

  /**
   * Handle when an output is cleared or removed
   */
  function handleClearOutput(event, handle) {
    var cell = handle.cell;

    var id = cell.output_area._bokeh_element_id;
    var server_id = cell.output_area._bokeh_server_id;
    // Clean up Bokeh references
    if (id != null && id in Bokeh.index) {
      Bokeh.index[id].model.document.clear();
      delete Bokeh.index[id];
    }

    if (server_id !== undefined) {
      // Clean up Bokeh references
      var cmd = "from bokeh.io.state import curstate; print(curstate().uuid_to_server['" + server_id + "'].get_sessions()[0].document.roots[0]._id)";
      cell.notebook.kernel.execute(cmd, {
        iopub: {
          output: function(msg) {
            var id = msg.content.text.trim();
            if (id in Bokeh.index) {
              Bokeh.index[id].model.document.clear();
              delete Bokeh.index[id];
            }
          }
        }
      });
      // Destroy server and session
      var cmd = "import bokeh.io.notebook as ion; ion.destroy_server('" + server_id + "')";
      cell.notebook.kernel.execute(cmd);
    }
  }

  /**
   * Handle when a new output is added
   */
  function handleAddOutput(event, handle) {
    var output_area = handle.output_area;
    var output = handle.output;

    // limit handleAddOutput to display_data with EXEC_MIME_TYPE content only
    if ((output.output_type != "display_data") || (!output.data.hasOwnProperty(EXEC_MIME_TYPE))) {
      return
    }

    var toinsert = output_area.element.find("." + CLASS_NAME.split(' ')[0]);

    if (output.metadata[EXEC_MIME_TYPE]["id"] !== undefined) {
      toinsert[toinsert.length - 1].firstChild.textContent = output.data[JS_MIME_TYPE];
      // store reference to embed id on output_area
      output_area._bokeh_element_id = output.metadata[EXEC_MIME_TYPE]["id"];
    }
    if (output.metadata[EXEC_MIME_TYPE]["server_id"] !== undefined) {
      var bk_div = document.createElement("div");
      bk_div.innerHTML = output.data[HTML_MIME_TYPE];
      var script_attrs = bk_div.children[0].attributes;
      for (var i = 0; i < script_attrs.length; i++) {
        toinsert[toinsert.length - 1].firstChild.setAttribute(script_attrs[i].name, script_attrs[i].value);
      }
      // store reference to server id on output_area
      output_area._bokeh_server_id = output.metadata[EXEC_MIME_TYPE]["server_id"];
    }
  }

  function register_renderer(events, OutputArea) {

    function append_mime(data, metadata, element) {
      // create a DOM node to render to
      var toinsert = this.create_output_subarea(
        metadata,
        CLASS_NAME,
        EXEC_MIME_TYPE
      );
      this.keyboard_manager.register_events(toinsert);
      // Render to node
      var props = {data: data, metadata: metadata[EXEC_MIME_TYPE]};
      render(props, toinsert[toinsert.length - 1]);
      element.append(toinsert);
      return toinsert
    }

    /* Handle when an output is cleared or removed */
    events.on('clear_output.CodeCell', handleClearOutput);
    events.on('delete.Cell', handleClearOutput);

    /* Handle when a new output is added */
    events.on('output_added.OutputArea', handleAddOutput);

    /**
     * Register the mime type and append_mime function with output_area
     */
    OutputArea.prototype.register_mime_type(EXEC_MIME_TYPE, append_mime, {
      /* Is output safe? */
      safe: true,
      /* Index of renderer in `output_area.display_order` */
      index: 0
    });
  }

  // register the mime type if in Jupyter Notebook environment and previously unregistered
  if (root.Jupyter !== undefined) {
    var events = require('base/js/events');
    var OutputArea = require('notebook/js/outputarea').OutputArea;

    if (OutputArea.prototype.mime_types().indexOf(EXEC_MIME_TYPE) == -1) {
      register_renderer(events, OutputArea);
    }
  }

  
  if (typeof (root._bokeh_timeout) === "undefined" || force === true) {
    root._bokeh_timeout = Date.now() + 5000;
    root._bokeh_failed_load = false;
  }

  var NB_LOAD_WARNING = {'data': {'text/html':
     "<div style='background-color: #fdd'>\n"+
     "<p>\n"+
     "BokehJS does not appear to have successfully loaded. If loading BokehJS from CDN, this \n"+
     "may be due to a slow or bad network connection. Possible fixes:\n"+
     "</p>\n"+
     "<ul>\n"+
     "<li>re-rerun `output_notebook()` to attempt to load from CDN again, or</li>\n"+
     "<li>use INLINE resources instead, as so:</li>\n"+
     "</ul>\n"+
     "<code>\n"+
     "from bokeh.resources import INLINE\n"+
     "output_notebook(resources=INLINE)\n"+
     "</code>\n"+
     "</div>"}};

  function display_loaded() {
    var el = document.getElementById("1001");
    if (el != null) {
      el.textContent = "BokehJS is loading...";
    }
    if (root.Bokeh !== undefined) {
      if (el != null) {
        el.textContent = "BokehJS " + root.Bokeh.version + " successfully loaded.";
      }
    } else if (Date.now() < root._bokeh_timeout) {
      setTimeout(display_loaded, 100)
    }
  }


  function run_callbacks() {
    try {
      root._bokeh_onload_callbacks.forEach(function(callback) { callback() });
    }
    finally {
      delete root._bokeh_onload_callbacks
    }
    console.info("Bokeh: all callbacks have finished");
  }

  function load_libs(js_urls, callback) {
    root._bokeh_onload_callbacks.push(callback);
    if (root._bokeh_is_loading > 0) {
      console.log("Bokeh: BokehJS is being loaded, scheduling callback at", now());
      return null;
    }
    if (js_urls == null || js_urls.length === 0) {
      run_callbacks();
      return null;
    }
    console.log("Bokeh: BokehJS not loaded, scheduling load and callback at", now());
    root._bokeh_is_loading = js_urls.length;
    for (var i = 0; i < js_urls.length; i++) {
      var url = js_urls[i];
      var s = document.createElement('script');
      s.src = url;
      s.async = false;
      s.onreadystatechange = s.onload = function() {
        root._bokeh_is_loading--;
        if (root._bokeh_is_loading === 0) {
          console.log("Bokeh: all BokehJS libraries loaded");
          run_callbacks()
        }
      };
      s.onerror = function() {
        console.warn("failed to load library " + url);
      };
      console.log("Bokeh: injecting script tag for BokehJS library: ", url);
      document.getElementsByTagName("head")[0].appendChild(s);
    }
  };var element = document.getElementById("1001");
  if (element == null) {
    console.log("Bokeh: ERROR: autoload.js configured with elementid '1001' but no matching script tag was found. ")
    return false;
  }

  var js_urls = ["https://cdn.pydata.org/bokeh/release/bokeh-1.0.4.min.js", "https://cdn.pydata.org/bokeh/release/bokeh-widgets-1.0.4.min.js", "https://cdn.pydata.org/bokeh/release/bokeh-tables-1.0.4.min.js", "https://cdn.pydata.org/bokeh/release/bokeh-gl-1.0.4.min.js"];

  var inline_js = [
    function(Bokeh) {
      Bokeh.set_log_level("info");
    },
    
    function(Bokeh) {
      
    },
    function(Bokeh) {
      console.log("Bokeh: injecting CSS: https://cdn.pydata.org/bokeh/release/bokeh-1.0.4.min.css");
      Bokeh.embed.inject_css("https://cdn.pydata.org/bokeh/release/bokeh-1.0.4.min.css");
      console.log("Bokeh: injecting CSS: https://cdn.pydata.org/bokeh/release/bokeh-widgets-1.0.4.min.css");
      Bokeh.embed.inject_css("https://cdn.pydata.org/bokeh/release/bokeh-widgets-1.0.4.min.css");
      console.log("Bokeh: injecting CSS: https://cdn.pydata.org/bokeh/release/bokeh-tables-1.0.4.min.css");
      Bokeh.embed.inject_css("https://cdn.pydata.org/bokeh/release/bokeh-tables-1.0.4.min.css");
    }
  ];

  function run_inline_js() {
    
    if ((root.Bokeh !== undefined) || (force === true)) {
      for (var i = 0; i < inline_js.length; i++) {
        inline_js[i].call(root, root.Bokeh);
      }if (force === true) {
        display_loaded();
      }} else if (Date.now() < root._bokeh_timeout) {
      setTimeout(run_inline_js, 100);
    } else if (!root._bokeh_failed_load) {
      console.log("Bokeh: BokehJS failed to load within specified timeout.");
      root._bokeh_failed_load = true;
    } else if (force !== true) {
      var cell = $(document.getElementById("1001")).parents('.cell').data().cell;
      cell.output_area.append_execute_result(NB_LOAD_WARNING)
    }

  }

  if (root._bokeh_is_loading === 0) {
    console.log("Bokeh: BokehJS loaded, going straight to plotting");
    run_inline_js();
  } else {
    load_libs(js_urls, function() {
      console.log("Bokeh: BokehJS plotting callback run at", now());
      run_inline_js();
    });
  }
}(window));
</script>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">






  <div class="bk-root" id="916d4a37-ad71-4290-abfe-84af03bbb96a" data-root-id="1003"></div>

</div>

</div>

<div class="output_area">

    <div class="prompt"></div>





<div id="7e0e2699-3751-4c1e-9768-1d641c1bd7a0"></div>
<div class="output_subarea output_javascript ">
<script type="text/javascript">
var element = $('#7e0e2699-3751-4c1e-9768-1d641c1bd7a0');
(function(root) {
  function embed_document(root) {
    
  var docs_json = {"fe074169-b510-42df-824a-5e1fcfda6631":{"roots":{"references":[{"attributes":{"below":[{"id":"1013","type":"LinearAxis"}],"left":[{"id":"1018","type":"LinearAxis"}],"renderers":[{"id":"1013","type":"LinearAxis"},{"id":"1017","type":"Grid"},{"id":"1018","type":"LinearAxis"},{"id":"1022","type":"Grid"},{"id":"1031","type":"BoxAnnotation"},{"id":"1049","type":"Legend"},{"id":"1041","type":"GlyphRenderer"},{"id":"1054","type":"GlyphRenderer"},{"id":"1067","type":"GlyphRenderer"},{"id":"1083","type":"GlyphRenderer"},{"id":"1100","type":"GlyphRenderer"},{"id":"1120","type":"GlyphRenderer"},{"id":"1141","type":"GlyphRenderer"},{"id":"1165","type":"GlyphRenderer"},{"id":"1190","type":"GlyphRenderer"},{"id":"1218","type":"GlyphRenderer"}],"title":{"id":"1002","type":"Title"},"toolbar":{"id":"1029","type":"Toolbar"},"x_range":{"id":"1005","type":"DataRange1d"},"x_scale":{"id":"1009","type":"LinearScale"},"y_range":{"id":"1007","type":"DataRange1d"},"y_scale":{"id":"1011","type":"LinearScale"}},"id":"1003","subtype":"Figure","type":"Plot"},{"attributes":{"align":"center","plot":null,"text":"Countries Overall Score By Year"},"id":"1002","type":"Title"},{"attributes":{"line_color":"purple","x":{"field":"x"},"y":{"field":"y"}},"id":"1065","type":"Line"},{"attributes":{},"id":"1159","type":"Selection"},{"attributes":{"callback":null},"id":"1005","type":"DataRange1d"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"1066","type":"Line"},{"attributes":{},"id":"1160","type":"UnionRenderers"},{"attributes":{"callback":null},"id":"1007","type":"DataRange1d"},{"attributes":{"data_source":{"id":"1064","type":"ColumnDataSource"},"glyph":{"id":"1065","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1066","type":"Line"},"selection_glyph":null,"view":{"id":"1068","type":"CDSView"}},"id":"1067","type":"GlyphRenderer"},{"attributes":{"label":{"value":"Switzerland"},"renderers":[{"id":"1141","type":"GlyphRenderer"},{"id":"1165","type":"GlyphRenderer"}]},"id":"1161","type":"LegendItem"},{"attributes":{},"id":"1009","type":"LinearScale"},{"attributes":{"source":{"id":"1064","type":"ColumnDataSource"}},"id":"1068","type":"CDSView"},{"attributes":{},"id":"1011","type":"LinearScale"},{"attributes":{"fill_color":{"value":"black"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1163","type":"Circle"},{"attributes":{},"id":"1077","type":"Selection"},{"attributes":{"line_color":"red","x":{"field":"x"},"y":{"field":"y"}},"id":"1039","type":"Line"},{"attributes":{"axis_label":"Year","axis_label_text_font_size":{"value":"12pt"},"formatter":{"id":"1045","type":"BasicTickFormatter"},"plot":{"id":"1003","subtype":"Figure","type":"Plot"},"ticker":{"id":"1014","type":"BasicTicker"}},"id":"1013","type":"LinearAxis"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1164","type":"Circle"},{"attributes":{},"id":"1078","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"1162","type":"ColumnDataSource"},"glyph":{"id":"1163","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1164","type":"Circle"},"selection_glyph":null,"view":{"id":"1166","type":"CDSView"}},"id":"1165","type":"GlyphRenderer"},{"attributes":{},"id":"1014","type":"BasicTicker"},{"attributes":{"label":{"value":"New Zealand"},"renderers":[{"id":"1067","type":"GlyphRenderer"},{"id":"1083","type":"GlyphRenderer"}]},"id":"1079","type":"LegendItem"},{"attributes":{"source":{"id":"1162","type":"ColumnDataSource"}},"id":"1166","type":"CDSView"},{"attributes":{"plot":{"id":"1003","subtype":"Figure","type":"Plot"},"ticker":{"id":"1014","type":"BasicTicker"}},"id":"1017","type":"Grid"},{"attributes":{"fill_color":{"value":"purple"},"line_color":{"value":"purple"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1081","type":"Circle"},{"attributes":{},"id":"1185","type":"Selection"},{"attributes":{"axis_label":"Overall Score","axis_label_text_font_size":{"value":"12pt"},"formatter":{"id":"1047","type":"BasicTickFormatter"},"plot":{"id":"1003","subtype":"Figure","type":"Plot"},"ticker":{"id":"1019","type":"BasicTicker"}},"id":"1018","type":"LinearAxis"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1082","type":"Circle"},{"attributes":{},"id":"1186","type":"UnionRenderers"},{"attributes":{},"id":"1019","type":"BasicTicker"},{"attributes":{"data_source":{"id":"1080","type":"ColumnDataSource"},"glyph":{"id":"1081","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1082","type":"Circle"},"selection_glyph":null,"view":{"id":"1084","type":"CDSView"}},"id":"1083","type":"GlyphRenderer"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"4XoUrkchUUAAAAAAACBRQKRwPQrXI1JA4XoUrkdxUkApXI/C9ahSQIXrUbgeBVNAzczMzMxMVECuR+F6FB5UQHsUrkfhOlRAhetRuB4VVECkcD0K10NUQFyPwvUonFRAFK5H4Xq0VEApXI/C9ahUQFyPwvUonFRAMzMzMzNjVEAUrkfherRTQFK4HoXrMVNAuB6F61HoUkBmZmZmZvZSQOxRuB6FK1NAhetRuB51U0AzMzMzM6NTQClcj8L1OFRACtejcD1aVEA=","dtype":"float64","shape":[25]}},"selected":{"id":"1268","type":"Selection"},"selection_policy":{"id":"1269","type":"UnionRenderers"}},"id":"1215","type":"ColumnDataSource"},{"attributes":{"active_drag":"auto","active_inspect":"auto","active_multi":null,"active_scroll":"auto","active_tap":"auto","tools":[{"id":"1023","type":"PanTool"},{"id":"1024","type":"WheelZoomTool"},{"id":"1025","type":"BoxZoomTool"},{"id":"1026","type":"SaveTool"},{"id":"1027","type":"ResetTool"},{"id":"1028","type":"HelpTool"}]},"id":"1029","type":"Toolbar"},{"attributes":{"source":{"id":"1080","type":"ColumnDataSource"}},"id":"1084","type":"CDSView"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"4XoUrkchUUAAAAAAACBRQKRwPQrXI1JA4XoUrkdxUkApXI/C9ahSQIXrUbgeBVNAzczMzMxMVECuR+F6FB5UQHsUrkfhOlRAhetRuB4VVECkcD0K10NUQFyPwvUonFRAFK5H4Xq0VEApXI/C9ahUQFyPwvUonFRAMzMzMzNjVEAUrkfherRTQFK4HoXrMVNAuB6F61HoUkBmZmZmZvZSQOxRuB6FK1NAhetRuB51U0AzMzMzM6NTQClcj8L1OFRACtejcD1aVEA=","dtype":"float64","shape":[25]}},"selected":{"id":"1242","type":"Selection"},"selection_policy":{"id":"1243","type":"UnionRenderers"}},"id":"1187","type":"ColumnDataSource"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"1040","type":"Line"},{"attributes":{"line_color":"blue","x":{"field":"x"},"y":{"field":"y"}},"id":"1188","type":"Line"},{"attributes":{},"id":"1095","type":"Selection"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"1189","type":"Line"},{"attributes":{},"id":"1096","type":"UnionRenderers"},{"attributes":{},"id":"1023","type":"PanTool"},{"attributes":{"data_source":{"id":"1187","type":"ColumnDataSource"},"glyph":{"id":"1188","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1189","type":"Line"},"selection_glyph":null,"view":{"id":"1191","type":"CDSView"}},"id":"1190","type":"GlyphRenderer"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"9ihcj8KVVUDD9Shcj6JVQEjhehSu11VArkfhehS+VUBcj8L1KLxVQArXo3A96lVApHA9CtfzVUC4HoXrUdhVQOxRuB6FC1ZAuB6F61E4VkDsUbgehetVQAAAAAAAwFVAMzMzMzODVUCuR+F6FI5VQHE9CtejgFVAFK5H4Xo0VUBmZmZmZoZVQHE9CtejwFVAmpmZmZnpVUDNzMzMzCxWQGZmZmZmJlZAj8L1KFzfVUDXo3A9CjdWQDMzMzMzQ1ZAKVyPwvV4VkA=","dtype":"float64","shape":[25]}},"selected":{"id":"1159","type":"Selection"},"selection_policy":{"id":"1160","type":"UnionRenderers"}},"id":"1117","type":"ColumnDataSource"},{"attributes":{},"id":"1024","type":"WheelZoomTool"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"9ihcj8KVVUDD9Shcj6JVQEjhehSu11VArkfhehS+VUBcj8L1KLxVQArXo3A96lVApHA9CtfzVUC4HoXrUdhVQOxRuB6FC1ZAuB6F61E4VkDsUbgehetVQAAAAAAAwFVAMzMzMzODVUCuR+F6FI5VQHE9CtejgFVAFK5H4Xo0VUBmZmZmZoZVQHE9CtejwFVAmpmZmZnpVUDNzMzMzCxWQGZmZmZmJlZAj8L1KFzfVUDXo3A9CjdWQDMzMzMzQ1ZAKVyPwvV4VkA=","dtype":"float64","shape":[25]}},"selected":{"id":"1136","type":"Selection"},"selection_policy":{"id":"1137","type":"UnionRenderers"}},"id":"1097","type":"ColumnDataSource"},{"attributes":{"source":{"id":"1187","type":"ColumnDataSource"}},"id":"1191","type":"CDSView"},{"attributes":{"overlay":{"id":"1031","type":"BoxAnnotation"}},"id":"1025","type":"BoxZoomTool"},{"attributes":{"line_color":"green","x":{"field":"x"},"y":{"field":"y"}},"id":"1098","type":"Line"},{"attributes":{},"id":"1212","type":"Selection"},{"attributes":{},"id":"1026","type":"SaveTool"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"1099","type":"Line"},{"attributes":{},"id":"1213","type":"UnionRenderers"},{"attributes":{},"id":"1027","type":"ResetTool"},{"attributes":{"data_source":{"id":"1097","type":"ColumnDataSource"},"glyph":{"id":"1098","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1099","type":"Line"},"selection_glyph":null,"view":{"id":"1101","type":"CDSView"}},"id":"1100","type":"GlyphRenderer"},{"attributes":{"label":{"value":"Ireland"},"renderers":[{"id":"1190","type":"GlyphRenderer"},{"id":"1218","type":"GlyphRenderer"}]},"id":"1214","type":"LegendItem"},{"attributes":{},"id":"1028","type":"HelpTool"},{"attributes":{"source":{"id":"1097","type":"ColumnDataSource"}},"id":"1101","type":"CDSView"},{"attributes":{"data_source":{"id":"1038","type":"ColumnDataSource"},"glyph":{"id":"1039","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1040","type":"Line"},"selection_glyph":null,"view":{"id":"1042","type":"CDSView"}},"id":"1041","type":"GlyphRenderer"},{"attributes":{"fill_color":{"value":"blue"},"line_color":{"value":"blue"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1216","type":"Circle"},{"attributes":{},"id":"1114","type":"Selection"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"1031","type":"BoxAnnotation"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1217","type":"Circle"},{"attributes":{},"id":"1115","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"1215","type":"ColumnDataSource"},"glyph":{"id":"1216","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1217","type":"Circle"},"selection_glyph":null,"view":{"id":"1219","type":"CDSView"}},"id":"1218","type":"GlyphRenderer"},{"attributes":{"label":{"value":"Singapore"},"renderers":[{"id":"1100","type":"GlyphRenderer"},{"id":"1120","type":"GlyphRenderer"}]},"id":"1116","type":"LegendItem"},{"attributes":{"source":{"id":"1038","type":"ColumnDataSource"}},"id":"1042","type":"CDSView"},{"attributes":{},"id":"1045","type":"BasicTickFormatter"},{"attributes":{"source":{"id":"1215","type":"ColumnDataSource"}},"id":"1219","type":"CDSView"},{"attributes":{},"id":"1047","type":"BasicTickFormatter"},{"attributes":{"fill_color":{"value":"green"},"line_color":{"value":"green"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1118","type":"Circle"},{"attributes":{},"id":"1242","type":"Selection"},{"attributes":{"background_fill_alpha":{"value":0.1},"background_fill_color":{"value":"gray"},"items":[{"id":"1050","type":"LegendItem"},{"id":"1079","type":"LegendItem"},{"id":"1116","type":"LegendItem"},{"id":"1161","type":"LegendItem"},{"id":"1214","type":"LegendItem"}],"location":"bottom_right","plot":{"id":"1003","subtype":"Figure","type":"Plot"}},"id":"1049","type":"Legend"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1119","type":"Circle"},{"attributes":{},"id":"1243","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"1117","type":"ColumnDataSource"},"glyph":{"id":"1118","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1119","type":"Circle"},"selection_glyph":null,"view":{"id":"1121","type":"CDSView"}},"id":"1120","type":"GlyphRenderer"},{"attributes":{"label":{"value":"Hong Kong"},"renderers":[{"id":"1041","type":"GlyphRenderer"},{"id":"1054","type":"GlyphRenderer"}]},"id":"1050","type":"LegendItem"},{"attributes":{},"id":"1268","type":"Selection"},{"attributes":{"source":{"id":"1117","type":"ColumnDataSource"}},"id":"1121","type":"CDSView"},{"attributes":{},"id":"1269","type":"UnionRenderers"},{"attributes":{"fill_color":{"value":"red"},"line_color":{"value":"red"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1052","type":"Circle"},{"attributes":{},"id":"1136","type":"Selection"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"1053","type":"Circle"},{"attributes":{},"id":"1137","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"1051","type":"ColumnDataSource"},"glyph":{"id":"1052","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1053","type":"Circle"},"selection_glyph":null,"view":{"id":"1055","type":"CDSView"}},"id":"1054","type":"GlyphRenderer"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"UrgehesxU0BmZmZmZqZTQBSuR+F6xFNASOF6FK7HU0DhehSuRzFTQFK4HoXrAVNApHA9CtfTU0AAAAAAAMBTQFK4HoXr4VNAH4XrUbjeU0BmZmZmZsZTQLgehetRiFNAH4XrUbjeU0Bcj8L1KNxTQBSuR+F6RFRA16NwPQpXVEAK16NwPRpUQMP1KFyPElRAj8L1KFw/VEBSuB6F60FUQHsUrkfhelRAhetRuB5VVEAzMzMzM0NUQGZmZmZmVlRA","dtype":"float64","shape":[24]}},"selected":{"id":"1212","type":"Selection"},"selection_policy":{"id":"1213","type":"UnionRenderers"}},"id":"1162","type":"ColumnDataSource"},{"attributes":{"source":{"id":"1051","type":"ColumnDataSource"}},"id":"1055","type":"CDSView"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"UrgehesxU0BmZmZmZqZTQBSuR+F6xFNASOF6FK7HU0DhehSuRzFTQFK4HoXrAVNApHA9CtfTU0AAAAAAAMBTQFK4HoXr4VNAH4XrUbjeU0BmZmZmZsZTQLgehetRiFNAH4XrUbjeU0Bcj8L1KNxTQBSuR+F6RFRA16NwPQpXVEAK16NwPRpUQMP1KFyPElRAj8L1KFw/VEBSuB6F60FUQHsUrkfhelRAhetRuB5VVEAzMzMzM0NUQGZmZmZmVlRA","dtype":"float64","shape":[24]}},"selected":{"id":"1185","type":"Selection"},"selection_policy":{"id":"1186","type":"UnionRenderers"}},"id":"1138","type":"ColumnDataSource"},{"attributes":{"x":{"field":"x"},"y":{"field":"y"}},"id":"1139","type":"Line"},{"attributes":{},"id":"1062","type":"Selection"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"1140","type":"Line"},{"attributes":{},"id":"1063","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"1138","type":"ColumnDataSource"},"glyph":{"id":"1139","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"1140","type":"Line"},"selection_glyph":null,"view":{"id":"1142","type":"CDSView"}},"id":"1141","type":"GlyphRenderer"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"KVyPwvWIU0D2KFyPwsVTQFyPwvUozFNAXI/C9ShsVECamZmZmTlUQClcj8L1SFRAexSuR+EqVEBI4XoUrkdUQAAAAAAAYFRAzczMzMxcVEB7FK5H4TpUQLgehetRGFRAcT0K16PwU0CuR+F6FE5UQJqZmZmZWVRACtejcD1qVEDXo3A9CldUQNejcD0KJ1RAw/UoXI8SVEApXI/C9UhUQLgehetRSFRAuB6F61FoVEApXI/C9ZhUQPYoXI/CtVRA","dtype":"float64","shape":[24]}},"selected":{"id":"1114","type":"Selection"},"selection_policy":{"id":"1115","type":"UnionRenderers"}},"id":"1080","type":"ColumnDataSource"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"9ihcj8IlVkAAAAAAAKBWQDMzMzMzI1ZAUrgehesBVkDD9ShcjyJWQFK4HoXrYVZAmpmZmZl5VkB7FK5H4VpWQKRwPQrXc1ZArkfhehR+VkDD9Shcj3JWQKRwPQrXM1ZA4XoUrkeRVkAfhetRuH5WQPYoXI/ClVZAexSuR+F6VkDD9Shcj4JWQOF6FK5HkVZA16NwPQpnVkBmZmZmZmZWQOxRuB6FO1ZAcT0K16MgVkA9CtejcF1WQFyPwvUofFZAZmZmZma2VkA=","dtype":"float64","shape":[25]}},"selected":{"id":"1062","type":"Selection"},"selection_policy":{"id":"1063","type":"UnionRenderers"}},"id":"1038","type":"ColumnDataSource"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"KVyPwvWIU0D2KFyPwsVTQFyPwvUozFNAXI/C9ShsVECamZmZmTlUQClcj8L1SFRAexSuR+EqVEBI4XoUrkdUQAAAAAAAYFRAzczMzMxcVEB7FK5H4TpUQLgehetRGFRAcT0K16PwU0CuR+F6FE5UQJqZmZmZWVRACtejcD1qVEDXo3A9CldUQNejcD0KJ1RAw/UoXI8SVEApXI/C9UhUQLgehetRSFRAuB6F61FoVEApXI/C9ZhUQPYoXI/CtVRA","dtype":"float64","shape":[24]}},"selected":{"id":"1095","type":"Selection"},"selection_policy":{"id":"1096","type":"UnionRenderers"}},"id":"1064","type":"ColumnDataSource"},{"attributes":{"source":{"id":"1138","type":"ColumnDataSource"}},"id":"1142","type":"CDSView"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019],"y":{"__ndarray__":"9ihcj8IlVkAAAAAAAKBWQDMzMzMzI1ZAUrgehesBVkDD9ShcjyJWQFK4HoXrYVZAmpmZmZl5VkB7FK5H4VpWQKRwPQrXc1ZArkfhehR+VkDD9Shcj3JWQKRwPQrXM1ZA4XoUrkeRVkAfhetRuH5WQPYoXI/ClVZAexSuR+F6VkDD9Shcj4JWQOF6FK5HkVZA16NwPQpnVkBmZmZmZmZWQOxRuB6FO1ZAcT0K16MgVkA9CtejcF1WQFyPwvUofFZAZmZmZma2VkA=","dtype":"float64","shape":[25]}},"selected":{"id":"1077","type":"Selection"},"selection_policy":{"id":"1078","type":"UnionRenderers"}},"id":"1051","type":"ColumnDataSource"},{"attributes":{"dimension":1,"plot":{"id":"1003","subtype":"Figure","type":"Plot"},"ticker":{"id":"1019","type":"BasicTicker"}},"id":"1022","type":"Grid"}],"root_ids":["1003"]},"title":"Bokeh Application","version":"1.0.4"}};
  var render_items = [{"docid":"fe074169-b510-42df-824a-5e1fcfda6631","roots":{"1003":"916d4a37-ad71-4290-abfe-84af03bbb96a"}}];
  root.Bokeh.embed.embed_items_notebook(docs_json, render_items);

  }
  if (root.Bokeh !== undefined) {
    embed_document(root);
  } else {
    var attempts = 0;
    var timer = setInterval(function(root) {
      if (root.Bokeh !== undefined) {
        embed_document(root);
        clearInterval(timer);
      }
      attempts++;
      if (attempts > 100) {
        console.log("Bokeh: ERROR: Unable to run BokehJS code because BokehJS library is missing");
        clearInterval(timer);
      }
    }, 10, root)
  }
})(window);
</script>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">regression_model</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>

<span class="n">x</span> <span class="o">=</span> <span class="n">Australia_data</span><span class="p">[[</span><span class="s2">&quot;index_year&quot;</span><span class="p">]]</span>
<span class="n">y</span> <span class="o">=</span> <span class="n">Australia_data</span><span class="p">[[</span><span class="s2">&quot;overall_score&quot;</span><span class="p">]]</span>
<span class="c1">#print(x)</span>
<span class="c1">#print(y)</span>

<span class="n">regression_model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y</span><span class="p">)</span> 

<span class="n">y_predicted</span> <span class="o">=</span> <span class="n">regression_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">x</span><span class="p">)</span>

<span class="c1"># model evaluation</span>
<span class="n">rmse</span> <span class="o">=</span> <span class="n">mean_squared_error</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
<span class="n">r2</span> <span class="o">=</span> <span class="n">r2_score</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>

<span class="c1"># printing values</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">&#39;Slope:&#39;</span> <span class="p">,</span><span class="n">regression_model</span><span class="o">.</span><span class="n">coef_</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">&#39;Intercept:&#39;</span><span class="p">,</span> <span class="n">regression_model</span><span class="o">.</span><span class="n">intercept_</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">&#39;Root mean squared error: &#39;</span><span class="p">,</span> <span class="n">rmse</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">&#39;R2 score: &#39;</span><span class="p">,</span> <span class="n">r2</span><span class="p">)</span>


<span class="n">plt</span><span class="o">.</span><span class="n">scatter</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;x&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">&#39;y&#39;</span><span class="p">)</span>


<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">&#39;r&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Slope: [[0.33330769]]
Intercept: [-589.55653846]
Root mean squared error:  2.208647076923129
R2 score:  0.7234190570397367
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYgAAAEKCAYAAAAIO8L1AAAABHNCSVQICAgIfAhkiAAAAAlwSFlz
AAALEgAACxIB0t1+/AAAADl0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uIDMuMC4zLCBo
dHRwOi8vbWF0cGxvdGxpYi5vcmcvnQurowAAIABJREFUeJzt3Xl4lOXVx/HvEUHjCiqoRK0oFaXl
VTS2CK2oVFBflZRqa1uFur+2uKCAuBTFDRS11bYu4L5rEZFqLaiIaBU0LAoCQXArQTY1ohggwHn/
uCca6ACZYZ55Zvl9risXkyeznJthOLm3c5u7IyIisr4t4g5ARERykxKEiIgkpQQhIiJJKUGIiEhS
ShAiIpKUEoSIiCSlBCEiIkkpQYiISFJKECIiktSWcQfQELvssovvvffecYchIpJXJk+evNTdm6f7
+LxIEHvvvTcVFRVxhyEiklfM7OPNebyGmEREJCklCBERSUoJQkREklKCEBGRpJQgREQkKSUIERFJ
SglCRESSUoIQEclF8+bBRRdBbW1sIShBiIjkks8+gz594IADYPhwmDYttlCUIEREcsGKFXDzzdC6
Ndx+O/TsCe+/D4ceGltIeVFqQ0SkYK1dC08+CZdfDh99BMccAzfdBO3axR2ZEoSIpG7U1CqGjqlk
QXUNLZuW0K9bG8rbl8YdVv6ZMAH69oW334YDD4SxY+Hoo+OO6lsaYhKRlIyaWsVlI6dTVV2DA1XV
NVw2cjqjplbFHVr+qKyE8nLo3BkWLIAHHoDJk3MqOYAShIikaOiYSmpq16xzraZ2DUPHVMYUUR5Z
sgR694Yf/ADGjYPrr4c5c6BXL2jUKO7o/ouGmEQkJQuqa1K6LkBNDfz5zzB4MHzzDZx7Llx1FbRo
EXdkG6UehIikpGXTkpSuF7W1a+Ghh2C//cIk9JFHwowZ8Le/5XxyACUIEUlRv25tKGm87nBISeNG
9OvWJqaIctRLL8Ehh4Tho913h1dfhWefhf33jzuyBlOCEJGUlLcvZXCPdpQ2LcGA0qYlDO7RTquY
6syYAccdFyacq6vh8cdh4kQ4/PC4I0uZ5iBEJGXl7UuVENb36acwcCDcdx/ssEPY9Na7N2y1VdyR
pU0JQkRkc3z9dUgGQ4eGukkXXghXXAE77xx3ZJtNCUJEJB2rV8P994dew8KF8Mtfwg03wL77xh1Z
xihBiIikwh1eeAH69YOZM6FjRxg5Eg47LO7IMk4JQiSHpVrSIldLYORqXCmbOjWUxhg3LhTVe/pp
+PnPwSzuyCKhBCGSo+pKWtTtWq4raQEk/c811ftnS67GlZJPPoErr4RHHoGddgrVVs89F5o0iTuy
SGmZq0iOSrWkRbolMEZNraLTkHG0GvA8nYaMy3hNpbwuzfHll3DZZWGj21NPQf/+MHcunH9+wScH
UA9CJGelWtIinRIY2fjtPi9Lc9TWwt13w6BBsHQpnHoqXHcdfO97cUeWVepBiOSoVEtapFMCIxu/
3edVaQ53eOaZUEzv/PPDmQwVFfDww0WXHEAJQiRnpVrSIp0SGNn47T5vSnNMmhR2O/foAVtuCc89
By+/HMplFCkNMYnkqLohnoau/kn1/hB+i69Kkgwy+dt9OnFl1QcfhEJ6Tz4Ju+4Kd90FZ54ZkkSR
M3ePO4ZNKisr84qKirjDECk4689BQPjtvihqK33+eZhX+OtfQzLo2zfsbdh++7gjyxgzm+zuZek+
XilSJEtycS9Azv92H4WVK0NSuO66sErp9NPhmmugtIDbnCYlCJEsyOW9AEVTeM89DCNdfjl8+CEc
cwzcdFOYiJakNEktkgV5vRegELz2GnToAL/+dRhCGjs2lMtQctgoJQiRLMjLvQCFYM6csCrp8MOh
qioU15syJZzVIJsU6RCTmfUBzgIcmA6cDtwLlAG1wFvAue5eG2UcInHLxmqhQrNZczZLloR5hbvu
gq23DvMNffrANttEG3SBiawHYWalwAVAmbv/EGgEnAI8CuwPtANKCAlEpKDlzV6AHFE3Z1NVXYPz
3ZzNJsuA1NTAkCGhkN6dd8LZZ4fSGFdcoeSQhqiHmLYESsxsS2AbYIG7/9MTCD2IPSKOQSR2OqYz
NSnP2axdG3Y7t2kTaid17hyO/rzjjrC3QdIS2RCTu1eZ2c3AJ0ANMNbdx9b93MwaA6cBFyZ7vJmd
A5wDsNdee0UVpkjWFM1qoQxIac5m3Liwh2HqVCgrC4mic+eIIywOUQ4xNQO6A62AlsC2ZnZqvbvc
AUxw99eSPd7dh7l7mbuXNW/ePKowRSQHNah+08yZcPzx0KVL2PT22GOhXIaSQ8ZEOcT0M+BDd1+S
mIQeCXQEMLOrgObAxRG+vojkqY3O2SxcGM5iaNcOXn89nAU9e3ZYwrqFFmZmUpSrmD4BOpjZNoQh
pi5AhZmdBXQDurj72ghfX0TyVLId3gMO35MT/nFv2Ny2ahVccEE4xGfnnWOOtnBFOQcxycxGAFOA
1cBUYBiwHPgYeNPCMX0j3f2aqOIQkfz07ZzNmjVh/8JJp8Knn8JJJ8HgwWGlkkQq0n0Q7n4VcFU2
X1NECoQ7jBkTCujNmAGHHQYjRkDHjnFHVjQ0YCciuWfaNOjaFY49NuxtGDEC/v1vJYcsU4IQkdwx
fz787ndw8MGhJMZtt4XVSr/4BYQhackiDfeISPyWLYMbb4Rbbw1DS/36hQ1vTZvGHVlRU4IQkfjU
1sLw4XD11aF+0m9/C9dfX5TnP+ciJQgRyT53GD0a+vcPFVc7d4abbw47oTdDLh7KlM80ByEi2fXW
WyEhlJeHjW2jR8Mrr2QkOaRV4E82SAlCRLLjww/Dbucf/xgqK0O11enT4YQTMjIBrUOZMk9DTCIS
rS++CPMKf/kLNGoUdj/37x9OdssgHcqUeUoQIhKNlStDue1rr4Xq6rB89dproTSaOQEdypR5GmIS
kcxyh6eegrZt4eKL4dBDQynu++6LLDmADmWKgnoQImnQapkN+Pe/w9kMEyeGaqv/+hd065aVl05W
4E/vy+ZRghBJUd1qmboJ0brVMkDx/mf0/vswYACMHAktW8K990KvXmHOIYt0KFNmaYhJJEVaLVPP
0qWh7HbbtjB2bJhjmDMHzjgj68lBMk89CJEUabUMsGIF3H57WJ20fDmcfXbYDV0E5z8X0/CiehAi
KWrQcZiFau1aePRRaNMGLr0UDj887GW4886iSQ7FtBlPCUIkRUW7WuaVV8KKpFNPhebNw/f/+Acc
cEDckWVNusOLo6ZW0WnIOFoNeJ5OQ8ZtMqGkev+oaIhJJEVFt1pm5szQW3juOdhrL3jkkaI9/zmd
4cVUFzXk0iIIJQiRNBTFapmFC8O8wvDhsN12oRz3BRfA1lvHHVls0tmMt7FeR7J/Q6neP0rF9yuA
iGzc8uVhNVLr1mG5au/eMG9eKI9RxMkB0hteTLXXkUuLIJQgRCRYsybsdt5vPxg4EI45Jgwv3XYb
7LJL3NHlhPL2pQzu0Y7SpiUYUNq0hME92m30N/tUFzXk0iIIDTGJCIwZE05xmz4dOnQIpTI6dYo7
qpyU6vBiv25t1plTgI33OlK9f5SUIESK2TvvhMTw4ouwzz4hMZx0ks5/zqBUFzXk0iIIc/esv2iq
ysrKvKKiIu4wRArH/Pnwxz/Cgw+Gc58HDoTzzoOttoo7MskgM5vs7mmfxKQehEgx+eqrsBrp1lvD
nMMll8Dll0OzZnFHJjlICUKkGKxeHZarXn01LF4c9jFcfz20ahV3ZJLDlCBECpl72O186aUwe3Yo
jfHcc2FHtMgmaJmrSKGqqIAjj4Tu3UOiGDUKxo9XcpAGUw9CpNB8/HGYV3jssVAz6Y474KyzoHHj
uCPLOcVUmTUdShAihaK6Gm64IZThNoMrrgi7n3fYIe7IclIu1TzKVRpiEsl3q1aF3c777gs33wyn
nBJOeLvuOiWHjdDBT5umBCGSr9xhxIhwmttFF8HBB8OUKfDAA7DHHnFHl/NyqeZRrlKCEMlHb7wR
SmGcfDKUlMALL4QjPw86KO7I8kYu1TzKVUoQIvlk7txQCqNTJ/joI7jnHpg2LRTWU3mMlBTtwU8p
iDRBmFkfM3vPzGaY2eNmtrWZtTKzSWY218yeNLMmUcYgUhA++ywMI7VtC//6FwwaFOYZzjwTGjXa
9OPlv6RTmbXYRFaLycxKgdeBtu5eY2ZPAf8EjgNGuvsTZnYX8I6737mx51ItJilaK1bAX/4Sdj1/
9VVYrjpoEOy2W9yRSR7Y3FpMUQ8xbQmUmNmWwDbAp8BRwIjEzx8EyiOOQST/rF0b9jHsv39Yqtqp
E7z7Ltx9t5KDZE1k+yDcvcrMbgY+AWqAscBkoNrdVyfuNh9Qf05il1MbpsaPh759YfJkaN8+HOJz
1FHxxCJFLbIehJk1A7oDrYCWwLbAMSk8/hwzqzCziiVLlkQUpch3G6aqqmtwvtswNWpqVXYDmTUL
TjwxlMdYvBgeeiiUy1BykJhEOcT0M+BDd1/i7rXASKAT0DQx5ASwB5D0U+juw9y9zN3LmjdvHmGY
Uuxi3zC1aFE4i6FdO3j1VRg8GCor4bTTYAstNJT4RPmv7xOgg5ltY2YGdAFmAq8AJyXu0wt4NsIY
RDYptg1T33wTJp9btw7LVc87LyxjHTAg7G0QiVlkCcLdJxEmo6cA0xOvNQy4FLjYzOYCOwP3RhWD
SENkfcPUmjVht/N++8GVV8LRR8N774XVSuotSw6JtP/q7le5+/7u/kN3P83dV7r7B+7+I3dv7e4n
u/vKKGMQ2ZSsbph68cVQEuP006G0FF57DUaODMlCJMdogFOKXlY2TE2fHnY7d+0a9jM88QRMnAg/
+UnmXkMkw1TuW4SQJCJZ1lpVBQMHhiGlHXeEW26BP/wBttoq868lkmFKECJR+OorGDo0lN9esyaU
ybjiCthpp7gjE2kwJQiRTFq9Gu69F666Kixf/dWvwiE+++wTd2QiKVOCEMkEd3j++VAWY9Ys+OlP
YfRo+NGP4o5MJG2apBbZXJMnh93OJ5wQhpOeeSZseFNykDynBCGSro8/hlNPhbIymDED/vrX8Gd5
uc5mkIKgISaRVFVXh3IYt90WEsFll8Gll4ZVSiIFRAlCpKFWrYK77oJrroHPPw+1kq67DvbcM+7I
RCKhISaRTXGHp5+GH/wALrwwnPs8eTI8+KCSgxQ0JQiRjXnzzbDb+aSTwua2f/4zlMto3z7uyEQi
pwQhksy8efDLX0LHjvDBBzB8OEybBsceqwloKRqagxCp77PPwrzC3/4GjRvD1VfDJZfAdtvFHZlI
1ilBSMFJ6/jQFSvCMtXrrgtlMs48EwYNgt13z07QIjlICUIKSt3xoXUnxNUdHwokTxJr18KTT4al
qh9/HIaQhg4NE9IiRU5zEFJQUjo+9NVX4cc/ht/8Bpo1g5deCpPQSg4igBKEFJgGHR86ezZ07w5H
HAELF4blqpMnQ5cu2QlSJE8oQUhB2ejxoYsXw+9/Dz/8IbzySqiyOmcO9OwJW+ijILI+fSqkoCQ7
PrQZtQz/zxho3RqGDYP/+z+YOzfMO5REdO60SAHQJLUUlLqJ6KFjKln4+dec8eHrXDzhYUoWLwxF
9IYMgTYRnDUtUoA2mSDM7HzgEXf/IgvxiGy28vallC+dCf0GwjvvwKGHwoinwhkNItJgDRli2hV4
28yeMrNjzLSNVHLY9OlhqWrXrvDll/D44zBxopKDSBo2mSDc/Urg+8C9wO+A983sBjPbN+LYRBpu
wQI466xQSG/ixHAW9OzZcMopmoAWSVODPjnu7sDCxNdqoBkwwsxuijA2kU37+utw/vP3vw8PPRSq
rc6bF8pjbLVV3NGJ5LWGzEFcCPQElgL3AP3cvdbMtgDeB/pHG6JIEqtXw333wcCBsGhRKKx3ww2w
rzq2IpnSkFVMOwE93P3j+hfdfa2ZHR9NWCIb4B52O/fvDzNnhlLczz4bdkSLSEY1ZA7iqvWTQ72f
zcp8SCIbMGUK/OxncPzxUFsLI0fChAlKDiIR0eyd5L7//Cfsdj7kkLBs9S9/gffeg5//XGcziERI
G+Ukd335ZdjY9qc/he8HDAhfO+4Yb1wiRUIJQnJPbS3cfXc4j2HpUjjttHBOw157xR2ZSFHREJPk
Dnd45plQbvv886Fdu1Bl9aGHlBxEYqAEIblh0qSw27lHj3DU53PPwcsvw8EHxx2ZSNFSgpB4ffAB
/OpX0KFDqLB6991hIvp//1cT0CIxiyxBmFkbM5tW72uZmV1kZgeZ2cTEtQoz+1FUMUgO+/xzuPhi
2H//0FsYODAkiHPOgS01NSaSCyL7JLp7JXAQgJk1AqqAZ4DhwCB3f8HMjgNuAo6IKg7JMStXwl//
Giadly2D00+Ha66Bli3jjkxE1pOtIaYuwLzEhjsHdkhc3xFYkKUYJE7u8MQTocfQt28YUpo2De65
R8lBJEdlqy9/CvB44vZFwBgzu5mQoDpmKQaJy4QJISm8/TYceCCMHQtHH92gh46aWsXQMZUsqK6h
ZdMS+nVr8+2hQCISrch7EGbWBDgR+Hvi0nlAH3ffE+hDKCOe7HHnJOYoKpYsWRJ1mBKFysqw27lz
51CO+4EHwrLVFJLDZSOnU1VdgwNV1TVcNnI6o6ZWRRq2iATZGGI6Fpji7osS3/cCRiZu/x1IOknt
7sPcvczdy5o3b56FMCVjliyB3r3DfoaXXoLrr4c5c6BXL2jUaNOPTxg6ppKa2jXrXKupXcPQMZWZ
jlhEksjGENOv+W54CcKcQ2dgPHAUoWS4FIKaGvjzn2HwYPjmm7Ai6aqrYNdd03q6BdU1KV0XkcyK
NEGY2bbA0cC59S6fDdxmZlsCK4BzooxBsmDtWnj4YbjySpg/H048EW68MUxIb4aWTUuoSpIMWjYt
2aznFZGGiXSIyd2Xu/vO7v5lvWuvu/sh7n6gu//Y3SdHGYNE7OWXQ5XV3/0OdtsNxo8P5zNsZnIA
6NetDSWN1x2SKmnciH7d2mz2c4vIpmkntaRnxgw47rhwPsMXX8Bjj4VyGZ07Z+wlytuXMrhHO0qb
lmBAadMSBvdop1VMIlmiLauSmk8/Dbue77sPtt8ehg4NE9Jbbx3Jy5W3L1VCEImJEoQ0zNdfwy23
hISwahVccEGYc9h557gjE5GIKEHIxq1ZA/ffD3/8IyxcCCefHFYp7btv3JGJSMSUIARIsmO5636U
L5oO/fqF4z07dgxnQB92WGZfRzujRXKWEoR8u2O5blPajpXvsevdl8BH06B1axgxIpzTsJnlt9d/
nbqd0YCShEgOUoKQb3cs77ZsKX1fe5geM8ZRXbI9fzr+D/R5+lZo0iTp41LtDWxsZ7QShEjuUYIQ
li36jL6TRnDW26Mwd4b9uAd3dDiZr7bejj4bSQ6p9ga0M1okvyhBFLPaWhg2jAnDr6TZ8mqeaXsE
Nx/ek6odWwBh38GGpNMb0M5okfyiBFGM3MNu50svhTlzWF12GCf9zylUNP9uZdKmdiyn0xvo163N
Or2OhryOiMRHO6kL1KipVXQaMo5WA56n05Bx35XIfuutsNv55z+HLbaA0aNp/ta/ObX3L1Lasbyh
3/o31hvQzmiR/GLuHncMm1RWVuYVFRVxh5E31p8fAGj99RIemDuKPcY8Cy1awKBBcNZZaZ//nOw1
Sho30n/4IjnEzCa7e1m6j9cQUwGqPz+wY81X9H7zSXpOeQ7folHY/dy/fyiTsRnqkoD2NIgULiWI
ArSguoYmq2s5berznP/GE+ywYjkj2nXh1p+eysRre2XsdVQnSaSwKUEUGndO/WQSZ/9zGHt9uYgJ
e7dn8JGnM6vFPhtdlSQisj4liELy+uvQty/XTppEZYu96XnyICbscwig1UIikjqtYioEc+aEUhg/
/Sn85z9w773Mev5V5h38E60WEpG0qQeRz5YsgWuugbvuCucxXHst9OkD225LOVBetlfcEYpIHlOC
yEc1NXDbbaHs9vLlcPbZcPXVsOuucUcmIgVECSKfrF0Ljz4KV1wRhpJOOAFuvBEOOCDuyESkAGkO
Il+MGwdlZdCzZ9jo9sorMHq0koOIREYJItfNnAnHHw9dusBnn8Ejj4RyGUccEXdkIlLglCBy1cKF
cO650K4dvPZaGEqqrITf/jbUUBIRiZjmIHLN8uVwyy1w002wciX07h3Og95ll7gjE5EiowSRK9as
gQceCMng00/hF78Iq5S+//24IxORIqUEETd3GDMG+vWDGTOgQ4dwBnTHjt/eJdWjPUVEMkGD2XGa
Ng26doVjj4VvvoG//x3eeOO/ksNlI6dTVV2D893Rnt+e7yAiEhEliDjMnw+nnw4HHwxTpsCf/wyz
ZsFJJ4HZOnfd2NGeIiJR0hBTNi1bFiafb701zDlccglcfjk0a7bBh6RztKeISCaoB5ENtbVw553Q
ujVcfz2Ul8Ps2TB06EaTA6R3tKeISCYoQUTJPex2btcOfv/7sOv5rbfgscegVasGPUW/bm0oadxo
nWsq3S0i2aAEEZW33w67nbt3D98/+yyMHw+HHprS05S3L2Vwj3aUNi1R6W4RySrNQWTaRx+FYnqP
PQbNm8Mdd8BZZ0Hjxmk/pY72FJE4RNaDMLM2Zjat3tcyM7so8bPzzWy2mb1nZjdFFUNWVVdD//7Q
pg2MHBmSxNy5cN55m5UcRETiElkPwt0rgYMAzKwRUAU8Y2ZHAt2BA919pZm1iCqGrFi1KkxAX3MN
fPEF9OoVDu7ZY4+4IxMR2SzZmoPoAsxz94+B84Ah7r4SwN0XZymGzHIPO57btoWLLgp7GqZOhfvv
V3IQkYKQrQRxCvB44vZ+wE/NbJKZvWpmqc3a5oI33oBOneDkk6GkBF54AcaOhQMPjDsyEZGMiTxB
mFkT4ETg74lLWwI7AR2AfsBTZuttHw6PO8fMKsysYsmSJVGH2TBz54bdzp06hcnoe+4J5TKOOea/
dkCLiOS7bPQgjgWmuPuixPfzgZEevAWsBf6rlrW7D3P3Mncva968eRbC3IilS+HCC8M+hn/9CwYN
gvffhzPPhEaNNv14EZE8lI1lrr/mu+ElgFHAkcArZrYf0ARYmoU4UrdiBdx+O9xwA3z1VViuOmgQ
7LZb3JGJiEQu0gRhZtsCRwPn1rt8H3Cfmc0AVgG93N2jjCNla9fC44+HOkmffBKO/LzxxjAhLSJS
JCJNEO6+HNh5vWurgFOjfN3NMn489O0LkydD+/ZhVdJRR8UdlYhI1mkndZ1Zs+DSS+Ef/4A994SH
H4bf/Cbj5z/r8B8RyRdKEIsWwdVXw/DhsO22MGQIXHBBWL6aYXWH/9Sd71B3+A+gJCEiOad4E8Ty
5eFchptuCpPRv/99OA86xRVTqfQINnb4jxKEiOSa4ksQa9bAQw/BlVfCggXQowcMHgz77ZfyU6Xa
I9DhPyKST4qr3PfYsWHi+YwzwjzD66/D00+nlRwg9eNAdfiPiOST4kgQ774L3bqFr+XL4amn4M03
w47ozZBqj0CH/4hIPinsBFFVFXoLBx0UDvC59VaYOTPUUMpAaYxUewQ6/EdE8klhz0Hccw88+ihc
fHE4n2ET5z+nql+3NuvMQcCmewQ6/EdE8kVhJ4hLLoGePRt8/nOq6v6j174GESlEhZ0gttsufEVI
PQIRKVSFPQchIiJpU4IQEZGklCBERCQpJQgREUlKCUJERJJSghARkaSUIEREJCklCBERSUoJQkRE
klKCEBGRpJQgREQkKSUIERFJSglCRESSUoIQEZGklCBERCQpJQgREUlKCUJERJJSghARkaSUIERE
JCklCBERSUoJQkREklKCEBGRpLaMO4CojJpaxdAxlSyorqFl0xL6dWtDefvSuMMSEckbkfUgzKyN
mU2r97XMzC6q9/NLzMzNbJdMv/aoqVVcNnI6VdU1OFBVXcNlI6czampVpl9KRKRgRdaDcPdK4CAA
M2sEVAHPJL7fE+gKfBLFaw8dU0lN7Zp1rtXUrmHomMqN9iLU6xAR+U625iC6APPc/ePE938C+gMe
xYstqK5J6Tqo1yEisr5sJYhTgMcBzKw7UOXu70T1Yi2blqR0HTbe6xARKUaRJwgzawKcCPzdzLYB
LgcGNuBx55hZhZlVLFmyJKXX7NetDSWNG61zraRxI/p1a7PBx6TT6xARKWTZ6EEcC0xx90XAvkAr
4B0z+wjYA5hiZrut/yB3H+buZe5e1rx585ResLx9KYN7tKO0aQkGlDYtYXCPdhudT0in1yEiUsiy
scz11ySGl9x9OtCi7geJJFHm7ksz/aLl7UtTmmDu160Nl42cvs4w06Z6HSIihSzSBGFm2wJHA+dG
+TqZUJdMtIpJRCSINEG4+3Jg5438fO8oXz9VqfY6REQKmUptiIhIUkoQIiKSlBKEiIgkpQQhIiJJ
KUGIiEhS5h5JOaSMMrMlwMebvGNyuwAZ32eRR4q5/Wp78Srm9tdv+/fcPbWdxvXkRYLYHGZW4e5l
cccRl2Juv9penG2H4m5/JtuuISYREUlKCUJERJIqhgQxLO4AYlbM7Vfbi1cxtz9jbS/4OQgREUlP
MfQgREQkDXmZIMzsPjNbbGYz6l070MzeNLPpZvYPM9shcb2Jmd2fuP6OmR1R7zHjzazSzKYlvlok
ebmcYmZ7mtkrZjbTzN4zswsT13cysxfN7P3En80S183MbjezuWb2rpkdXO+5eiXu/76Z9YqrTQ2V
4bavqfe+j46rTQ2VRtv3T3weVppZ3/We65jEv/u5ZjYgjvakKsPt/yjx/8E0M6uIoz2pSKPtv038
e59uZm+Y2YH1niu1997d8+4LOBw4GJhR79rbQOfE7TOAaxO3/wDcn7jdApgMbJH4fjzhPIrY25RC
23cHDk7c3h6YA7QFbgIGJK4PAG5M3D4OeAEwoAMwKXF9J+CDxJ/NErebxd2+bLQ98bOv425PxG1v
ARwKXA/0rfc8jYB5wD5AE+AdoG3c7ctW+xM/+wjYJe42Rdj2jnWfZcKBbXWf+ZTf+7zsQbj7BODz
9S7vB0xI3H4R+EXidltgXOJxi4FqIG/XR7v7p+4+JXH7K2AWUAp0Bx5M3O1BoDxxuzvwkAcTgaZm
tjvQDXjR3T939y8If2fHZLFjMUrnAAAD1ElEQVQpKctg2/NOqm1398Xu/jZQu95T/QiY6+4fuPsq
4InEc+S0DLY/76TR9jcSn2mAiYSTOyGN9z4vE8QGvMd3jT0Z2DNx+x3gRDPb0sxaAYfU+xnA/Ymu
5h/NzLIX7uYzs72B9sAkYFd3/zTxo4XAronbpcB/6j1sfuLahq7nhc1sO8DWFs48n2hm5eSRBrZ9
Q/L6fYfNbj+AA2PNbLKZnRNJkBFJo+1nEnrRkMZ7n40jR7PlDOB2M/sjMBpYlbh+H3AAUEEo1/EG
UHeu6G/dvcrMtgeeBk4DHspq1Gkys+0IMV/k7svq5zZ3dzMr2OVpGWr79xLv/T7AODOb7u7zIgo5
Y4r5fYeMtf8nife+BfCimc1OjErktFTbbmZHEhLET9J9zYLpQbj7bHfv6u6HEM7Anpe4vtrd+7j7
Qe7eHWhKGMPD3asSf34FPEboguU8M2tM+IfyqLuPTFxeVDd8kvhzceJ6Fev2mPZIXNvQ9ZyWobbX
f+8/IMxFtY88+M2UYts3JC/fd8hY++u/94uBZ8iDz32qbTez/wHuAbq7+2eJyym/9wWTIBK/DWBm
WwBXAnclvt/GwtnYmNnRwGp3n5kYctolcb0xcDwwI+mT55DEMNi9wCx3v7Xej0YDdSuRegHP1rve
04IOwJeJbukYoKuZNUusfuiauJazMtX2RJu3SjznLkAnYGZWGpGmNNq+IW8D3zezVmbWBDgl8Rw5
LVPtN7NtEyMGJP5f6EqOf+5TbbuZ7QWMBE5z9zn17p/6ex/l7HtUX4QewqeECaj5hG7UhYSewRxg
CN9tAtwbqCRM7LxEGFoA2JawouldwvzFbUCjuNvWgLb/hDCG+i4wLfF1HOHs75eB9xPt3ClxfwP+
RuhRTafeqi3CsNzcxNfpcbctW20nrPKYTpifmg6cGXfbImj7bonPxjLCwoz5wA6Jnx2X+JzMA66I
u23ZbD9hBc87ia/38qH9abT9HuCLevetqPdcKb332kktIiJJFcwQk4iIZJYShIiIJKUEISIiSSlB
iIhIUkoQIiKSlBKEiIgkpQQhIiJJKUGIpMHMDk3U3N86sTv3PTP7YdxxiWSSNsqJpMnMrgO2BkqA
+e4+OOaQRDJKCUIkTYl6Nm8DK4CO7r5mEw8RySsaYhJJ387AdoRTvraOORaRjFMPQiRNFs6yfgJo
Bezu7r1jDkkkowrpwCCRrDGznkCtuz9mZo2AN8zsKHcfF3dsIpmiHoSIiCSlOQgREUlKCUJERJJS
ghARkaSUIEREJCklCBERSUoJQkREklKCEBGRpJQgREQkqf8HYL1CO328kQ0AAAAASUVORK5CYII=
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">r2list</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">rmselist</span> <span class="o">=</span><span class="p">[]</span>
<span class="n">scores</span> <span class="o">=</span> <span class="p">[]</span>

<span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">country_data</span><span class="p">:</span>
  <span class="n">z</span> <span class="o">=</span> <span class="n">x</span><span class="p">[[</span><span class="s2">&quot;index_year&quot;</span><span class="p">]]</span>
  <span class="n">y</span> <span class="o">=</span> <span class="n">x</span><span class="p">[[</span><span class="s2">&quot;adjusted_score&quot;</span><span class="p">]]</span>
  <span class="c1">#print(x)</span>
  <span class="c1">#print(y)</span>
  <span class="n">regression_model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">z</span><span class="p">,</span> <span class="n">y</span><span class="p">)</span> 
  <span class="n">y_predicted</span> <span class="o">=</span> <span class="n">regression_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">z</span><span class="p">)</span>
  <span class="n">scores</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">y_predicted</span><span class="p">)</span>
  <span class="c1"># model evaluation</span>
  <span class="n">rmse</span> <span class="o">=</span> <span class="n">mean_squared_error</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
  <span class="n">r2</span> <span class="o">=</span> <span class="n">r2_score</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
  <span class="n">r2list</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">r2</span><span class="p">)</span> 
  <span class="n">rmselist</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">rmse</span><span class="p">)</span>
  
<span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The average rmse is:&quot;</span><span class="p">,</span><span class="nb">sum</span><span class="p">(</span><span class="n">rmselist</span><span class="p">)</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">rmselist</span><span class="p">))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The average r2 is:&quot;</span><span class="p">,</span><span class="nb">sum</span><span class="p">(</span><span class="n">r2list</span><span class="p">)</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">r2list</span><span class="p">))</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The highest r2 value is:&quot;</span><span class="p">,</span><span class="nb">max</span><span class="p">(</span><span class="n">r2list</span><span class="p">),</span><span class="s2">&quot;from &quot;</span><span class="p">,</span><span class="n">country_data</span><span class="p">[</span><span class="n">r2list</span><span class="o">.</span><span class="n">index</span><span class="p">(</span><span class="nb">max</span><span class="p">(</span><span class="n">r2list</span><span class="p">))]</span><span class="o">.</span><span class="n">name</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The lowest r2 value is:&quot;</span><span class="p">,</span><span class="nb">min</span><span class="p">(</span><span class="n">r2list</span><span class="p">),</span><span class="s2">&quot;from &quot;</span><span class="p">,</span><span class="n">country_data</span><span class="p">[</span><span class="n">r2list</span><span class="o">.</span><span class="n">index</span><span class="p">(</span><span class="nb">min</span><span class="p">(</span><span class="n">r2list</span><span class="p">))]</span><span class="o">.</span><span class="n">name</span><span class="p">[</span><span class="mi">3366</span><span class="p">])</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>The average rmse is: 6.590003127008081
The average r2 is: 0.416938288278066
The highest r2 value is: 0.9499162700956953 from  Albania
The lowest r2 value is: 3.4972054736570612e-06 from  United_Arab_Emirates
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>This is the first time we tried to predict a score. We used Albania for the test as we had done for testing in the beginning.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">c</span><span class="o">=</span><span class="n">Albania_data</span>
<span class="n">regression_model</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
<span class="n">yPrediction</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">predicted_scores</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">averages</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">summ</span> <span class="o">=</span> <span class="mi">0</span>

<span class="k">for</span> <span class="n">col</span><span class="p">,</span> <span class="n">row</span> <span class="ow">in</span> <span class="n">c</span><span class="o">.</span><span class="n">iteritems</span><span class="p">():</span>
  <span class="k">if</span> <span class="n">col</span> <span class="ow">in</span> <span class="p">[</span><span class="s2">&quot;property_rights&quot;</span><span class="p">,</span>	<span class="s2">&quot;government_integrity&quot;</span><span class="p">,</span>	<span class="s2">&quot;tax_burden&quot;</span><span class="p">,</span>
             <span class="s2">&quot;government_spending&quot;</span><span class="p">,</span>	<span class="s2">&quot;business_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;monetary_freedom&quot;</span><span class="p">,</span>	
             <span class="s2">&quot;trade_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;investment_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;financial_freedom&quot;</span><span class="p">]:</span>
    <span class="n">x</span><span class="o">=</span><span class="n">c</span><span class="p">[[</span><span class="s1">&#39;index_country&#39;</span><span class="p">]]</span>
    <span class="n">y</span> <span class="o">=</span> <span class="n">c</span><span class="p">[[</span><span class="n">col</span><span class="p">]]</span>
    <span class="n">xTrain</span><span class="p">,</span> <span class="n">xTest</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">,</span> <span class="n">yTest</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">test_size</span> <span class="o">=</span> <span class="mi">1</span><span class="o">/</span><span class="mi">3</span><span class="p">,</span> <span class="n">random_state</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span>
    <span class="n">regression_model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">xTrain</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">)</span> 
    <span class="n">yPrediction</span> <span class="o">=</span> <span class="n">regression_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">xTest</span><span class="p">)</span>
    <span class="n">predicted_scores</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">yPrediction</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span>
<span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">predicted_scores</span><span class="p">:</span>
  <span class="n">summ</span> <span class="o">=</span> <span class="n">summ</span> <span class="o">+</span> <span class="n">x</span>
<span class="n">Australia_data</span>
<span class="nb">print</span><span class="p">(</span><span class="n">summ</span> <span class="o">/</span> <span class="mi">9</span><span class="p">)</span>
    
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>[59.97083333]
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>Here we tried to once make the loop work to predict values and add them to the data sheet. As you can see in the printed data sheet, there is another row for 2020. Obviously the model isn't perfect, but next we can iterate over all of the countries.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">c</span><span class="o">=</span><span class="n">Albania_data</span>
<span class="n">regression_model</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
<span class="n">yPrediction</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">dft</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({})</span> 
<span class="n">predicted_scores</span> <span class="o">=</span> <span class="p">[]</span>
<span class="c1">#testing variable</span>
<span class="n">count</span> <span class="o">=</span> <span class="mi">0</span>
<span class="k">while</span> <span class="n">count</span> <span class="o">&lt;</span> <span class="n">years</span>
  <span class="k">for</span> <span class="n">col</span><span class="p">,</span> <span class="n">row</span> <span class="ow">in</span> <span class="n">c</span><span class="o">.</span><span class="n">iteritems</span><span class="p">():</span>
    <span class="k">if</span> <span class="n">col</span> <span class="ow">in</span> <span class="p">[</span><span class="s2">&quot;property_rights&quot;</span><span class="p">,</span>	<span class="s2">&quot;government_integrity&quot;</span><span class="p">,</span>	<span class="s2">&quot;tax_burden&quot;</span><span class="p">,</span>
               <span class="s2">&quot;government_spending&quot;</span><span class="p">,</span>	<span class="s2">&quot;business_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;monetary_freedom&quot;</span><span class="p">,</span>	
               <span class="s2">&quot;trade_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;investment_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;financial_freedom&quot;</span><span class="p">]:</span>
      <span class="n">x</span> <span class="o">=</span> <span class="n">c</span><span class="p">[[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">]]</span>
      <span class="n">y</span> <span class="o">=</span> <span class="n">c</span><span class="p">[[</span><span class="n">col</span><span class="p">]]</span>
      <span class="n">xTrain</span><span class="p">,</span> <span class="n">xTest</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">,</span> <span class="n">yTest</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">test_size</span> <span class="o">=</span> <span class="mi">1</span><span class="o">/</span><span class="mi">3</span><span class="p">,</span> <span class="n">random_state</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span>
      <span class="n">regression_model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">xTrain</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">)</span> 
      <span class="n">yPrediction</span> <span class="o">=</span> <span class="n">regression_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">xTest</span><span class="p">)</span>
      <span class="n">predicted_scores</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">yPrediction</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span>
      <span class="n">count</span> <span class="o">=</span> <span class="n">count</span> <span class="o">+</span> <span class="mi">1</span>
  <span class="n">summ</span><span class="o">=</span><span class="mi">0</span>
  <span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">predicted_scores</span><span class="p">:</span>
    <span class="n">summ</span> <span class="o">=</span> <span class="n">summ</span> <span class="o">+</span> <span class="n">x</span>
  <span class="n">avg</span> <span class="o">=</span> <span class="n">summ</span> <span class="o">/</span> <span class="mi">9</span>

  <span class="n">dft</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({</span><span class="s2">&quot;name&quot;</span><span class="p">:[</span><span class="s2">&quot;Albania&quot;</span><span class="p">],</span>
                            <span class="s2">&quot;index_country&quot;</span><span class="p">:[</span><span class="mi">0</span><span class="p">],</span>
                            <span class="s2">&quot;index_year&quot;</span><span class="p">:[</span><span class="mi">2020</span><span class="p">],</span>
                            <span class="s2">&quot;adjusted_score&quot;</span><span class="p">:[</span><span class="n">avg</span><span class="p">[</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;overall_score&quot;</span><span class="p">:[</span><span class="mi">0</span><span class="p">],</span>
                            <span class="s2">&quot;property_rights&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span> 
                            <span class="s2">&quot;government_integrity&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">1</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>  
                            <span class="s2">&quot;tax_burden&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">2</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;government_spending&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">3</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;business_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">4</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;monetary_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">5</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;trade_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">6</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;investment_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">7</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                            <span class="s2">&quot;financial_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">8</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                           <span class="p">})</span> 

  <span class="n">dftest</span> <span class="o">=</span> <span class="n">Albania_data</span>
  <span class="n">dftest</span> <span class="o">=</span> <span class="n">dftest</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">dft</span><span class="p">,</span><span class="n">ignore_index</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
  <span class="n">dftest</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>name</th>
      <th>index_country</th>
      <th>index_year</th>
      <th>adjusted_score</th>
      <th>overall_score</th>
      <th>property_rights</th>
      <th>government_integrity</th>
      <th>tax_burden</th>
      <th>government_spending</th>
      <th>business_freedom</th>
      <th>monetary_freedom</th>
      <th>trade_freedom</th>
      <th>investment_freedom</th>
      <th>financial_freedom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>Albania</td>
      <td>0</td>
      <td>1995</td>
      <td>49.680000</td>
      <td>49.7</td>
      <td>50.000000</td>
      <td>10.000000</td>
      <td>81.700000</td>
      <td>34.300000</td>
      <td>70.000000</td>
      <td>22.100000</td>
      <td>59.00000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>1</th>
      <td>Albania</td>
      <td>0</td>
      <td>1996</td>
      <td>53.810000</td>
      <td>53.8</td>
      <td>50.000000</td>
      <td>10.000000</td>
      <td>81.700000</td>
      <td>51.000000</td>
      <td>70.000000</td>
      <td>42.600000</td>
      <td>59.00000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Albania</td>
      <td>0</td>
      <td>1997</td>
      <td>54.850000</td>
      <td>54.8</td>
      <td>50.000000</td>
      <td>10.000000</td>
      <td>81.500000</td>
      <td>60.300000</td>
      <td>70.000000</td>
      <td>62.900000</td>
      <td>59.00000</td>
      <td>70.000000</td>
      <td>30.000000</td>
    </tr>
    <tr>
      <th>3</th>
      <td>Albania</td>
      <td>0</td>
      <td>1998</td>
      <td>53.920000</td>
      <td>53.9</td>
      <td>30.000000</td>
      <td>10.000000</td>
      <td>82.100000</td>
      <td>66.500000</td>
      <td>70.000000</td>
      <td>67.700000</td>
      <td>59.00000</td>
      <td>70.000000</td>
      <td>30.000000</td>
    </tr>
    <tr>
      <th>4</th>
      <td>Albania</td>
      <td>0</td>
      <td>1999</td>
      <td>53.440000</td>
      <td>53.4</td>
      <td>30.000000</td>
      <td>10.000000</td>
      <td>82.900000</td>
      <td>72.500000</td>
      <td>70.000000</td>
      <td>57.800000</td>
      <td>57.80000</td>
      <td>70.000000</td>
      <td>30.000000</td>
    </tr>
    <tr>
      <th>5</th>
      <td>Albania</td>
      <td>0</td>
      <td>2000</td>
      <td>53.610000</td>
      <td>53.6</td>
      <td>30.000000</td>
      <td>10.000000</td>
      <td>80.200000</td>
      <td>74.800000</td>
      <td>70.000000</td>
      <td>59.700000</td>
      <td>57.80000</td>
      <td>70.000000</td>
      <td>30.000000</td>
    </tr>
    <tr>
      <th>6</th>
      <td>Albania</td>
      <td>0</td>
      <td>2001</td>
      <td>56.590000</td>
      <td>56.6</td>
      <td>30.000000</td>
      <td>23.000000</td>
      <td>79.500000</td>
      <td>71.200000</td>
      <td>70.000000</td>
      <td>71.800000</td>
      <td>63.80000</td>
      <td>70.000000</td>
      <td>30.000000</td>
    </tr>
    <tr>
      <th>7</th>
      <td>Albania</td>
      <td>0</td>
      <td>2002</td>
      <td>56.770000</td>
      <td>56.8</td>
      <td>30.000000</td>
      <td>10.000000</td>
      <td>79.200000</td>
      <td>67.300000</td>
      <td>55.000000</td>
      <td>86.000000</td>
      <td>63.40000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>8</th>
      <td>Albania</td>
      <td>0</td>
      <td>2003</td>
      <td>56.800000</td>
      <td>56.8</td>
      <td>30.000000</td>
      <td>10.000000</td>
      <td>83.800000</td>
      <td>70.400000</td>
      <td>55.000000</td>
      <td>85.800000</td>
      <td>56.20000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>9</th>
      <td>Albania</td>
      <td>0</td>
      <td>2004</td>
      <td>58.540000</td>
      <td>58.5</td>
      <td>30.000000</td>
      <td>25.000000</td>
      <td>83.600000</td>
      <td>72.300000</td>
      <td>55.000000</td>
      <td>79.600000</td>
      <td>61.40000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>10</th>
      <td>Albania</td>
      <td>0</td>
      <td>2005</td>
      <td>58.730000</td>
      <td>57.8</td>
      <td>30.000000</td>
      <td>25.000000</td>
      <td>83.300000</td>
      <td>71.000000</td>
      <td>55.000000</td>
      <td>85.000000</td>
      <td>60.20000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>11</th>
      <td>Albania</td>
      <td>0</td>
      <td>2006</td>
      <td>61.330000</td>
      <td>60.3</td>
      <td>30.000000</td>
      <td>25.000000</td>
      <td>81.200000</td>
      <td>75.600000</td>
      <td>54.300000</td>
      <td>84.500000</td>
      <td>62.40000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>12</th>
      <td>Albania</td>
      <td>0</td>
      <td>2007</td>
      <td>62.540000</td>
      <td>61.4</td>
      <td>30.000000</td>
      <td>24.000000</td>
      <td>87.300000</td>
      <td>75.100000</td>
      <td>64.100000</td>
      <td>80.300000</td>
      <td>73.20000</td>
      <td>60.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>13</th>
      <td>Albania</td>
      <td>0</td>
      <td>2008</td>
      <td>63.650000</td>
      <td>62.4</td>
      <td>30.000000</td>
      <td>26.000000</td>
      <td>90.300000</td>
      <td>76.000000</td>
      <td>55.600000</td>
      <td>80.400000</td>
      <td>75.80000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>14</th>
      <td>Albania</td>
      <td>0</td>
      <td>2009</td>
      <td>65.350000</td>
      <td>63.7</td>
      <td>30.000000</td>
      <td>29.000000</td>
      <td>92.800000</td>
      <td>75.600000</td>
      <td>67.000000</td>
      <td>79.600000</td>
      <td>75.80000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>15</th>
      <td>Albania</td>
      <td>0</td>
      <td>2010</td>
      <td>67.430000</td>
      <td>66.0</td>
      <td>35.000000</td>
      <td>34.000000</td>
      <td>92.600000</td>
      <td>74.200000</td>
      <td>68.000000</td>
      <td>78.700000</td>
      <td>85.80000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>16</th>
      <td>Albania</td>
      <td>0</td>
      <td>2011</td>
      <td>65.360000</td>
      <td>64.0</td>
      <td>35.000000</td>
      <td>32.000000</td>
      <td>92.100000</td>
      <td>68.700000</td>
      <td>67.100000</td>
      <td>79.900000</td>
      <td>79.80000</td>
      <td>65.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>17</th>
      <td>Albania</td>
      <td>0</td>
      <td>2012</td>
      <td>66.560000</td>
      <td>65.1</td>
      <td>35.000000</td>
      <td>33.000000</td>
      <td>91.400000</td>
      <td>69.500000</td>
      <td>78.200000</td>
      <td>78.600000</td>
      <td>79.80000</td>
      <td>65.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>18</th>
      <td>Albania</td>
      <td>0</td>
      <td>2013</td>
      <td>66.810000</td>
      <td>65.2</td>
      <td>30.000000</td>
      <td>31.000000</td>
      <td>92.600000</td>
      <td>75.100000</td>
      <td>81.000000</td>
      <td>78.400000</td>
      <td>79.80000</td>
      <td>65.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>19</th>
      <td>Albania</td>
      <td>0</td>
      <td>2014</td>
      <td>68.620000</td>
      <td>66.9</td>
      <td>30.000000</td>
      <td>30.400000</td>
      <td>92.700000</td>
      <td>75.600000</td>
      <td>78.100000</td>
      <td>80.000000</td>
      <td>87.50000</td>
      <td>75.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>20</th>
      <td>Albania</td>
      <td>0</td>
      <td>2015</td>
      <td>66.920000</td>
      <td>65.7</td>
      <td>30.000000</td>
      <td>31.000000</td>
      <td>87.200000</td>
      <td>76.100000</td>
      <td>70.600000</td>
      <td>80.800000</td>
      <td>87.80000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>21</th>
      <td>Albania</td>
      <td>0</td>
      <td>2016</td>
      <td>67.360000</td>
      <td>65.9</td>
      <td>35.000000</td>
      <td>33.000000</td>
      <td>87.800000</td>
      <td>75.000000</td>
      <td>67.600000</td>
      <td>81.700000</td>
      <td>87.60000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>22</th>
      <td>Albania</td>
      <td>0</td>
      <td>2017</td>
      <td>70.590000</td>
      <td>64.4</td>
      <td>54.000000</td>
      <td>39.700000</td>
      <td>86.900000</td>
      <td>72.500000</td>
      <td>79.300000</td>
      <td>81.400000</td>
      <td>87.70000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>23</th>
      <td>Albania</td>
      <td>0</td>
      <td>2018</td>
      <td>69.560000</td>
      <td>64.5</td>
      <td>54.100000</td>
      <td>39.900000</td>
      <td>85.100000</td>
      <td>72.700000</td>
      <td>69.100000</td>
      <td>82.400000</td>
      <td>87.80000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>24</th>
      <td>Albania</td>
      <td>0</td>
      <td>2019</td>
      <td>70.050000</td>
      <td>66.5</td>
      <td>54.800000</td>
      <td>40.400000</td>
      <td>86.300000</td>
      <td>73.900000</td>
      <td>69.300000</td>
      <td>81.500000</td>
      <td>87.80000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>25</th>
      <td>Albania</td>
      <td>0</td>
      <td>2020</td>
      <td>53.607167</td>
      <td>0.0</td>
      <td>36.203142</td>
      <td>11.932771</td>
      <td>81.316382</td>
      <td>60.420919</td>
      <td>64.110312</td>
      <td>59.904574</td>
      <td>57.62639</td>
      <td>69.810465</td>
      <td>41.139548</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>So here is the function to predict. I don't know if this is necessarily the perfect solution, it could be made into a script that prompts the user for a country and then adds in the underscores and all that, but I couldn't get all of that to work properly.</p>
<p>For it to work, it's good enough for our purposes to have the user change the function each time they want to run it.</p>
<p>This also prints out the rmse, mse, and r^2 averages.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">predict</span><span class="p">(</span><span class="n">c</span><span class="p">,</span><span class="n">years</span><span class="p">):</span>
  <span class="n">regression_model</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
  <span class="n">count</span> <span class="o">=</span> <span class="mi">1</span>
  <span class="n">rmse_avg</span> <span class="o">=</span> <span class="p">[]</span>
  <span class="n">r2_avg</span> <span class="o">=</span> <span class="p">[]</span>
  <span class="n">mse_avg</span> <span class="o">=</span> <span class="p">[]</span>
  <span class="k">while</span> <span class="n">count</span> <span class="o">&lt;</span> <span class="n">years</span> <span class="o">+</span> <span class="mi">1</span><span class="p">:</span>
    <span class="c1">#declare variable to clear them</span>
    <span class="n">yPrediction</span> <span class="o">=</span> <span class="p">[]</span>
    <span class="n">dft</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({})</span> 
    <span class="n">predicted_scores</span> <span class="o">=</span> <span class="p">[]</span>
    <span class="n">summ</span><span class="o">=</span><span class="mi">0</span>
    

    <span class="k">for</span> <span class="n">col</span><span class="p">,</span> <span class="n">row</span> <span class="ow">in</span> <span class="n">c</span><span class="o">.</span><span class="n">iteritems</span><span class="p">():</span>
      <span class="k">if</span> <span class="n">col</span> <span class="ow">in</span> <span class="p">[</span><span class="s2">&quot;property_rights&quot;</span><span class="p">,</span>	<span class="s2">&quot;government_integrity&quot;</span><span class="p">,</span>	<span class="s2">&quot;tax_burden&quot;</span><span class="p">,</span>
                 <span class="s2">&quot;government_spending&quot;</span><span class="p">,</span>	<span class="s2">&quot;business_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;monetary_freedom&quot;</span><span class="p">,</span>	
                 <span class="s2">&quot;trade_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;investment_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;financial_freedom&quot;</span><span class="p">]:</span>
        <span class="n">x</span> <span class="o">=</span> <span class="n">c</span><span class="p">[[</span><span class="s1">&#39;index_country&#39;</span><span class="p">]]</span>
        <span class="n">y</span> <span class="o">=</span> <span class="n">c</span><span class="p">[[</span><span class="n">col</span><span class="p">]]</span>
        <span class="n">xTrain</span><span class="p">,</span> <span class="n">xTest</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">,</span> <span class="n">yTest</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">test_size</span> <span class="o">=</span> <span class="mi">1</span><span class="o">/</span><span class="mi">6</span><span class="p">,</span> <span class="n">random_state</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span>
        <span class="n">regression_model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">xTrain</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">)</span> 
        <span class="n">yPrediction</span> <span class="o">=</span> <span class="n">regression_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">xTest</span><span class="p">)</span>
        <span class="n">predicted_scores</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">yPrediction</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span>
        
        <span class="n">rmse</span> <span class="o">=</span> <span class="n">mean_squared_error</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
        <span class="n">r2</span> <span class="o">=</span> <span class="n">r2_score</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
        <span class="n">mse</span> <span class="o">=</span> <span class="n">mean_squared_error</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
        
        <span class="n">rmse_avg</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">rmse</span><span class="p">)</span>
        <span class="n">r2_avg</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">r2</span><span class="p">)</span>
        <span class="n">mse_avg</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">mse</span><span class="p">)</span>

    <span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="n">predicted_scores</span><span class="p">:</span>
      <span class="n">summ</span> <span class="o">=</span> <span class="n">summ</span> <span class="o">+</span> <span class="n">x</span>
    <span class="n">avg</span> <span class="o">=</span> <span class="n">summ</span> <span class="o">/</span> <span class="mi">9</span>

    <span class="n">dft</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({</span><span class="s2">&quot;name&quot;</span><span class="p">:[</span><span class="n">c</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="s1">&#39;name&#39;</span><span class="p">]],</span>
                        <span class="s2">&quot;index_country&quot;</span><span class="p">:[</span><span class="n">c</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="s1">&#39;index_country&#39;</span><span class="p">]],</span>
                        <span class="s2">&quot;index_year&quot;</span><span class="p">:[</span><span class="n">c</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="o">-</span><span class="mi">1</span><span class="p">][</span><span class="s1">&#39;index_year&#39;</span><span class="p">]</span> <span class="o">+</span> <span class="mi">1</span><span class="p">],</span>
                        <span class="s2">&quot;adjusted_score&quot;</span><span class="p">:[</span><span class="n">avg</span><span class="p">[</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;overall_score&quot;</span><span class="p">:[</span><span class="mi">0</span><span class="p">],</span>
                        <span class="s2">&quot;property_rights&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span> 
                        <span class="s2">&quot;government_integrity&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">1</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>  
                        <span class="s2">&quot;tax_burden&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">2</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;government_spending&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">3</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;business_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">4</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;monetary_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">5</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;trade_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">6</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;investment_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">7</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                        <span class="s2">&quot;financial_freedom&quot;</span><span class="p">:[</span><span class="n">predicted_scores</span><span class="p">[</span><span class="mi">8</span><span class="p">][</span><span class="mi">0</span><span class="p">]],</span>
                       <span class="p">})</span>
    <span class="n">c</span><span class="o">=</span><span class="n">c</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">dft</span><span class="p">)</span>
    <span class="n">count</span> <span class="o">=</span> <span class="n">count</span> <span class="o">+</span> <span class="mi">1</span>
  <span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The average mse is:&quot;</span><span class="p">,</span><span class="nb">sum</span><span class="p">(</span><span class="n">mse_avg</span><span class="p">)</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">mse_avg</span><span class="p">))</span>
  <span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The average rmse is:&quot;</span><span class="p">,</span><span class="n">math</span><span class="o">.</span><span class="n">sqrt</span><span class="p">(</span><span class="nb">sum</span><span class="p">(</span><span class="n">rmse_avg</span><span class="p">)</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">rmse_avg</span><span class="p">)))</span>
  <span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The average r2 is:&quot;</span><span class="p">,</span><span class="nb">sum</span><span class="p">(</span><span class="n">r2_avg</span><span class="p">)</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">r2_avg</span><span class="p">))</span>
  
  <span class="k">return</span> <span class="n">c</span>
<span class="n">predict</span><span class="p">(</span><span class="n">Albania_data</span><span class="p">,</span><span class="mi">1</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>The average mse is: 1134.2570355911082
The average rmse is: 33.678732689801556
The average r2 is: -34.91680338789948
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>name</th>
      <th>index_country</th>
      <th>index_year</th>
      <th>adjusted_score</th>
      <th>overall_score</th>
      <th>property_rights</th>
      <th>government_integrity</th>
      <th>tax_burden</th>
      <th>government_spending</th>
      <th>business_freedom</th>
      <th>monetary_freedom</th>
      <th>trade_freedom</th>
      <th>investment_freedom</th>
      <th>financial_freedom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>Albania</td>
      <td>0</td>
      <td>1995</td>
      <td>49.680</td>
      <td>49.7</td>
      <td>50.000</td>
      <td>10.0</td>
      <td>81.700</td>
      <td>34.30</td>
      <td>70.00</td>
      <td>22.10</td>
      <td>59.000</td>
      <td>70.0</td>
      <td>50.0</td>
    </tr>
    <tr>
      <th>1</th>
      <td>Albania</td>
      <td>0</td>
      <td>1996</td>
      <td>53.810</td>
      <td>53.8</td>
      <td>50.000</td>
      <td>10.0</td>
      <td>81.700</td>
      <td>51.00</td>
      <td>70.00</td>
      <td>42.60</td>
      <td>59.000</td>
      <td>70.0</td>
      <td>50.0</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Albania</td>
      <td>0</td>
      <td>1997</td>
      <td>54.850</td>
      <td>54.8</td>
      <td>50.000</td>
      <td>10.0</td>
      <td>81.500</td>
      <td>60.30</td>
      <td>70.00</td>
      <td>62.90</td>
      <td>59.000</td>
      <td>70.0</td>
      <td>30.0</td>
    </tr>
    <tr>
      <th>3</th>
      <td>Albania</td>
      <td>0</td>
      <td>1998</td>
      <td>53.920</td>
      <td>53.9</td>
      <td>30.000</td>
      <td>10.0</td>
      <td>82.100</td>
      <td>66.50</td>
      <td>70.00</td>
      <td>67.70</td>
      <td>59.000</td>
      <td>70.0</td>
      <td>30.0</td>
    </tr>
    <tr>
      <th>4</th>
      <td>Albania</td>
      <td>0</td>
      <td>1999</td>
      <td>53.440</td>
      <td>53.4</td>
      <td>30.000</td>
      <td>10.0</td>
      <td>82.900</td>
      <td>72.50</td>
      <td>70.00</td>
      <td>57.80</td>
      <td>57.800</td>
      <td>70.0</td>
      <td>30.0</td>
    </tr>
    <tr>
      <th>5</th>
      <td>Albania</td>
      <td>0</td>
      <td>2000</td>
      <td>53.610</td>
      <td>53.6</td>
      <td>30.000</td>
      <td>10.0</td>
      <td>80.200</td>
      <td>74.80</td>
      <td>70.00</td>
      <td>59.70</td>
      <td>57.800</td>
      <td>70.0</td>
      <td>30.0</td>
    </tr>
    <tr>
      <th>6</th>
      <td>Albania</td>
      <td>0</td>
      <td>2001</td>
      <td>56.590</td>
      <td>56.6</td>
      <td>30.000</td>
      <td>23.0</td>
      <td>79.500</td>
      <td>71.20</td>
      <td>70.00</td>
      <td>71.80</td>
      <td>63.800</td>
      <td>70.0</td>
      <td>30.0</td>
    </tr>
    <tr>
      <th>7</th>
      <td>Albania</td>
      <td>0</td>
      <td>2002</td>
      <td>56.770</td>
      <td>56.8</td>
      <td>30.000</td>
      <td>10.0</td>
      <td>79.200</td>
      <td>67.30</td>
      <td>55.00</td>
      <td>86.00</td>
      <td>63.400</td>
      <td>70.0</td>
      <td>50.0</td>
    </tr>
    <tr>
      <th>8</th>
      <td>Albania</td>
      <td>0</td>
      <td>2003</td>
      <td>56.800</td>
      <td>56.8</td>
      <td>30.000</td>
      <td>10.0</td>
      <td>83.800</td>
      <td>70.40</td>
      <td>55.00</td>
      <td>85.80</td>
      <td>56.200</td>
      <td>70.0</td>
      <td>50.0</td>
    </tr>
    <tr>
      <th>9</th>
      <td>Albania</td>
      <td>0</td>
      <td>2004</td>
      <td>58.540</td>
      <td>58.5</td>
      <td>30.000</td>
      <td>25.0</td>
      <td>83.600</td>
      <td>72.30</td>
      <td>55.00</td>
      <td>79.60</td>
      <td>61.400</td>
      <td>70.0</td>
      <td>50.0</td>
    </tr>
    <tr>
      <th>10</th>
      <td>Albania</td>
      <td>0</td>
      <td>2005</td>
      <td>58.730</td>
      <td>57.8</td>
      <td>30.000</td>
      <td>25.0</td>
      <td>83.300</td>
      <td>71.00</td>
      <td>55.00</td>
      <td>85.00</td>
      <td>60.200</td>
      <td>70.0</td>
      <td>50.0</td>
    </tr>
    <tr>
      <th>11</th>
      <td>Albania</td>
      <td>0</td>
      <td>2006</td>
      <td>61.330</td>
      <td>60.3</td>
      <td>30.000</td>
      <td>25.0</td>
      <td>81.200</td>
      <td>75.60</td>
      <td>54.30</td>
      <td>84.50</td>
      <td>62.400</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>12</th>
      <td>Albania</td>
      <td>0</td>
      <td>2007</td>
      <td>62.540</td>
      <td>61.4</td>
      <td>30.000</td>
      <td>24.0</td>
      <td>87.300</td>
      <td>75.10</td>
      <td>64.10</td>
      <td>80.30</td>
      <td>73.200</td>
      <td>60.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>13</th>
      <td>Albania</td>
      <td>0</td>
      <td>2008</td>
      <td>63.650</td>
      <td>62.4</td>
      <td>30.000</td>
      <td>26.0</td>
      <td>90.300</td>
      <td>76.00</td>
      <td>55.60</td>
      <td>80.40</td>
      <td>75.800</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>14</th>
      <td>Albania</td>
      <td>0</td>
      <td>2009</td>
      <td>65.350</td>
      <td>63.7</td>
      <td>30.000</td>
      <td>29.0</td>
      <td>92.800</td>
      <td>75.60</td>
      <td>67.00</td>
      <td>79.60</td>
      <td>75.800</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>15</th>
      <td>Albania</td>
      <td>0</td>
      <td>2010</td>
      <td>67.430</td>
      <td>66.0</td>
      <td>35.000</td>
      <td>34.0</td>
      <td>92.600</td>
      <td>74.20</td>
      <td>68.00</td>
      <td>78.70</td>
      <td>85.800</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>16</th>
      <td>Albania</td>
      <td>0</td>
      <td>2011</td>
      <td>65.360</td>
      <td>64.0</td>
      <td>35.000</td>
      <td>32.0</td>
      <td>92.100</td>
      <td>68.70</td>
      <td>67.10</td>
      <td>79.90</td>
      <td>79.800</td>
      <td>65.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>17</th>
      <td>Albania</td>
      <td>0</td>
      <td>2012</td>
      <td>66.560</td>
      <td>65.1</td>
      <td>35.000</td>
      <td>33.0</td>
      <td>91.400</td>
      <td>69.50</td>
      <td>78.20</td>
      <td>78.60</td>
      <td>79.800</td>
      <td>65.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>18</th>
      <td>Albania</td>
      <td>0</td>
      <td>2013</td>
      <td>66.810</td>
      <td>65.2</td>
      <td>30.000</td>
      <td>31.0</td>
      <td>92.600</td>
      <td>75.10</td>
      <td>81.00</td>
      <td>78.40</td>
      <td>79.800</td>
      <td>65.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>19</th>
      <td>Albania</td>
      <td>0</td>
      <td>2014</td>
      <td>68.620</td>
      <td>66.9</td>
      <td>30.000</td>
      <td>30.4</td>
      <td>92.700</td>
      <td>75.60</td>
      <td>78.10</td>
      <td>80.00</td>
      <td>87.500</td>
      <td>75.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>20</th>
      <td>Albania</td>
      <td>0</td>
      <td>2015</td>
      <td>66.920</td>
      <td>65.7</td>
      <td>30.000</td>
      <td>31.0</td>
      <td>87.200</td>
      <td>76.10</td>
      <td>70.60</td>
      <td>80.80</td>
      <td>87.800</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>21</th>
      <td>Albania</td>
      <td>0</td>
      <td>2016</td>
      <td>67.360</td>
      <td>65.9</td>
      <td>35.000</td>
      <td>33.0</td>
      <td>87.800</td>
      <td>75.00</td>
      <td>67.60</td>
      <td>81.70</td>
      <td>87.600</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>22</th>
      <td>Albania</td>
      <td>0</td>
      <td>2017</td>
      <td>70.590</td>
      <td>64.4</td>
      <td>54.000</td>
      <td>39.7</td>
      <td>86.900</td>
      <td>72.50</td>
      <td>79.30</td>
      <td>81.40</td>
      <td>87.700</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>23</th>
      <td>Albania</td>
      <td>0</td>
      <td>2018</td>
      <td>69.560</td>
      <td>64.5</td>
      <td>54.100</td>
      <td>39.9</td>
      <td>85.100</td>
      <td>72.70</td>
      <td>69.10</td>
      <td>82.40</td>
      <td>87.800</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>24</th>
      <td>Albania</td>
      <td>0</td>
      <td>2019</td>
      <td>70.050</td>
      <td>66.5</td>
      <td>54.800</td>
      <td>40.4</td>
      <td>86.300</td>
      <td>73.90</td>
      <td>69.30</td>
      <td>81.50</td>
      <td>87.800</td>
      <td>70.0</td>
      <td>70.0</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Albania</td>
      <td>0</td>
      <td>2020</td>
      <td>61.905</td>
      <td>0.0</td>
      <td>36.395</td>
      <td>24.7</td>
      <td>85.905</td>
      <td>69.61</td>
      <td>66.99</td>
      <td>74.11</td>
      <td>72.435</td>
      <td>69.0</td>
      <td>58.0</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>Country data can be whatever and the second argument is the number of years after 2019 the model will predict</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">predict</span><span class="p">(</span><span class="n">Chile_data</span><span class="p">,</span><span class="mi">6</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>name</th>
      <th>index_country</th>
      <th>index_year</th>
      <th>adjusted_score</th>
      <th>overall_score</th>
      <th>property_rights</th>
      <th>government_integrity</th>
      <th>tax_burden</th>
      <th>government_spending</th>
      <th>business_freedom</th>
      <th>monetary_freedom</th>
      <th>trade_freedom</th>
      <th>investment_freedom</th>
      <th>financial_freedom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>641</th>
      <td>Chile</td>
      <td>27</td>
      <td>1995</td>
      <td>71.180000</td>
      <td>71.2</td>
      <td>90.000000</td>
      <td>50.000000</td>
      <td>79.400000</td>
      <td>87.000000</td>
      <td>85.000000</td>
      <td>66.200000</td>
      <td>63.000000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>642</th>
      <td>Chile</td>
      <td>27</td>
      <td>1996</td>
      <td>72.630000</td>
      <td>72.6</td>
      <td>90.000000</td>
      <td>50.000000</td>
      <td>89.800000</td>
      <td>85.900000</td>
      <td>85.000000</td>
      <td>68.000000</td>
      <td>65.000000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>643</th>
      <td>Chile</td>
      <td>27</td>
      <td>1997</td>
      <td>75.860000</td>
      <td>75.9</td>
      <td>90.000000</td>
      <td>79.000000</td>
      <td>73.500000</td>
      <td>86.600000</td>
      <td>85.000000</td>
      <td>75.600000</td>
      <td>73.000000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>644</th>
      <td>Chile</td>
      <td>27</td>
      <td>1998</td>
      <td>74.910000</td>
      <td>74.9</td>
      <td>90.000000</td>
      <td>68.000000</td>
      <td>73.000000</td>
      <td>88.100000</td>
      <td>85.000000</td>
      <td>77.100000</td>
      <td>73.000000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>645</th>
      <td>Chile</td>
      <td>27</td>
      <td>1999</td>
      <td>74.190000</td>
      <td>74.1</td>
      <td>90.000000</td>
      <td>61.000000</td>
      <td>73.000000</td>
      <td>87.100000</td>
      <td>85.000000</td>
      <td>78.700000</td>
      <td>73.000000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>646</th>
      <td>Chile</td>
      <td>27</td>
      <td>2000</td>
      <td>74.690000</td>
      <td>74.7</td>
      <td>90.000000</td>
      <td>68.000000</td>
      <td>73.200000</td>
      <td>85.500000</td>
      <td>85.000000</td>
      <td>80.100000</td>
      <td>70.400000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>647</th>
      <td>Chile</td>
      <td>27</td>
      <td>2001</td>
      <td>75.090000</td>
      <td>75.1</td>
      <td>90.000000</td>
      <td>69.000000</td>
      <td>73.700000</td>
      <td>84.100000</td>
      <td>85.000000</td>
      <td>82.400000</td>
      <td>71.600000</td>
      <td>70.000000</td>
      <td>50.000000</td>
    </tr>
    <tr>
      <th>648</th>
      <td>Chile</td>
      <td>27</td>
      <td>2002</td>
      <td>77.760000</td>
      <td>77.8</td>
      <td>90.000000</td>
      <td>74.000000</td>
      <td>74.000000</td>
      <td>82.700000</td>
      <td>85.000000</td>
      <td>82.700000</td>
      <td>71.400000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>649</th>
      <td>Chile</td>
      <td>27</td>
      <td>2003</td>
      <td>75.980000</td>
      <td>76.0</td>
      <td>90.000000</td>
      <td>75.000000</td>
      <td>75.000000</td>
      <td>81.800000</td>
      <td>70.000000</td>
      <td>83.000000</td>
      <td>69.000000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>650</th>
      <td>Chile</td>
      <td>27</td>
      <td>2004</td>
      <td>76.910000</td>
      <td>76.9</td>
      <td>90.000000</td>
      <td>75.000000</td>
      <td>78.500000</td>
      <td>81.500000</td>
      <td>70.000000</td>
      <td>84.200000</td>
      <td>73.000000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>651</th>
      <td>Chile</td>
      <td>27</td>
      <td>2005</td>
      <td>77.850000</td>
      <td>77.8</td>
      <td>90.000000</td>
      <td>74.000000</td>
      <td>78.300000</td>
      <td>84.800000</td>
      <td>70.000000</td>
      <td>84.400000</td>
      <td>79.200000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>652</th>
      <td>Chile</td>
      <td>27</td>
      <td>2006</td>
      <td>78.070000</td>
      <td>78.0</td>
      <td>90.000000</td>
      <td>74.000000</td>
      <td>78.600000</td>
      <td>87.500000</td>
      <td>68.100000</td>
      <td>86.900000</td>
      <td>77.600000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>653</th>
      <td>Chile</td>
      <td>27</td>
      <td>2007</td>
      <td>77.780000</td>
      <td>77.7</td>
      <td>90.000000</td>
      <td>73.000000</td>
      <td>78.800000</td>
      <td>87.900000</td>
      <td>68.200000</td>
      <td>79.800000</td>
      <td>82.400000</td>
      <td>70.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>654</th>
      <td>Chile</td>
      <td>27</td>
      <td>2008</td>
      <td>78.670000</td>
      <td>78.6</td>
      <td>90.000000</td>
      <td>73.000000</td>
      <td>78.100000</td>
      <td>88.200000</td>
      <td>67.800000</td>
      <td>78.800000</td>
      <td>82.200000</td>
      <td>80.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>655</th>
      <td>Chile</td>
      <td>27</td>
      <td>2009</td>
      <td>78.600000</td>
      <td>78.3</td>
      <td>90.000000</td>
      <td>70.000000</td>
      <td>78.200000</td>
      <td>90.100000</td>
      <td>66.300000</td>
      <td>77.300000</td>
      <td>85.800000</td>
      <td>80.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>656</th>
      <td>Chile</td>
      <td>27</td>
      <td>2010</td>
      <td>77.410000</td>
      <td>77.2</td>
      <td>85.000000</td>
      <td>69.000000</td>
      <td>77.500000</td>
      <td>89.600000</td>
      <td>64.800000</td>
      <td>73.000000</td>
      <td>88.000000</td>
      <td>80.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>657</th>
      <td>Chile</td>
      <td>27</td>
      <td>2011</td>
      <td>77.680000</td>
      <td>77.4</td>
      <td>85.000000</td>
      <td>67.000000</td>
      <td>77.700000</td>
      <td>86.600000</td>
      <td>67.200000</td>
      <td>77.900000</td>
      <td>88.000000</td>
      <td>80.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>658</th>
      <td>Chile</td>
      <td>27</td>
      <td>2012</td>
      <td>78.600000</td>
      <td>78.3</td>
      <td>90.000000</td>
      <td>72.000000</td>
      <td>77.400000</td>
      <td>82.100000</td>
      <td>68.600000</td>
      <td>85.600000</td>
      <td>82.000000</td>
      <td>80.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>659</th>
      <td>Chile</td>
      <td>27</td>
      <td>2013</td>
      <td>79.440000</td>
      <td>79.0</td>
      <td>90.000000</td>
      <td>72.000000</td>
      <td>77.600000</td>
      <td>83.700000</td>
      <td>70.500000</td>
      <td>84.600000</td>
      <td>82.000000</td>
      <td>85.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>660</th>
      <td>Chile</td>
      <td>27</td>
      <td>2014</td>
      <td>79.670000</td>
      <td>78.7</td>
      <td>90.000000</td>
      <td>72.300000</td>
      <td>76.500000</td>
      <td>83.800000</td>
      <td>69.300000</td>
      <td>84.100000</td>
      <td>82.000000</td>
      <td>90.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>661</th>
      <td>Chile</td>
      <td>27</td>
      <td>2015</td>
      <td>79.620000</td>
      <td>78.5</td>
      <td>90.000000</td>
      <td>71.000000</td>
      <td>76.500000</td>
      <td>83.300000</td>
      <td>69.300000</td>
      <td>85.600000</td>
      <td>82.000000</td>
      <td>90.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>662</th>
      <td>Chile</td>
      <td>27</td>
      <td>2016</td>
      <td>79.000000</td>
      <td>77.7</td>
      <td>85.000000</td>
      <td>73.000000</td>
      <td>74.800000</td>
      <td>83.100000</td>
      <td>72.100000</td>
      <td>82.900000</td>
      <td>86.400000</td>
      <td>85.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>663</th>
      <td>Chile</td>
      <td>27</td>
      <td>2017</td>
      <td>77.090000</td>
      <td>76.5</td>
      <td>68.200000</td>
      <td>70.500000</td>
      <td>77.600000</td>
      <td>82.200000</td>
      <td>72.300000</td>
      <td>82.200000</td>
      <td>86.400000</td>
      <td>85.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>664</th>
      <td>Chile</td>
      <td>27</td>
      <td>2018</td>
      <td>76.210000</td>
      <td>75.2</td>
      <td>67.900000</td>
      <td>61.200000</td>
      <td>78.000000</td>
      <td>81.300000</td>
      <td>72.400000</td>
      <td>82.400000</td>
      <td>88.700000</td>
      <td>85.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>665</th>
      <td>Chile</td>
      <td>27</td>
      <td>2019</td>
      <td>76.960000</td>
      <td>75.4</td>
      <td>68.700000</td>
      <td>62.300000</td>
      <td>77.300000</td>
      <td>81.000000</td>
      <td>76.600000</td>
      <td>84.500000</td>
      <td>88.800000</td>
      <td>85.000000</td>
      <td>70.000000</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Chile</td>
      <td>27</td>
      <td>2020</td>
      <td>76.833333</td>
      <td>0.0</td>
      <td>86.240000</td>
      <td>68.150000</td>
      <td>77.325000</td>
      <td>84.775000</td>
      <td>74.445000</td>
      <td>80.170000</td>
      <td>78.645000</td>
      <td>76.750000</td>
      <td>65.000000</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Chile</td>
      <td>27</td>
      <td>2021</td>
      <td>76.764550</td>
      <td>0.0</td>
      <td>86.001905</td>
      <td>68.164286</td>
      <td>77.358333</td>
      <td>84.889286</td>
      <td>74.464048</td>
      <td>80.189048</td>
      <td>78.540238</td>
      <td>76.273810</td>
      <td>65.000000</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Chile</td>
      <td>27</td>
      <td>2022</td>
      <td>76.883237</td>
      <td>0.0</td>
      <td>86.970087</td>
      <td>68.559740</td>
      <td>77.321970</td>
      <td>84.993831</td>
      <td>74.132229</td>
      <td>80.239048</td>
      <td>78.231147</td>
      <td>76.501082</td>
      <td>65.000000</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Chile</td>
      <td>27</td>
      <td>2023</td>
      <td>76.882271</td>
      <td>0.0</td>
      <td>86.991826</td>
      <td>68.203219</td>
      <td>77.308926</td>
      <td>84.941657</td>
      <td>74.319186</td>
      <td>80.339048</td>
      <td>78.335495</td>
      <td>76.501082</td>
      <td>65.000000</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Chile</td>
      <td>27</td>
      <td>2024</td>
      <td>76.727641</td>
      <td>0.0</td>
      <td>87.004326</td>
      <td>68.257385</td>
      <td>77.108926</td>
      <td>84.924991</td>
      <td>74.927519</td>
      <td>79.984881</td>
      <td>78.089662</td>
      <td>76.084416</td>
      <td>64.166667</td>
    </tr>
    <tr>
      <th>0</th>
      <td>Chile</td>
      <td>27</td>
      <td>2025</td>
      <td>76.833324</td>
      <td>0.0</td>
      <td>86.400576</td>
      <td>68.090685</td>
      <td>77.114236</td>
      <td>84.823753</td>
      <td>74.568190</td>
      <td>80.383757</td>
      <td>78.578632</td>
      <td>76.973420</td>
      <td>64.566667</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>This loop simply predicts out a year and returns a list of the 5 highest predictions for the year 2020,</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">top_2020</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">146</span><span class="p">):</span>
  <span class="n">dftop</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">country_data</span><span class="p">[</span><span class="n">x</span><span class="p">],</span><span class="mi">1</span><span class="p">)</span>
  <span class="n">top5_2020</span><span class="o">.</span><span class="n">append</span><span class="p">([[</span><span class="n">dftop</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="o">-</span><span class="mi">1</span><span class="p">][</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">]],[</span><span class="n">dftop</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="s1">&#39;name&#39;</span><span class="p">]]])</span>
  
<span class="n">top5_2020</span><span class="o">.</span><span class="n">sort</span><span class="p">(</span><span class="n">key</span><span class="o">=</span><span class="n">itemgetter</span><span class="p">(</span><span class="mi">0</span><span class="p">),</span> <span class="n">reverse</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">top5_2020</span><span class="p">[:</span><span class="mi">5</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[[[89.64], [&#39;Hong_Kong&#39;]],
 [[87.38333333333333], [&#39;Singapore&#39;]],
 [[80.76777777777778], [&#39;New_Zealand&#39;]],
 [[79.55611111111111], [&#39;Switzerland&#39;]],
 [[78.35888888888888], [&#39;Ireland&#39;]]]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>the year 2025,</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">top_2025</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">146</span><span class="p">):</span>
  <span class="n">dftop</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">country_data</span><span class="p">[</span><span class="n">x</span><span class="p">],</span><span class="mi">6</span><span class="p">)</span>
  <span class="n">top5_2025</span><span class="o">.</span><span class="n">append</span><span class="p">([[</span><span class="n">dftop</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="o">-</span><span class="mi">1</span><span class="p">][</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">]],[</span><span class="n">dftop</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="s1">&#39;name&#39;</span><span class="p">]]])</span>
  
<span class="n">top5_2025</span><span class="o">.</span><span class="n">sort</span><span class="p">(</span><span class="n">key</span><span class="o">=</span><span class="n">itemgetter</span><span class="p">(</span><span class="mi">0</span><span class="p">),</span> <span class="n">reverse</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">top5_2025</span><span class="p">[:</span><span class="mi">5</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[[[89.58935650709999], [&#39;Hong_Kong&#39;]],
 [[87.40648341593993], [&#39;Singapore&#39;]],
 [[80.82679024196415], [&#39;New_Zealand&#39;]],
 [[79.52929362465233], [&#39;Switzerland&#39;]],
 [[78.04526009159923], [&#39;Ireland&#39;]]]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>and the year 2050.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">top_2050</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">x</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">146</span><span class="p">):</span>
  <span class="n">dftop</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">country_data</span><span class="p">[</span><span class="n">x</span><span class="p">],</span><span class="mi">31</span><span class="p">)</span>
  <span class="n">top5_2050</span><span class="o">.</span><span class="n">append</span><span class="p">([[</span><span class="n">dftop</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="o">-</span><span class="mi">1</span><span class="p">][</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">]],[</span><span class="n">dftop</span><span class="o">.</span><span class="n">iloc</span><span class="p">[</span><span class="mi">0</span><span class="p">][</span><span class="s1">&#39;name&#39;</span><span class="p">]]])</span>
  
<span class="n">top5_2050</span><span class="o">.</span><span class="n">sort</span><span class="p">(</span><span class="n">key</span><span class="o">=</span><span class="n">itemgetter</span><span class="p">(</span><span class="mi">0</span><span class="p">),</span> <span class="n">reverse</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">top5_2050</span><span class="p">[:</span><span class="mi">5</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[0]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[[[89.66528214576473], [&#39;Hong_Kong&#39;]],
 [[87.37077961896036], [&#39;Singapore&#39;]],
 [[80.84845858662536], [&#39;New_Zealand&#39;]],
 [[79.72232081827968], [&#39;Switzerland&#39;]],
 [[77.88403974708041], [&#39;Ireland&#39;]]]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>Here's a graph of the original five, which still happen to be on top in 2025, with their new predicted scores through 2025.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">output_notebook</span><span class="p">()</span>

<span class="n">v</span> <span class="o">=</span> <span class="n">figure</span><span class="p">(</span><span class="n">title</span> <span class="o">=</span> <span class="s1">&#39;Countries Overall Score By Year&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">title</span><span class="o">.</span><span class="n">align</span> <span class="o">=</span> <span class="s1">&#39;center&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">xaxis</span><span class="o">.</span><span class="n">axis_label</span> <span class="o">=</span> <span class="s1">&#39;Year&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">xaxis</span><span class="o">.</span><span class="n">axis_label_text_font_size</span> <span class="o">=</span> <span class="s2">&quot;12pt&quot;</span>
<span class="n">v</span><span class="o">.</span><span class="n">yaxis</span><span class="o">.</span><span class="n">axis_label</span> <span class="o">=</span> <span class="s1">&#39;Overall Score&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">yaxis</span><span class="o">.</span><span class="n">axis_label_text_font_size</span> <span class="o">=</span> <span class="s2">&quot;12pt&quot;</span>




<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Hong_Kong_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Hong_Kong_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;red&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Hong Kong&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Hong_Kong_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Hong_Kong_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;red&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Hong Kong&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Singapore_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Singapore_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;green&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Singapore&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Singapore_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Singapore_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;green&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Singapore&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">New_Zealand_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">New_Zealand_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;purple&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;New Zealand&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">New_Zealand_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">New_Zealand_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;purple&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;New Zealand&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Switzerland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Switzerland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;black&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Switzerland&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Switzerland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Switzerland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;black&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Switzerland&#39;</span><span class="p">)</span>

<span class="n">v</span><span class="o">.</span><span class="n">line</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Ireland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span><span class="n">predict</span><span class="p">(</span><span class="n">Ireland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;blue&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Ireland&#39;</span><span class="p">)</span>
<span class="n">v</span><span class="o">.</span><span class="n">circle</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Ireland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;index_year&#39;</span><span class="p">],</span> <span class="n">y</span><span class="o">=</span> <span class="n">predict</span><span class="p">(</span><span class="n">Ireland_data</span><span class="p">,</span> <span class="mi">6</span><span class="p">)[</span><span class="s1">&#39;adjusted_score&#39;</span><span class="p">],</span> <span class="n">color</span> <span class="o">=</span> <span class="s1">&#39;blue&#39;</span><span class="p">,</span> <span class="n">legend</span> <span class="o">=</span> <span class="s1">&#39;Ireland&#39;</span><span class="p">)</span>


<span class="n">v</span><span class="o">.</span><span class="n">legend</span><span class="o">.</span><span class="n">location</span> <span class="o">=</span> <span class="s1">&#39;bottom_right&#39;</span>
<span class="n">v</span><span class="o">.</span><span class="n">legend</span><span class="o">.</span><span class="n">background_fill_color</span> <span class="o">=</span> <span class="s2">&quot;gray&quot;</span>
<span class="n">v</span><span class="o">.</span><span class="n">legend</span><span class="o">.</span><span class="n">background_fill_alpha</span> <span class="o">=</span> <span class="o">.</span><span class="mi">6</span>

<span class="n">show</span><span class="p">(</span><span class="n">v</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">

    <div class="bk-root">
        <a href="https://bokeh.pydata.org" target="_blank" class="bk-logo bk-logo-small bk-logo-notebook"></a>
        <span id="11471">Loading BokehJS ...</span>
    </div>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>





<div id="5fcb6402-44d2-4bc2-8048-90cf387f4a29"></div>
<div class="output_subarea output_javascript ">
<script type="text/javascript">
var element = $('#5fcb6402-44d2-4bc2-8048-90cf387f4a29');

(function(root) {
  function now() {
    return new Date();
  }

  var force = true;

  if (typeof (root._bokeh_onload_callbacks) === "undefined" || force === true) {
    root._bokeh_onload_callbacks = [];
    root._bokeh_is_loading = undefined;
  }

  var JS_MIME_TYPE = 'application/javascript';
  var HTML_MIME_TYPE = 'text/html';
  var EXEC_MIME_TYPE = 'application/vnd.bokehjs_exec.v0+json';
  var CLASS_NAME = 'output_bokeh rendered_html';

  /**
   * Render data to the DOM node
   */
  function render(props, node) {
    var script = document.createElement("script");
    node.appendChild(script);
  }

  /**
   * Handle when an output is cleared or removed
   */
  function handleClearOutput(event, handle) {
    var cell = handle.cell;

    var id = cell.output_area._bokeh_element_id;
    var server_id = cell.output_area._bokeh_server_id;
    // Clean up Bokeh references
    if (id != null && id in Bokeh.index) {
      Bokeh.index[id].model.document.clear();
      delete Bokeh.index[id];
    }

    if (server_id !== undefined) {
      // Clean up Bokeh references
      var cmd = "from bokeh.io.state import curstate; print(curstate().uuid_to_server['" + server_id + "'].get_sessions()[0].document.roots[0]._id)";
      cell.notebook.kernel.execute(cmd, {
        iopub: {
          output: function(msg) {
            var id = msg.content.text.trim();
            if (id in Bokeh.index) {
              Bokeh.index[id].model.document.clear();
              delete Bokeh.index[id];
            }
          }
        }
      });
      // Destroy server and session
      var cmd = "import bokeh.io.notebook as ion; ion.destroy_server('" + server_id + "')";
      cell.notebook.kernel.execute(cmd);
    }
  }

  /**
   * Handle when a new output is added
   */
  function handleAddOutput(event, handle) {
    var output_area = handle.output_area;
    var output = handle.output;

    // limit handleAddOutput to display_data with EXEC_MIME_TYPE content only
    if ((output.output_type != "display_data") || (!output.data.hasOwnProperty(EXEC_MIME_TYPE))) {
      return
    }

    var toinsert = output_area.element.find("." + CLASS_NAME.split(' ')[0]);

    if (output.metadata[EXEC_MIME_TYPE]["id"] !== undefined) {
      toinsert[toinsert.length - 1].firstChild.textContent = output.data[JS_MIME_TYPE];
      // store reference to embed id on output_area
      output_area._bokeh_element_id = output.metadata[EXEC_MIME_TYPE]["id"];
    }
    if (output.metadata[EXEC_MIME_TYPE]["server_id"] !== undefined) {
      var bk_div = document.createElement("div");
      bk_div.innerHTML = output.data[HTML_MIME_TYPE];
      var script_attrs = bk_div.children[0].attributes;
      for (var i = 0; i < script_attrs.length; i++) {
        toinsert[toinsert.length - 1].firstChild.setAttribute(script_attrs[i].name, script_attrs[i].value);
      }
      // store reference to server id on output_area
      output_area._bokeh_server_id = output.metadata[EXEC_MIME_TYPE]["server_id"];
    }
  }

  function register_renderer(events, OutputArea) {

    function append_mime(data, metadata, element) {
      // create a DOM node to render to
      var toinsert = this.create_output_subarea(
        metadata,
        CLASS_NAME,
        EXEC_MIME_TYPE
      );
      this.keyboard_manager.register_events(toinsert);
      // Render to node
      var props = {data: data, metadata: metadata[EXEC_MIME_TYPE]};
      render(props, toinsert[toinsert.length - 1]);
      element.append(toinsert);
      return toinsert
    }

    /* Handle when an output is cleared or removed */
    events.on('clear_output.CodeCell', handleClearOutput);
    events.on('delete.Cell', handleClearOutput);

    /* Handle when a new output is added */
    events.on('output_added.OutputArea', handleAddOutput);

    /**
     * Register the mime type and append_mime function with output_area
     */
    OutputArea.prototype.register_mime_type(EXEC_MIME_TYPE, append_mime, {
      /* Is output safe? */
      safe: true,
      /* Index of renderer in `output_area.display_order` */
      index: 0
    });
  }

  // register the mime type if in Jupyter Notebook environment and previously unregistered
  if (root.Jupyter !== undefined) {
    var events = require('base/js/events');
    var OutputArea = require('notebook/js/outputarea').OutputArea;

    if (OutputArea.prototype.mime_types().indexOf(EXEC_MIME_TYPE) == -1) {
      register_renderer(events, OutputArea);
    }
  }

  
  if (typeof (root._bokeh_timeout) === "undefined" || force === true) {
    root._bokeh_timeout = Date.now() + 5000;
    root._bokeh_failed_load = false;
  }

  var NB_LOAD_WARNING = {'data': {'text/html':
     "<div style='background-color: #fdd'>\n"+
     "<p>\n"+
     "BokehJS does not appear to have successfully loaded. If loading BokehJS from CDN, this \n"+
     "may be due to a slow or bad network connection. Possible fixes:\n"+
     "</p>\n"+
     "<ul>\n"+
     "<li>re-rerun `output_notebook()` to attempt to load from CDN again, or</li>\n"+
     "<li>use INLINE resources instead, as so:</li>\n"+
     "</ul>\n"+
     "<code>\n"+
     "from bokeh.resources import INLINE\n"+
     "output_notebook(resources=INLINE)\n"+
     "</code>\n"+
     "</div>"}};

  function display_loaded() {
    var el = document.getElementById("11471");
    if (el != null) {
      el.textContent = "BokehJS is loading...";
    }
    if (root.Bokeh !== undefined) {
      if (el != null) {
        el.textContent = "BokehJS " + root.Bokeh.version + " successfully loaded.";
      }
    } else if (Date.now() < root._bokeh_timeout) {
      setTimeout(display_loaded, 100)
    }
  }


  function run_callbacks() {
    try {
      root._bokeh_onload_callbacks.forEach(function(callback) { callback() });
    }
    finally {
      delete root._bokeh_onload_callbacks
    }
    console.info("Bokeh: all callbacks have finished");
  }

  function load_libs(js_urls, callback) {
    root._bokeh_onload_callbacks.push(callback);
    if (root._bokeh_is_loading > 0) {
      console.log("Bokeh: BokehJS is being loaded, scheduling callback at", now());
      return null;
    }
    if (js_urls == null || js_urls.length === 0) {
      run_callbacks();
      return null;
    }
    console.log("Bokeh: BokehJS not loaded, scheduling load and callback at", now());
    root._bokeh_is_loading = js_urls.length;
    for (var i = 0; i < js_urls.length; i++) {
      var url = js_urls[i];
      var s = document.createElement('script');
      s.src = url;
      s.async = false;
      s.onreadystatechange = s.onload = function() {
        root._bokeh_is_loading--;
        if (root._bokeh_is_loading === 0) {
          console.log("Bokeh: all BokehJS libraries loaded");
          run_callbacks()
        }
      };
      s.onerror = function() {
        console.warn("failed to load library " + url);
      };
      console.log("Bokeh: injecting script tag for BokehJS library: ", url);
      document.getElementsByTagName("head")[0].appendChild(s);
    }
  };var element = document.getElementById("11471");
  if (element == null) {
    console.log("Bokeh: ERROR: autoload.js configured with elementid '11471' but no matching script tag was found. ")
    return false;
  }

  var js_urls = ["https://cdn.pydata.org/bokeh/release/bokeh-1.0.4.min.js", "https://cdn.pydata.org/bokeh/release/bokeh-widgets-1.0.4.min.js", "https://cdn.pydata.org/bokeh/release/bokeh-tables-1.0.4.min.js", "https://cdn.pydata.org/bokeh/release/bokeh-gl-1.0.4.min.js"];

  var inline_js = [
    function(Bokeh) {
      Bokeh.set_log_level("info");
    },
    
    function(Bokeh) {
      
    },
    function(Bokeh) {
      console.log("Bokeh: injecting CSS: https://cdn.pydata.org/bokeh/release/bokeh-1.0.4.min.css");
      Bokeh.embed.inject_css("https://cdn.pydata.org/bokeh/release/bokeh-1.0.4.min.css");
      console.log("Bokeh: injecting CSS: https://cdn.pydata.org/bokeh/release/bokeh-widgets-1.0.4.min.css");
      Bokeh.embed.inject_css("https://cdn.pydata.org/bokeh/release/bokeh-widgets-1.0.4.min.css");
      console.log("Bokeh: injecting CSS: https://cdn.pydata.org/bokeh/release/bokeh-tables-1.0.4.min.css");
      Bokeh.embed.inject_css("https://cdn.pydata.org/bokeh/release/bokeh-tables-1.0.4.min.css");
    }
  ];

  function run_inline_js() {
    
    if ((root.Bokeh !== undefined) || (force === true)) {
      for (var i = 0; i < inline_js.length; i++) {
        inline_js[i].call(root, root.Bokeh);
      }if (force === true) {
        display_loaded();
      }} else if (Date.now() < root._bokeh_timeout) {
      setTimeout(run_inline_js, 100);
    } else if (!root._bokeh_failed_load) {
      console.log("Bokeh: BokehJS failed to load within specified timeout.");
      root._bokeh_failed_load = true;
    } else if (force !== true) {
      var cell = $(document.getElementById("11471")).parents('.cell').data().cell;
      cell.output_area.append_execute_result(NB_LOAD_WARNING)
    }

  }

  if (root._bokeh_is_loading === 0) {
    console.log("Bokeh: BokehJS loaded, going straight to plotting");
    run_inline_js();
  } else {
    load_libs(js_urls, function() {
      console.log("Bokeh: BokehJS plotting callback run at", now());
      run_inline_js();
    });
  }
}(window));
</script>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">






  <div class="bk-root" id="dc4af55d-bf59-4475-9316-c431c7127be8" data-root-id="11473"></div>

</div>

</div>

<div class="output_area">

    <div class="prompt"></div>





<div id="e1a32782-8163-4f69-9cb7-3009a9f90d29"></div>
<div class="output_subarea output_javascript ">
<script type="text/javascript">
var element = $('#e1a32782-8163-4f69-9cb7-3009a9f90d29');
(function(root) {
  function embed_document(root) {
    
  var docs_json = {"8f8713a2-7961-4097-8fa2-c05c60dadc8d":{"roots":{"references":[{"attributes":{"below":[{"id":"11483","type":"LinearAxis"}],"left":[{"id":"11488","type":"LinearAxis"}],"renderers":[{"id":"11483","type":"LinearAxis"},{"id":"11487","type":"Grid"},{"id":"11488","type":"LinearAxis"},{"id":"11492","type":"Grid"},{"id":"11501","type":"BoxAnnotation"},{"id":"11519","type":"Legend"},{"id":"11511","type":"GlyphRenderer"},{"id":"11524","type":"GlyphRenderer"},{"id":"11537","type":"GlyphRenderer"},{"id":"11553","type":"GlyphRenderer"},{"id":"11570","type":"GlyphRenderer"},{"id":"11590","type":"GlyphRenderer"},{"id":"11611","type":"GlyphRenderer"},{"id":"11635","type":"GlyphRenderer"},{"id":"11660","type":"GlyphRenderer"},{"id":"11688","type":"GlyphRenderer"}],"title":{"id":"11472","type":"Title"},"toolbar":{"id":"11499","type":"Toolbar"},"x_range":{"id":"11475","type":"DataRange1d"},"x_scale":{"id":"11479","type":"LinearScale"},"y_range":{"id":"11477","type":"DataRange1d"},"y_scale":{"id":"11481","type":"LinearScale"}},"id":"11473","subtype":"Figure","type":"Plot"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"9ihcj8IlVkAAAAAAAKBWQDMzMzMzI1ZAUrgehesBVkDD9ShcjyJWQFK4HoXrYVZAmpmZmZl5VkB7FK5H4VpWQKRwPQrXc1ZArkfhehR+VkDD9Shcj3JWQKRwPQrXM1ZA4XoUrkeRVkAfhetRuH5WQPYoXI/ClVZAexSuR+F6VkDD9Shcj4JWQOF6FK5HkVZA16NwPQpnVkBmZmZmZmZWQOxRuB6FO1ZAcT0K16MgVkA9CtejcF1WQFyPwvUofFZAZmZmZma2VkApXI/C9WhWQPRfITikZVZATi7BHaFfVkBk4FGjzWNWQHtME7o5aVZAeetaBLhlVkA=","dtype":"float64","shape":[31]}},"selected":{"id":"11548","type":"Selection"},"selection_policy":{"id":"11547","type":"UnionRenderers"}},"id":"11521","type":"ColumnDataSource"},{"attributes":{"source":{"id":"11587","type":"ColumnDataSource"}},"id":"11591","type":"CDSView"},{"attributes":{"axis_label":"Year","axis_label_text_font_size":{"value":"12pt"},"formatter":{"id":"11515","type":"BasicTickFormatter"},"plot":{"id":"11473","subtype":"Figure","type":"Plot"},"ticker":{"id":"11484","type":"BasicTicker"}},"id":"11483","type":"LinearAxis"},{"attributes":{"plot":{"id":"11473","subtype":"Figure","type":"Plot"},"ticker":{"id":"11484","type":"BasicTicker"}},"id":"11487","type":"Grid"},{"attributes":{"callback":null},"id":"11477","type":"DataRange1d"},{"attributes":{},"id":"11565","type":"UnionRenderers"},{"attributes":{"axis_label":"Overall Score","axis_label_text_font_size":{"value":"12pt"},"formatter":{"id":"11517","type":"BasicTickFormatter"},"plot":{"id":"11473","subtype":"Figure","type":"Plot"},"ticker":{"id":"11489","type":"BasicTicker"}},"id":"11488","type":"LinearAxis"},{"attributes":{"source":{"id":"11657","type":"ColumnDataSource"}},"id":"11661","type":"CDSView"},{"attributes":{"x":{"field":"x"},"y":{"field":"y"}},"id":"11609","type":"Line"},{"attributes":{},"id":"11566","type":"Selection"},{"attributes":{},"id":"11484","type":"BasicTicker"},{"attributes":{"overlay":{"id":"11501","type":"BoxAnnotation"}},"id":"11495","type":"BoxZoomTool"},{"attributes":{"callback":null},"id":"11475","type":"DataRange1d"},{"attributes":{"label":{"value":"Ireland"},"renderers":[{"id":"11660","type":"GlyphRenderer"},{"id":"11688","type":"GlyphRenderer"}]},"id":"11684","type":"LegendItem"},{"attributes":{},"id":"11481","type":"LinearScale"},{"attributes":{"source":{"id":"11550","type":"ColumnDataSource"}},"id":"11554","type":"CDSView"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"UrgehesxU0BmZmZmZqZTQBSuR+F6xFNASOF6FK7HU0DhehSuRzFTQFK4HoXrAVNApHA9CtfTU0AAAAAAAMBTQFK4HoXr4VNAH4XrUbjeU0BmZmZmZsZTQLgehetRiFNAH4XrUbjeU0Bcj8L1KNxTQBSuR+F6RFRA16NwPQpXVEAK16NwPRpUQMP1KFyPElRAj8L1KFw/VEBSuB6F60FUQHsUrkfhelRAhetRuB5VVEAzMzMzM0NUQGZmZmZmVlRAhsoOU5fjU0DhwTxR//BTQCthMZue5VNAyH+5L8vsU0BsmBt31uhTQDz3XfLf4VNA","dtype":"float64","shape":[30]}},"selected":{"id":"11656","type":"Selection"},"selection_policy":{"id":"11655","type":"UnionRenderers"}},"id":"11608","type":"ColumnDataSource"},{"attributes":{"fill_color":{"value":"red"},"line_color":{"value":"red"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11522","type":"Circle"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11589","type":"Circle"},{"attributes":{"data_source":{"id":"11632","type":"ColumnDataSource"},"glyph":{"id":"11633","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11634","type":"Circle"},"selection_glyph":null,"view":{"id":"11636","type":"CDSView"}},"id":"11635","type":"GlyphRenderer"},{"attributes":{},"id":"11479","type":"LinearScale"},{"attributes":{},"id":"11496","type":"SaveTool"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"11569","type":"Line"},{"attributes":{},"id":"11713","type":"Selection"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"11610","type":"Line"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"11501","type":"BoxAnnotation"},{"attributes":{},"id":"11489","type":"BasicTicker"},{"attributes":{},"id":"11498","type":"HelpTool"},{"attributes":{"label":{"value":"Singapore"},"renderers":[{"id":"11537","type":"GlyphRenderer"},{"id":"11553","type":"GlyphRenderer"}]},"id":"11549","type":"LegendItem"},{"attributes":{"label":{"value":"Hong Kong"},"renderers":[{"id":"11511","type":"GlyphRenderer"},{"id":"11524","type":"GlyphRenderer"}]},"id":"11520","type":"LegendItem"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"11659","type":"Line"},{"attributes":{},"id":"11494","type":"WheelZoomTool"},{"attributes":{"active_drag":"auto","active_inspect":"auto","active_multi":null,"active_scroll":"auto","active_tap":"auto","tools":[{"id":"11493","type":"PanTool"},{"id":"11494","type":"WheelZoomTool"},{"id":"11495","type":"BoxZoomTool"},{"id":"11496","type":"SaveTool"},{"id":"11497","type":"ResetTool"},{"id":"11498","type":"HelpTool"}]},"id":"11499","type":"Toolbar"},{"attributes":{},"id":"11497","type":"ResetTool"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11523","type":"Circle"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"9ihcj8KVVUDD9Shcj6JVQEjhehSu11VArkfhehS+VUBcj8L1KLxVQArXo3A96lVApHA9CtfzVUC4HoXrUdhVQOxRuB6FC1ZAuB6F61E4VkDsUbgehetVQAAAAAAAwFVAMzMzMzODVUCuR+F6FI5VQHE9CtejgFVAFK5H4Xo0VUBmZmZmZoZVQHE9CtejwFVAmpmZmZnpVUDNzMzMzCxWQGZmZmZmJlZAj8L1KFzfVUDXo3A9CjdWQDMzMzMzQ1ZAKVyPwvV4VkCIiIiIiNhVQI/wCI/w2FVAeznGHcXUVUDWo/wJtddVQOQimGyJ1FVABHUE0wPaVUA=","dtype":"float64","shape":[31]}},"selected":{"id":"11566","type":"Selection"},"selection_policy":{"id":"11565","type":"UnionRenderers"}},"id":"11534","type":"ColumnDataSource"},{"attributes":{},"id":"11607","type":"Selection"},{"attributes":{"data_source":{"id":"11521","type":"ColumnDataSource"},"glyph":{"id":"11522","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11523","type":"Circle"},"selection_glyph":null,"view":{"id":"11525","type":"CDSView"}},"id":"11524","type":"GlyphRenderer"},{"attributes":{"align":"center","plot":null,"text":"Countries Overall Score By Year"},"id":"11472","type":"Title"},{"attributes":{},"id":"11493","type":"PanTool"},{"attributes":{"dimension":1,"plot":{"id":"11473","subtype":"Figure","type":"Plot"},"ticker":{"id":"11489","type":"BasicTicker"}},"id":"11492","type":"Grid"},{"attributes":{},"id":"11606","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"11587","type":"ColumnDataSource"},"glyph":{"id":"11588","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11589","type":"Circle"},"selection_glyph":null,"view":{"id":"11591","type":"CDSView"}},"id":"11590","type":"GlyphRenderer"},{"attributes":{"fill_color":{"value":"black"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11633","type":"Circle"},{"attributes":{},"id":"11712","type":"UnionRenderers"},{"attributes":{"source":{"id":"11534","type":"ColumnDataSource"}},"id":"11538","type":"CDSView"},{"attributes":{"fill_color":{"value":"green"},"line_color":{"value":"green"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11551","type":"Circle"},{"attributes":{"line_color":"blue","x":{"field":"x"},"y":{"field":"y"}},"id":"11658","type":"Line"},{"attributes":{},"id":"11533","type":"Selection"},{"attributes":{"label":{"value":"New Zealand"},"renderers":[{"id":"11570","type":"GlyphRenderer"},{"id":"11590","type":"GlyphRenderer"}]},"id":"11586","type":"LegendItem"},{"attributes":{"data_source":{"id":"11534","type":"ColumnDataSource"},"glyph":{"id":"11535","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11536","type":"Line"},"selection_glyph":null,"view":{"id":"11538","type":"CDSView"}},"id":"11537","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"11550","type":"ColumnDataSource"},"glyph":{"id":"11551","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11552","type":"Circle"},"selection_glyph":null,"view":{"id":"11554","type":"CDSView"}},"id":"11553","type":"GlyphRenderer"},{"attributes":{},"id":"11655","type":"UnionRenderers"},{"attributes":{},"id":"12175","type":"Selection"},{"attributes":{"label":{"value":"Switzerland"},"renderers":[{"id":"11611","type":"GlyphRenderer"},{"id":"11635","type":"GlyphRenderer"}]},"id":"11631","type":"LegendItem"},{"attributes":{},"id":"12174","type":"UnionRenderers"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11634","type":"Circle"},{"attributes":{"line_color":"red","x":{"field":"x"},"y":{"field":"y"}},"id":"11509","type":"Line"},{"attributes":{"source":{"id":"11632","type":"ColumnDataSource"}},"id":"11636","type":"CDSView"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"11510","type":"Line"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"9ihcj8KVVUDD9Shcj6JVQEjhehSu11VArkfhehS+VUBcj8L1KLxVQArXo3A96lVApHA9CtfzVUC4HoXrUdhVQOxRuB6FC1ZAuB6F61E4VkDsUbgehetVQAAAAAAAwFVAMzMzMzODVUCuR+F6FI5VQHE9CtejgFVAFK5H4Xo0VUBmZmZmZoZVQHE9CtejwFVAmpmZmZnpVUDNzMzMzCxWQGZmZmZmJlZAj8L1KFzfVUDXo3A9CjdWQDMzMzMzQ1ZAKVyPwvV4VkCIiIiIiNhVQI/wCI/w2FVAeznGHcXUVUDWo/wJtddVQOQimGyJ1FVABHUE0wPaVUA=","dtype":"float64","shape":[31]}},"selected":{"id":"11585","type":"Selection"},"selection_policy":{"id":"11584","type":"UnionRenderers"}},"id":"11550","type":"ColumnDataSource"},{"attributes":{"source":{"id":"11521","type":"ColumnDataSource"}},"id":"11525","type":"CDSView"},{"attributes":{"source":{"id":"11608","type":"ColumnDataSource"}},"id":"11612","type":"CDSView"},{"attributes":{"data_source":{"id":"11608","type":"ColumnDataSource"},"glyph":{"id":"11609","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11610","type":"Line"},"selection_glyph":null,"view":{"id":"11612","type":"CDSView"}},"id":"11611","type":"GlyphRenderer"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"9ihcj8IlVkAAAAAAAKBWQDMzMzMzI1ZAUrgehesBVkDD9ShcjyJWQFK4HoXrYVZAmpmZmZl5VkB7FK5H4VpWQKRwPQrXc1ZArkfhehR+VkDD9Shcj3JWQKRwPQrXM1ZA4XoUrkeRVkAfhetRuH5WQPYoXI/ClVZAexSuR+F6VkDD9Shcj4JWQOF6FK5HkVZA16NwPQpnVkBmZmZmZmZWQOxRuB6FO1ZAcT0K16MgVkA9CtejcF1WQFyPwvUofFZAZmZmZma2VkApXI/C9WhWQPRfITikZVZATi7BHaFfVkBk4FGjzWNWQHtME7o5aVZAeetaBLhlVkA=","dtype":"float64","shape":[31]}},"selected":{"id":"11533","type":"Selection"},"selection_policy":{"id":"11532","type":"UnionRenderers"}},"id":"11508","type":"ColumnDataSource"},{"attributes":{"fill_color":{"value":"blue"},"line_color":{"value":"blue"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11686","type":"Circle"},{"attributes":{},"id":"11515","type":"BasicTickFormatter"},{"attributes":{"source":{"id":"11567","type":"ColumnDataSource"}},"id":"11571","type":"CDSView"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","x":{"field":"x"},"y":{"field":"y"}},"id":"11536","type":"Line"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"UrgehesxU0BmZmZmZqZTQBSuR+F6xFNASOF6FK7HU0DhehSuRzFTQFK4HoXrAVNApHA9CtfTU0AAAAAAAMBTQFK4HoXr4VNAH4XrUbjeU0BmZmZmZsZTQLgehetRiFNAH4XrUbjeU0Bcj8L1KNxTQBSuR+F6RFRA16NwPQpXVEAK16NwPRpUQMP1KFyPElRAj8L1KFw/VEBSuB6F60FUQHsUrkfhelRAhetRuB5VVEAzMzMzM0NUQGZmZmZmVlRAhsoOU5fjU0DhwTxR//BTQCthMZue5VNAyH+5L8vsU0BsmBt31uhTQDz3XfLf4VNA","dtype":"float64","shape":[30]}},"selected":{"id":"11683","type":"Selection"},"selection_policy":{"id":"11682","type":"UnionRenderers"}},"id":"11632","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"11567","type":"ColumnDataSource"},"glyph":{"id":"11568","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11569","type":"Line"},"selection_glyph":null,"view":{"id":"11571","type":"CDSView"}},"id":"11570","type":"GlyphRenderer"},{"attributes":{"source":{"id":"11685","type":"ColumnDataSource"}},"id":"11689","type":"CDSView"},{"attributes":{},"id":"11682","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"11685","type":"ColumnDataSource"},"glyph":{"id":"11686","type":"Circle"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11687","type":"Circle"},"selection_glyph":null,"view":{"id":"11689","type":"CDSView"}},"id":"11688","type":"GlyphRenderer"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"4XoUrkchUUAAAAAAACBRQKRwPQrXI1JA4XoUrkdxUkApXI/C9ahSQIXrUbgeBVNAzczMzMxMVECuR+F6FB5UQHsUrkfhOlRAhetRuB4VVECkcD0K10NUQFyPwvUonFRAFK5H4Xq0VEApXI/C9ahUQFyPwvUonFRAMzMzMzNjVEAUrkfherRTQFK4HoXrMVNAuB6F61HoUkBmZmZmZvZSQOxRuB6FK1NAhetRuB51U0AzMzMzM6NTQClcj8L1OFRACtejcD1aVEA8KxoJ+JZTQHZ1aJiXmlNA81bdWpCMU0B54NlEO5RTQIVfdacPfVNA5E6ViuWCU0A=","dtype":"float64","shape":[31]}},"selected":{"id":"12175","type":"Selection"},"selection_policy":{"id":"12174","type":"UnionRenderers"}},"id":"11685","type":"ColumnDataSource"},{"attributes":{"background_fill_alpha":{"value":0.6},"background_fill_color":{"value":"gray"},"items":[{"id":"11520","type":"LegendItem"},{"id":"11549","type":"LegendItem"},{"id":"11586","type":"LegendItem"},{"id":"11631","type":"LegendItem"},{"id":"11684","type":"LegendItem"}],"location":"bottom_right","plot":{"id":"11473","subtype":"Figure","type":"Plot"}},"id":"11519","type":"Legend"},{"attributes":{"line_color":"purple","x":{"field":"x"},"y":{"field":"y"}},"id":"11568","type":"Line"},{"attributes":{"data_source":{"id":"11508","type":"ColumnDataSource"},"glyph":{"id":"11509","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11510","type":"Line"},"selection_glyph":null,"view":{"id":"11512","type":"CDSView"}},"id":"11511","type":"GlyphRenderer"},{"attributes":{},"id":"11630","type":"Selection"},{"attributes":{"source":{"id":"11508","type":"ColumnDataSource"}},"id":"11512","type":"CDSView"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"KVyPwvWIU0D2KFyPwsVTQFyPwvUozFNAXI/C9ShsVECamZmZmTlUQClcj8L1SFRAexSuR+EqVEBI4XoUrkdUQAAAAAAAYFRAzczMzMxcVEB7FK5H4TpUQLgehetRGFRAcT0K16PwU0CuR+F6FE5UQJqZmZmZWVRACtejcD1qVEDXo3A9CldUQNejcD0KJ1RAw/UoXI8SVEApXI/C9UhUQLgehetRSFRAuB6F61FoVEApXI/C9ZhUQPYoXI/CtVRArIlnRSMxVECwcmiR7ThUQJ8Q8tXgN1RAeH6As8c4VEAUYjJg0zRUQNR4niHqNFRA","dtype":"float64","shape":[30]}},"selected":{"id":"11607","type":"Selection"},"selection_policy":{"id":"11606","type":"UnionRenderers"}},"id":"11567","type":"ColumnDataSource"},{"attributes":{},"id":"11547","type":"UnionRenderers"},{"attributes":{},"id":"11548","type":"Selection"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11552","type":"Circle"},{"attributes":{"fill_color":{"value":"purple"},"line_color":{"value":"purple"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11588","type":"Circle"},{"attributes":{},"id":"11517","type":"BasicTickFormatter"},{"attributes":{},"id":"11584","type":"UnionRenderers"},{"attributes":{"data_source":{"id":"11657","type":"ColumnDataSource"},"glyph":{"id":"11658","type":"Line"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"11659","type":"Line"},"selection_glyph":null,"view":{"id":"11661","type":"CDSView"}},"id":"11660","type":"GlyphRenderer"},{"attributes":{},"id":"11532","type":"UnionRenderers"},{"attributes":{"line_color":"green","x":{"field":"x"},"y":{"field":"y"}},"id":"11535","type":"Line"},{"attributes":{},"id":"11683","type":"Selection"},{"attributes":{},"id":"11629","type":"UnionRenderers"},{"attributes":{"callback":null,"data":{"x":[1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"4XoUrkchUUAAAAAAACBRQKRwPQrXI1JA4XoUrkdxUkApXI/C9ahSQIXrUbgeBVNAzczMzMxMVECuR+F6FB5UQHsUrkfhOlRAhetRuB4VVECkcD0K10NUQFyPwvUonFRAFK5H4Xq0VEApXI/C9ahUQFyPwvUonFRAMzMzMzNjVEAUrkfherRTQFK4HoXrMVNAuB6F61HoUkBmZmZmZvZSQOxRuB6FK1NAhetRuB51U0AzMzMzM6NTQClcj8L1OFRACtejcD1aVEA8KxoJ+JZTQHZ1aJiXmlNA81bdWpCMU0B54NlEO5RTQIVfdacPfVNA5E6ViuWCU0A=","dtype":"float64","shape":[31]}},"selected":{"id":"11713","type":"Selection"},"selection_policy":{"id":"11712","type":"UnionRenderers"}},"id":"11657","type":"ColumnDataSource"},{"attributes":{},"id":"11656","type":"Selection"},{"attributes":{"callback":null,"data":{"x":[1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025],"y":{"__ndarray__":"KVyPwvWIU0D2KFyPwsVTQFyPwvUozFNAXI/C9ShsVECamZmZmTlUQClcj8L1SFRAexSuR+EqVEBI4XoUrkdUQAAAAAAAYFRAzczMzMxcVEB7FK5H4TpUQLgehetRGFRAcT0K16PwU0CuR+F6FE5UQJqZmZmZWVRACtejcD1qVEDXo3A9CldUQNejcD0KJ1RAw/UoXI8SVEApXI/C9UhUQLgehetRSFRAuB6F61FoVEApXI/C9ZhUQPYoXI/CtVRArIlnRSMxVECwcmiR7ThUQJ8Q8tXgN1RAeH6As8c4VEAUYjJg0zRUQNR4niHqNFRA","dtype":"float64","shape":[30]}},"selected":{"id":"11630","type":"Selection"},"selection_policy":{"id":"11629","type":"UnionRenderers"}},"id":"11587","type":"ColumnDataSource"},{"attributes":{},"id":"11585","type":"Selection"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"11687","type":"Circle"}],"root_ids":["11473"]},"title":"Bokeh Application","version":"1.0.4"}};
  var render_items = [{"docid":"8f8713a2-7961-4097-8fa2-c05c60dadc8d","roots":{"11473":"dc4af55d-bf59-4475-9316-c431c7127be8"}}];
  root.Bokeh.embed.embed_items_notebook(docs_json, render_items);

  }
  if (root.Bokeh !== undefined) {
    embed_document(root);
  } else {
    var attempts = 0;
    var timer = setInterval(function(root) {
      if (root.Bokeh !== undefined) {
        embed_document(root);
        clearInterval(timer);
      }
      attempts++;
      if (attempts > 100) {
        console.log("Bokeh: ERROR: Unable to run BokehJS code because BokehJS library is missing");
        clearInterval(timer);
      }
    }, 10, root)
  }
})(window);
</script>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<hr>
<p>So this last part is just a test of other classifiers. I found the list of classifers on a Stack Overflow page which is cited down below.</p>
<p>None of these worked, which is why we tucked them at the end of the project.</p>
<p>We can see that this list of classifiesrs is not that great at predicting this data either. We decided to simply use linear regression as it had the best error and usability for this project.</p>
<p>(source found here: <a href="https://stackoverflow.com/questions/41925157/logisticregression-unknown-label-type-continuous-using-sklearn-in-python">https://stackoverflow.com/questions/41925157/logisticregression-unknown-label-type-continuous-using-sklearn-in-python</a>)</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[0]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">list</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">x</span><span class="o">=</span><span class="n">Albania_data</span>
<span class="n">classifiers</span> <span class="o">=</span> <span class="p">[</span>
    <span class="n">linear_model</span><span class="o">.</span><span class="n">SGDRegressor</span><span class="p">(),</span>
    <span class="n">linear_model</span><span class="o">.</span><span class="n">BayesianRidge</span><span class="p">(),</span>
    <span class="n">linear_model</span><span class="o">.</span><span class="n">LassoLars</span><span class="p">(),</span>
    <span class="n">linear_model</span><span class="o">.</span><span class="n">ARDRegression</span><span class="p">(),</span>
    <span class="n">linear_model</span><span class="o">.</span><span class="n">PassiveAggressiveRegressor</span><span class="p">(),</span>
    <span class="n">linear_model</span><span class="o">.</span><span class="n">TheilSenRegressor</span><span class="p">()]</span>
<span class="k">for</span> <span class="n">item</span> <span class="ow">in</span> <span class="n">classifiers</span><span class="p">:</span>
  <span class="n">z</span> <span class="o">=</span> <span class="n">x</span><span class="p">[[</span><span class="s2">&quot;index_year&quot;</span><span class="p">]]</span>
  <span class="n">y</span> <span class="o">=</span> <span class="n">x</span><span class="p">[[</span><span class="s2">&quot;adjusted_score&quot;</span><span class="p">]]</span>
  <span class="n">clf</span> <span class="o">=</span> <span class="n">item</span>
  <span class="k">for</span> <span class="n">col</span><span class="p">,</span> <span class="n">row</span> <span class="ow">in</span> <span class="n">c</span><span class="o">.</span><span class="n">iteritems</span><span class="p">():</span>
    <span class="k">if</span> <span class="n">col</span> <span class="ow">in</span> <span class="p">[</span><span class="s2">&quot;property_rights&quot;</span><span class="p">,</span>	<span class="s2">&quot;government_integrity&quot;</span><span class="p">,</span>	<span class="s2">&quot;tax_burden&quot;</span><span class="p">,</span>
             <span class="s2">&quot;government_spending&quot;</span><span class="p">,</span>	<span class="s2">&quot;business_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;monetary_freedom&quot;</span><span class="p">,</span>	
             <span class="s2">&quot;trade_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;investment_freedom&quot;</span><span class="p">,</span>	<span class="s2">&quot;financial_freedom&quot;</span><span class="p">]:</span>
      <span class="n">x</span><span class="o">=</span><span class="n">c</span><span class="p">[[</span><span class="s1">&#39;index_country&#39;</span><span class="p">]]</span>
      <span class="n">y</span> <span class="o">=</span> <span class="n">c</span><span class="p">[[</span><span class="n">col</span><span class="p">]]</span>
      <span class="n">xTrain</span><span class="p">,</span> <span class="n">xTest</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">,</span> <span class="n">yTest</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">test_size</span> <span class="o">=</span> <span class="mi">1</span><span class="o">/</span><span class="mi">3</span><span class="p">,</span> <span class="n">random_state</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span>
      <span class="n">clf</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">xTrain</span><span class="p">,</span> <span class="n">yTrain</span><span class="p">)</span>
      <span class="nb">list</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">clf</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">y</span><span class="p">))</span>
      <span class="c1">#eval</span>
      <span class="n">rmse</span> <span class="o">=</span> <span class="n">mean_squared_error</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
      <span class="n">r2</span> <span class="o">=</span> <span class="n">r2_score</span><span class="p">(</span><span class="n">y</span><span class="p">,</span> <span class="n">y_predicted</span><span class="p">)</span>
      <span class="nb">print</span><span class="p">(</span><span class="s2">&quot;rmse&quot;</span><span class="p">,</span><span class="n">rmse</span><span class="p">,</span><span class="s2">&quot;r2&quot;</span><span class="p">,</span><span class="n">r2</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>rmse 105.99800448000008 r2 -0.2401990196533601
rmse 348.30343488000136 r2 -2.0723891396252165
rmse 2475.7714316799947 r2 -119.04452684513234
rmse 1238.9641228799962 r2 -13.901236254865188
rmse 1023.2136524799965 r2 -15.41985938933825
rmse 1687.899934079996 r2 -6.825082923351309
rmse 1474.191028479996 r2 -8.973531407708837
rmse 1079.7415356799963 r2 -145.7040129999995
rmse 774.2301756799977 r2 -2.070392511421311
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stderr output_text">
<pre>/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
/usr/local/lib/python3.6/dist-packages/sklearn/linear_model/stochastic_gradient.py:166: FutureWarning: max_iter and tol parameters have been added in SGDRegressor in 0.19. If both are left unset, they default to max_iter=5 and tol=None. If tol is not None, max_iter defaults to max_iter=1000. From 0.21, default max_iter will be 1000, and default tol will be 1e-3.
  FutureWarning)
/usr/local/lib/python3.6/dist-packages/sklearn/utils/validation.py:761: DataConversionWarning: A column-vector y was passed when a 1d array was expected. Please change the shape of y to (n_samples, ), for example using ravel().
  y = column_or_1d(y, warn=True)
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_text output_error">
<pre>
<span class="ansi-red-fg">---------------------------------------------------------------------------</span>
<span class="ansi-red-fg">KeyError</span>                                  Traceback (most recent call last)
<span class="ansi-green-fg">&lt;ipython-input-29-8260897815cd&gt;</span> in <span class="ansi-cyan-fg">&lt;module&gt;</span><span class="ansi-blue-fg">()</span>
<span class="ansi-green-intense-fg ansi-bold">      9</span>     linear_model.TheilSenRegressor()]
<span class="ansi-green-intense-fg ansi-bold">     10</span> <span class="ansi-green-fg">for</span> item <span class="ansi-green-fg">in</span> classifiers<span class="ansi-blue-fg">:</span>
<span class="ansi-green-fg">---&gt; 11</span><span class="ansi-red-fg">   </span>z <span class="ansi-blue-fg">=</span> x<span class="ansi-blue-fg">[</span><span class="ansi-blue-fg">[</span><span class="ansi-blue-fg">&#34;index_year&#34;</span><span class="ansi-blue-fg">]</span><span class="ansi-blue-fg">]</span>
<span class="ansi-green-intense-fg ansi-bold">     12</span>   y <span class="ansi-blue-fg">=</span> x<span class="ansi-blue-fg">[</span><span class="ansi-blue-fg">[</span><span class="ansi-blue-fg">&#34;adjusted_score&#34;</span><span class="ansi-blue-fg">]</span><span class="ansi-blue-fg">]</span>
<span class="ansi-green-intense-fg ansi-bold">     13</span>   clf <span class="ansi-blue-fg">=</span> item

<span class="ansi-green-fg">/usr/local/lib/python3.6/dist-packages/pandas/core/frame.py</span> in <span class="ansi-cyan-fg">__getitem__</span><span class="ansi-blue-fg">(self, key)</span>
<span class="ansi-green-intense-fg ansi-bold">   2932</span>                 key <span class="ansi-blue-fg">=</span> list<span class="ansi-blue-fg">(</span>key<span class="ansi-blue-fg">)</span>
<span class="ansi-green-intense-fg ansi-bold">   2933</span>             indexer = self.loc._convert_to_indexer(key, axis=1,
<span class="ansi-green-fg">-&gt; 2934</span><span class="ansi-red-fg">                                                    raise_missing=True)
</span><span class="ansi-green-intense-fg ansi-bold">   2935</span> 
<span class="ansi-green-intense-fg ansi-bold">   2936</span>         <span class="ansi-red-fg"># take() does not accept boolean indexers</span>

<span class="ansi-green-fg">/usr/local/lib/python3.6/dist-packages/pandas/core/indexing.py</span> in <span class="ansi-cyan-fg">_convert_to_indexer</span><span class="ansi-blue-fg">(self, obj, axis, is_setter, raise_missing)</span>
<span class="ansi-green-intense-fg ansi-bold">   1352</span>                 kwargs = {&#39;raise_missing&#39;: True if is_setter else
<span class="ansi-green-intense-fg ansi-bold">   1353</span>                           raise_missing}
<span class="ansi-green-fg">-&gt; 1354</span><span class="ansi-red-fg">                 </span><span class="ansi-green-fg">return</span> self<span class="ansi-blue-fg">.</span>_get_listlike_indexer<span class="ansi-blue-fg">(</span>obj<span class="ansi-blue-fg">,</span> axis<span class="ansi-blue-fg">,</span> <span class="ansi-blue-fg">**</span>kwargs<span class="ansi-blue-fg">)</span><span class="ansi-blue-fg">[</span><span class="ansi-cyan-fg">1</span><span class="ansi-blue-fg">]</span>
<span class="ansi-green-intense-fg ansi-bold">   1355</span>         <span class="ansi-green-fg">else</span><span class="ansi-blue-fg">:</span>
<span class="ansi-green-intense-fg ansi-bold">   1356</span>             <span class="ansi-green-fg">try</span><span class="ansi-blue-fg">:</span>

<span class="ansi-green-fg">/usr/local/lib/python3.6/dist-packages/pandas/core/indexing.py</span> in <span class="ansi-cyan-fg">_get_listlike_indexer</span><span class="ansi-blue-fg">(self, key, axis, raise_missing)</span>
<span class="ansi-green-intense-fg ansi-bold">   1159</span>         self._validate_read_indexer(keyarr, indexer,
<span class="ansi-green-intense-fg ansi-bold">   1160</span>                                     o<span class="ansi-blue-fg">.</span>_get_axis_number<span class="ansi-blue-fg">(</span>axis<span class="ansi-blue-fg">)</span><span class="ansi-blue-fg">,</span>
<span class="ansi-green-fg">-&gt; 1161</span><span class="ansi-red-fg">                                     raise_missing=raise_missing)
</span><span class="ansi-green-intense-fg ansi-bold">   1162</span>         <span class="ansi-green-fg">return</span> keyarr<span class="ansi-blue-fg">,</span> indexer
<span class="ansi-green-intense-fg ansi-bold">   1163</span> 

<span class="ansi-green-fg">/usr/local/lib/python3.6/dist-packages/pandas/core/indexing.py</span> in <span class="ansi-cyan-fg">_validate_read_indexer</span><span class="ansi-blue-fg">(self, key, indexer, axis, raise_missing)</span>
<span class="ansi-green-intense-fg ansi-bold">   1244</span>                 raise KeyError(
<span class="ansi-green-intense-fg ansi-bold">   1245</span>                     u&#34;None of [{key}] are in the [{axis}]&#34;.format(
<span class="ansi-green-fg">-&gt; 1246</span><span class="ansi-red-fg">                         key=key, axis=self.obj._get_axis_name(axis)))
</span><span class="ansi-green-intense-fg ansi-bold">   1247</span> 
<span class="ansi-green-intense-fg ansi-bold">   1248</span>             <span class="ansi-red-fg"># We (temporarily) allow for some missing keys with .loc, except in</span>

<span class="ansi-red-fg">KeyError</span>: &#34;None of [Index([&#39;index_year&#39;], dtype=&#39;object&#39;)] are in the [columns]&#34;</pre>
</div>
</div>

</div>
</div>

</div>
    </div>
  </div>
</body>

 


</html>
