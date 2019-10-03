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
\t\t\t\t<label for=\"user_name\"></label>
\t\t\t\t<input type=\"tezt\" name=\"user_name\" required=\"required\" placeholder=\"USER NAME\"></input>
\t\t\t\t";
        // line 18
        if ((twig_length_filter($this->env, ($context["emptyname"] ?? null)) > 0)) {
            // line 19
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptyname"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</div>
\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"pass\"></label>
\t\t\t\t<input type=\"password\" name=\"pass\" required=\"required\" placeholder=\"Password\"></input>
\t\t\t\t";
        // line 25
        if ((twig_length_filter($this->env, ($context["emptypass"] ?? null)) > 0)) {
            // line 26
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["emptypass"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</div>
\t\t\t<div class=\"button-panel\">
\t\t\t\t<input type=\"submit\" class=\"button\" title=\"Login\" value=\"Login\"></input>
\t\t\t</div>
\t\t</form>
\t\t<div class=\"form-footer\">
\t\t\t<p><a href=\"#\">Create an account</a></p>
\t\t\t<p><a href=\"#\">Forgot password?</a></p>
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
        return array (  74 => 28,  68 => 26,  66 => 25,  60 => 21,  54 => 19,  52 => 18,  37 => 6,  30 => 1,);
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
