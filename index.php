<?php
// Set the page name to default to "home"
$page = "home";

// Check if the page variable "id" is set, and set it to "page" if so
if (isset($_GET["id"])) {
	$page = $_GET["id"];
}

// Check if the page retrieved is valid, otherwise set to the homepage
if (!file_exists("$page.php")) {
	$page = "home";
}
?>
<html>
<head>
	<title>Platinumcoding.com</title>
	<link rel="stylesheet" href="style.css" />
	<script src="jscript.js"></script>
</head>
<body>
	
<div id="header-wrap">
	<div id="banner">
		<img src="Pictures/Platinumlearninglogo.png" alt="Platinum coding">
			<div id="signinbox">
				<form action="insert.php" method="post">
					<div class="cssmenu">
     					<ul>
							<li <? if ($page=="signup1") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=signup1">Sign up/Sign in</a></li>
						</ul>
					</div>		
				</form>
			</div>
	</div>
	<div class="cssmenu">
		<ul>
			<li <? if ($page=="home") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=home">Home</a></li>
			<li <? if ($page=="about") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=about">About</a></li>
			<li <? if ($page=="learn") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=learn">Learn</a></li>
			<li <? if ($page=="create") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=create">Create</a></li>
			<li <? if ($page=="contact") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=contact">Contact</a></li>
		</ul>
	</div>		
</div>
<div id="body-wrap">
	<div class="content"><? include ("$page.php"); ?></div>
</div>
    <!-- begin olark code --><script data-cfasync="false" type='text/javascript'>
	/*{literal}<![CDATA[*/
	window.olark || (function(c) {
		var f = window, d = document, l = f.location.protocol == "https:" ? "https:" : "http:", z = c.name, r = "load";
		var nt = function() {
			f[z] = function() {
				(a.s = a.s || []).push(arguments)
			};
			var a = f[z]._ = {}, q = c.methods.length;
			while (q--) {
				(function(n) {
					f[z][n] = function() {
						f[z]("call", n, arguments)
					}
				})(c.methods[q])
			}
			a.l = c.loader;
			a.i = nt;
			a.p = {
				0 : +new Date
			};
			a.P = function(u) {
				a.p[u] = new Date - a.p[0]
			};
			function s() {
				a.P(r);
				f[z](r)
			}
			f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
			var ld = function() {
				function p(hd) {
					hd = "head";
					return ["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
				}

				var i = "body", m = d[i];
				if (!m) {
					return setTimeout(ld, 100)
				}
				a.P(1);
				var j = "appendChild", h = "createElement", k = "src", n = d[h]("div"), v = n[j](d[h](z)), b = d[h]("iframe"), g = "document", e = "domain", o;
				n.style.display = "none";
				m.insertBefore(n, m.firstChild).id = z;
				b.frameBorder = "0";
				b.id = z + "-loader";
				if (/MSIE[ ]+6/.test(navigator.userAgent)) {
					b.src = "javascript:false"
				}
				b.allowTransparency = "true";
				v[j](b);
				try {
					b.contentWindow[g].open()
				} catch(w) {
					c[e] = d[e];
					o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
					b[k] = o + "void(0);"
				}
				try {
					var t = b.contentWindow[g];
					t.write(p());
					t.close()
				} catch(x) {
					b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
				}
				a.P(2)
			};
			ld()
		};
		nt()
	})({
		loader : "static.olark.com/jsclient/loader0.js",
		name : "olark",
		methods : ["configure", "extend", "declare", "identify"]
	});
	/* custom configuration goes here (www.olark.com/documentation) */
	olark.identify('9069-542-10-3772');
	/*]]>{/literal}*/
</script><noscript><a href="https://www.olark.com/site/9069-542-10-3772/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript><!-- end olark code -->
</body>
</html>