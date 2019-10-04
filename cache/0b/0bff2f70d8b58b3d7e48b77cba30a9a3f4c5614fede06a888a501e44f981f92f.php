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
\t";
        // line 20
        if ((twig_length_filter($this->env, ($context["flash"] ?? null)) > 0)) {
            // line 21
            echo "\t<div class=\"flash\">";
            echo twig_escape_filter($this->env, ($context["flash"] ?? null), "html", null, true);
            echo "</div>
\t";
        }
        // line 23
        echo "
\t<!-- Wrapper -->
\t<div id=\"wrapper\">

\t\t<!-- Header -->
\t\t<header id=\"header\">
\t\t\t<div class=\"inner\">

\t\t\t\t<!-- Logo -->
\t\t\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "top.php\" class=\"logo\">
\t\t\t\t\t<span class=\"symbol\"><img src=\"";
        // line 33
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
        // line 50
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "top.php\">Home</a></li>
\t\t\t\t";
        // line 51
        if (twig_test_empty(($context["session"] ?? null))) {
            // line 52
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "login.php\">Login</a></li>
\t\t\t\t<li><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "signup.php\">Signup</a></li>
\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "post.php\">Post</a></li>
\t\t\t\t<li><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "logout.php\">Logout</a></li>
\t\t\t\t<li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "unsubscribe.php\">Unsubscribe</a></li>
\t\t\t\t";
        }
        // line 59
        echo "\t\t\t</ul>
\t\t</nav>

\t\t<!-- Main -->
\t\t<div id=\"main\">
\t\t\t<div class=\"inner\">
\t\t\t\t<header>
\t\t\t\t\t<h1>This is Ramen-APP! Skina ramen wo, shoukai sitene!!<br />
\t\t\t\t\t\tResponsiv nimo battiri taiou!!</h1>
\t\t\t\t\t<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
\t\t\t\t</header>
\t\t\t\t<section class=\"tiles\">
\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["data"]) {
            // line 72
            echo "\t\t\t\t\t<article class=\"style";
            echo twig_escape_filter($this->env, (twig_random($this->env, 5) + 1), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "pic/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "pic", []), "html", null, true);
            echo "\" alt=\"\" width=\"360\" height=\"270\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
            echo "detail.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<h2>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", []), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</article>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t\t<div class=\"inner\">
\t\t\t\t<section>
\t\t\t\t\t<h2>Get in touch</h2>
\t\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t\t<div class=\"fields\">
\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t<textarea name=\"search\" id=\"search\" placeholder=\"Search\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Search\" class=\"primary\" /></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"AND\" name=\"ANDOR\" value=0 checked>
\t\t\t\t\t\t\t\t\t<label for=\"AND\">AND</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-12-small\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"OR\" name=\"ANDOR\" value=1>
\t\t\t\t\t\t\t\t\t<label for=\"OR\">OR</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
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
        // line 140
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/browser.min.js\"></script>
\t<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/breakpoints.min.js\"></script>
\t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "/js/util.js\"></script>
\t<script src=\"";
        // line 144
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
        return array (  254 => 144,  250 => 143,  246 => 142,  242 => 141,  238 => 140,  180 => 84,  167 => 77,  161 => 76,  154 => 74,  148 => 72,  144 => 71,  130 => 59,  125 => 57,  121 => 56,  116 => 55,  111 => 53,  106 => 52,  104 => 51,  100 => 50,  80 => 33,  76 => 32,  65 => 23,  59 => 21,  57 => 20,  49 => 15,  44 => 13,  30 => 1,);
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
