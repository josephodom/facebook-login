<?php

/* main.html */
class __TwigTemplate_0b3803a4801215bce9a09001b3ec76eeaf770f0af47925ff51b13aebdf44043b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
</head>

<body>

<h1>Hello</h1>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\main.html");
    }
}
