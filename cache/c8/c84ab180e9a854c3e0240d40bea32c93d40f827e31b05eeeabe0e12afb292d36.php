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

/* unsubscribe.html.twig */
class __TwigTemplate_fc287e74eeaf627140b0ffe35068403733553d4c730f6e44fbe9ea4a21ff0e0f extends \Twig\Template
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
\t\t<h1>退会</h1>
\t\t";
        // line 14
        if ((twig_length_filter($this->env, ($context["err_msg"] ?? null)) > 0)) {
            // line 15
            echo "\t\t<p style=\"text-align: center\">";
            echo twig_escape_filter($this->env, ($context["err_msg"] ?? null), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 17
        echo "\t\t<form method=\"post\">
\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"user_name\"></label>
\t\t\t\t<input type=\"tezt\" name=\"user_name\" required=\"required\" placeholder=\"USER NAME\"></input>

\t\t\t</div>
\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"pass\"></label>
\t\t\t\t<input type=\"password\" name=\"pass\" required=\"required\" placeholder=\"Password\"></input>
\t\t\t</div>
\t\t\t<div class=\"button-panel\">
\t\t\t\t<input type=\"submit\" class=\"button\" title=\"Login\" value=\"退会\"></input>
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
        return "unsubscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  50 => 15,  48 => 14,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "unsubscribe.html.twig", "/Applications/MAMP/htdocs/ramenApp/templates/unsubscribe.html.twig");
    }
}
