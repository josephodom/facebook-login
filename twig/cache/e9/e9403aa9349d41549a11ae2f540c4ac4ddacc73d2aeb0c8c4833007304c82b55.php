<?php

/* 404.html */
class __TwigTemplate_865b412c2f9d110805c611731aeecdf8846654c36c37902f5973e521c37da635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "404.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\tThe page you requested could not be found.
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"main.html\" %}

{%block body %}
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\tThe page you requested could not be found.
\t\t</div>
\t</div>
{% endblock %}", "404.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\404.html");
    }
}
