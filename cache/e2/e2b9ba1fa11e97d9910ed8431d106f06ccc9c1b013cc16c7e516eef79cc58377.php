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

/* post.html.twig */
class __TwigTemplate_13843c940eda6ed67f04dbbfaec8e7f3888d5c792b670755262d555cd76e3855 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"utf-8\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css\">
</head>

<body>

\t<div class=\"form-wrapper\">
\t\t<h1>投稿</h1>
\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<div class=\" form-item\">
\t\t\t\t<label for=\"name\"></label>
\t\t\t\t<input type=\"text\" name=\"name\" required=\"required\" placeholder=\"店名\" value=\"";
        // line 16
        if ((twig_length_filter($this->env, ($context["name"] ?? null)) > 0)) {
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        }
        echo "\"></input>
\t\t\t\t";
        // line 17
        if ((twig_length_filter($this->env, ($context["emptyname"] ?? null)) > 0)) {
            // line 18
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptyname"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"adress\"></label>
\t\t\t\t<input type=\"text\" name=\"address\" required=\"required\" placeholder=\"住所\" value=\"";
        // line 24
        if ((twig_length_filter($this->env, ($context["name"] ?? null)) > 0)) {
            echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        }
        echo "\"></input>
\t\t\t\t";
        // line 25
        if ((twig_length_filter($this->env, ($context["emptyaddress"] ?? null)) > 0)) {
            // line 26
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptyaddress"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"taste\"></label>
\t\t\t\t<input type=\"\" name=\"taste\" required=\"required\" placeholder=\"味\" value=\"";
        // line 32
        if ((twig_length_filter($this->env, ($context["name"] ?? null)) > 0)) {
            echo twig_escape_filter($this->env, ($context["taste"] ?? null), "html", null, true);
        }
        echo "\"></input>
\t\t\t\t";
        // line 33
        if ((twig_length_filter($this->env, ($context["taste"] ?? null)) > 0)) {
            // line 34
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptytaste"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"pic\"></label>
\t\t\t\t<input id=\"pic\" type=\"file\" name=\"pic\" required=\"required\" placeholder=\"Pic\"></input>
\t\t\t\t";
        // line 41
        if ((twig_length_filter($this->env, ($context["emptypic"] ?? null)) > 0)) {
            // line 42
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptypic"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t<div class=\"prev\" style=\"margin-top: 10px\"></div>
\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<textarea name=\"text\" id=\"\" cols=\"70\" rows=\"10\" placeholder=\"ラーメンに対する評価、ご感想をお書きください\" value=\"";
        // line 48
        if ((twig_length_filter($this->env, ($context["name"] ?? null)) > 0)) {
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        }
        echo "\"></textarea>
\t\t\t\t";
        // line 49
        if ((twig_length_filter($this->env, ($context["emptytext"] ?? null)) > 0)) {
            // line 50
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptytext"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t</div>

\t\t\t<div class=\"button-panel\">
\t\t\t\t<input type=\"submit\" class=\"button\" title=\"post\" value=\"投稿する\"></input>
\t\t\t</div>
\t\t</form>

\t\t<div class=\"form-footer\">
\t\t</div>

\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_constant("ramenApp\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/fileprev.js\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 63,  151 => 62,  139 => 52,  133 => 50,  131 => 49,  125 => 48,  119 => 44,  113 => 42,  111 => 41,  104 => 36,  98 => 34,  96 => 33,  90 => 32,  84 => 28,  78 => 26,  76 => 25,  70 => 24,  64 => 20,  58 => 18,  56 => 17,  50 => 16,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post.html.twig", "/Applications/MAMP/htdocs/ramenApp/templates/post.html.twig");
    }
}
