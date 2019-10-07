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

/* login.html.twig */
class __TwigTemplate_bd29bb188e2ff695be9166b26b51ca29c03993e1cfd27a7ad0792cd4ee8443ff extends \Twig\Template
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
\t\t<h1>Login</h1>
\t\t<form method=\"post\">
\t\t\t<div class=\"form-item\">
\t\t\t\t";
        // line 16
        if ((twig_length_filter($this->env, ($context["err_msg"] ?? null)) > 0)) {
            // line 17
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["err_msg"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t<label for=\"user_name\"></label>
\t\t\t\t<input type=\"tezt\" name=\"user_name\" required=\"required\" placeholder=\"USER NAME\"></input>
\t\t\t\t";
        // line 21
        if ((twig_length_filter($this->env, ($context["emptyname"] ?? null)) > 0)) {
            // line 22
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptyname"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</div>
\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"pass\"></label>
\t\t\t\t<input type=\"password\" name=\"pass\" required=\"required\" placeholder=\"Password\"></input>
\t\t\t\t";
        // line 28
        if ((twig_length_filter($this->env, ($context["emptypass"] ?? null)) > 0)) {
            // line 29
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptypass"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
\t\t\t<div class=\"button-panel\">
\t\t\t\t<input type=\"submit\" class=\"button\" title=\"Login\" value=\"Login\"></input>
\t\t\t</div>
\t\t</form>
\t\t<div class=\"form-footer\">

\t\t</div>
\t</div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  78 => 29,  76 => 28,  70 => 24,  64 => 22,  62 => 21,  58 => 19,  52 => 17,  50 => 16,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/Applications/MAMP/htdocs/ramenApp/templates/login.html.twig");
    }
}
