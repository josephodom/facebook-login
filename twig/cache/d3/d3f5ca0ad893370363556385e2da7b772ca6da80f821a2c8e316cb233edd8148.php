<?php

/* main.html */
class __TwigTemplate_4e4677b43e035851450c69aea89859f3718720f297d091610ab5cd78a4bd006d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
<base href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["documentRoot"] ?? null), "html", null, true);
        echo "\">
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Facebook Login API Example</title>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"assets/css/frontend.css\">
</head>

<body>

<header id=\"header\">
\t<div class=\"container\">
\t\t<h1>Facebook Login API Example</h1>
\t</div>
</header>

<main id=\"main\">
\t<div class=\"container\">
\t\t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t</div>
</main>

<footer id=\"footer\">
\t<div class=\"container\">
\t\t<p>
\t\t\t&copy; Joseph Odom ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t</p>
\t\t
\t\t<p>
\t\t\t<a href=\"./\">Home</a>
\t\t\t|
\t\t\t<a href=\"./privacy_policy\">
\t\t\t\tPrivacy Policy
\t\t\t</a>
\t\t</p>
\t</div>
</footer>

</body>

</html>";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
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
        return array (  77 => 23,  57 => 30,  49 => 24,  47 => 23,  26 => 5,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
<base href=\"{{ documentRoot }}\">
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Facebook Login API Example</title>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"assets/css/frontend.css\">
</head>

<body>

<header id=\"header\">
\t<div class=\"container\">
\t\t<h1>Facebook Login API Example</h1>
\t</div>
</header>

<main id=\"main\">
\t<div class=\"container\">
\t\t{% block body %}{% endblock %}
\t</div>
</main>

<footer id=\"footer\">
\t<div class=\"container\">
\t\t<p>
\t\t\t&copy; Joseph Odom {{ 'now'|date('Y') }}
\t\t</p>
\t\t
\t\t<p>
\t\t\t<a href=\"./\">Home</a>
\t\t\t|
\t\t\t<a href=\"./privacy_policy\">
\t\t\t\tPrivacy Policy
\t\t\t</a>
\t\t</p>
\t</div>
</footer>

</body>

</html>", "main.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\main.html");
    }
}
