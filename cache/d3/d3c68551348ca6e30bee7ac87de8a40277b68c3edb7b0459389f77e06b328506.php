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

/* detail.html.twig */
class __TwigTemplate_df5ea4a34db875c0a368a14b7063afa19a07c51388eb833749c2915bb3de8de0 extends \Twig\Template
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
\t<title>Ramen-APP</title>
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
\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "top.php\" class=\"logo\">
\t\t\t\t\t<span class=\"symbol\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "images/ramen.svg\" alt=\"\" /></span><span class=\"title\">Ramen-APP</span>
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
\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "top.php\">Home</a></li>
\t\t\t\t";
        // line 46
        if (twig_test_empty(($context["session"] ?? null))) {
            // line 47
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "login.php\">Login</a></li>
\t\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "post.php\">Post</a></li>
\t\t\t\t<li><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "logout.php\">Logout</a></li>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t</ul>
\t\t</nav>

\t\t<!-- Main -->
\t\t<div id=\"main\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h1>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "name", []), "html", null, true);
        echo "</h1>
\t\t\t\t<span class=\"image main\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/pic/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "pic", []), "html", null, true);
        echo "\" alt=\"\" width=\"800\" height=\"600\" /></span>
\t\t\t\t<p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "introduction", []), "html", null, true);
        echo "</p>
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
        // line 109
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/browser.min.js\"></script>
\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/breakpoints.min.js\"></script>
\t<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/util.js\"></script>
\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/main.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 113,  192 => 112,  188 => 111,  184 => 110,  180 => 109,  128 => 60,  122 => 59,  118 => 58,  110 => 52,  105 => 50,  100 => 49,  94 => 47,  92 => 46,  88 => 45,  68 => 28,  64 => 27,  49 => 15,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "detail.html.twig", "/Applications/MAMP/htdocs/ramenApp/templates/detail.html.twig");
    }
}
