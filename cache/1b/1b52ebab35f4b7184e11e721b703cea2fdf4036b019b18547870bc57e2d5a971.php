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

/* fake.html.twig */
class __TwigTemplate_973f966f50bd0eea6aa920ecbed22177afad30cf22d6b46b959714c2c0f15653 extends \Twig\Template
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
        echo "<html>

<head>
\t<meta charset=utf8>
</head>

<body>
\t<form method=\"post\">
\t\t<select name=\"val\">
\t\t\t<option value=1>1</option>
\t\t\t<option value=2>2</option>
\t\t\t<option value=3>3</option>
\t\t</select>
\t\t<input type=\"submit\">
\t</form>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "fake.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "fake.html.twig", "/Applications/MAMP/htdocs/ramenApp/templates/fake.html.twig");
    }
}
