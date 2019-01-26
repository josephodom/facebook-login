<?php

/* main.html */
class __TwigTemplate_4e4677b43e035851450c69aea89859f3718720f297d091610ab5cd78a4bd006d extends Twig_Template
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

<header id=\"header\">
\t<div class=\"container\">
\t\t<h1>";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t</div>
</header>

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
        return array (  38 => 15,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>{{ title }}</title>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
</head>

<body>

<header id=\"header\">
\t<div class=\"container\">
\t\t<h1>{{ title }}</h1>
\t</div>
</header>

</body>

</html>", "main.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\main.html");
    }
}
