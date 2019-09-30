<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* top.html.twig */
class __TwigTemplate_20aa9862ef398b3b7be7ded416cfd717a92ecc98486e7fc88281972ca4228845 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tPhantom by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
\t<title>Phantom by HTML5 UP</title>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/assets/css/main.css\" />
\t<noscript>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/assets/css/noscript.css\" /></noscript>
</head>


<body class=\"is-preload\">
\t<!-- Wrapper -->
\t<div id=\"wrapper\">

\t\t<!-- Header -->
\t\t<header id=\"header\">
\t\t\t<div class=\"inner\">

\t\t\t\t<!-- Logo -->
\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\t<span class=\"symbol\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/logo.svg\" alt=\"\" /></span><span class=\"title\">Phantom</span>
\t\t\t\t</a>

\t\t\t\t<!-- Nav -->
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#menu\">Menu</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t</div>
\t\t</header>

\t\t<!-- Menu -->
\t\t<nav id=\"menu\">
\t\t\t<h2>Menu</h2>
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t<li><a href=\"generic.html\">Ipsum veroeros</a></li>
\t\t\t\t<li><a href=\"generic.html\">Tempus etiam</a></li>
\t\t\t\t<li><a href=\"generic.html\">Consequat dolor</a></li>
\t\t\t\t<li><a href=\"elements.html\">Elements</a></li>
\t\t\t</ul>
\t\t</nav>

\t\t<!-- Main -->
\t\t<div id=\"main\">
\t\t\t<div class=\"inner\">
\t\t\t\t<header>
\t\t\t\t\t<h1>This is Phantom, a free, fully responsive site<br />
\t\t\t\t\t\ttemplate designed by <a href=\"http://html5up.net\">HTML5 UP</a>.</h1>
\t\t\t\t\t<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
\t\t\t\t</header>
\t\t\t\t<section class=\"tiles\">
\t\t\t\t\t<article class=\"style1\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic01.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Magna</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style2\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic02.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Lorem</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style3\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic03.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Feugiat</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style4\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic04.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Tempus</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style5\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic05.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Aliquam</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style6\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic06.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Veroeros</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style2\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic07.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Ipsum</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style3\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic08.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Dolor</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style1\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic09.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Nullam</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style5\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic10.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Ultricies</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style6\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic11.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Dictum</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"style4\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/pic12.jpg\" alt=\"\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"generic.html\">
\t\t\t\t\t\t\t<h2>Pretium</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t\t<div class=\"inner\">
\t\t\t\t<section>
\t\t\t\t\t<h2>Get in touch</h2>
\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send\" class=\"primary\" /></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t\t<section>
\t\t\t\t\t<h2>Follow</h2>
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands style2 fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands style2 fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands style2 fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands style2 fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands style2 fa-github\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon brands style2 fa-500px\"><span class=\"label\">500px</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon solid style2 fa-phone\"><span class=\"label\">Phone</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon solid style2 fa-envelope\"><span class=\"label\">Email</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t<li>&copy; Untitled. All rights reserved</li>
\t\t\t\t\t<li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</footer>

\t</div>

\t<!-- Scripts -->
\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/browser.min.js\"></script>
\t<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/breakpoints.min.js\"></script>
\t<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/util.js\"></script>
\t<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/main.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 248,  332 => 247,  328 => 246,  324 => 245,  320 => 244,  259 => 186,  245 => 175,  231 => 164,  217 => 153,  203 => 142,  189 => 131,  175 => 120,  161 => 109,  147 => 98,  133 => 87,  119 => 76,  105 => 65,  66 => 29,  49 => 15,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "top.html.twig", "/Applications/MAMP/htdocs/ramenApp/templates/top.html.twig");
    }
}
