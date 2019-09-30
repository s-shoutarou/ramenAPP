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
\t\t\t\t<input type=\"text\" name=\"name\" required=\"required\" placeholder=\"店名\"></input>
\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"adress\"></label>
\t\t\t\t<input type=\"text\" name=\"address\" required=\"required\" placeholder=\"住所\"></input>
\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"taste\"></label>
\t\t\t\t<input type=\"\" name=\"taste\" required=\"required\" placeholder=\"味\"></input>
\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<label for=\"pic\"></label>
\t\t\t\t<input type=\"file\" name=\"pic\" required=\"required\" placeholder=\"Pic\"></input>
\t\t\t</div>

\t\t\t<div class=\"form-item\">
\t\t\t\t<textarea name=\"introduction\" id=\"\" cols=\"50\" rows=\"10\"></textarea>
\t\t\t</div>

\t\t\t<div class=\"button-panel\">
\t\t\t\t<input type=\"submit\" class=\"button\" title=\"post\" value=\"投稿する\"></input>
\t\t\t</div>
\t\t</form>

\t\t<div class=\"form-footer\">
\t\t</div>
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
        return array (  37 => 6,  30 => 1,);
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
