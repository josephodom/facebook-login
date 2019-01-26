<?php

/* logged-in.html */
class __TwigTemplate_de636bb1db6a879dac30cc8c083596855a98413d6facb398aa225e9c9bf93a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "logged-in.html", 1);
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
\t\t\t<p>
\t\t\t\t<img src=\"./photo\" alt=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "'s photo\">
\t\t\t</p>
\t\t\t
\t\t\t<p>
\t\t\t\tWelcome, ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "!
\t\t\t</p>
\t\t\t
\t\t\t<a href=\"./logout\" class=\"btn btn-warning\">
\t\t\t\tLog Out
\t\t\t</a>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "logged-in.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"main.html\" %}

{% block body %}
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<img src=\"./photo\" alt=\"{{ user.name }}'s photo\">
\t\t\t</p>
\t\t\t
\t\t\t<p>
\t\t\t\tWelcome, {{ user.name }}!
\t\t\t</p>
\t\t\t
\t\t\t<a href=\"./logout\" class=\"btn btn-warning\">
\t\t\t\tLog Out
\t\t\t</a>
\t\t</div>
\t</div>
{% endblock %}", "logged-in.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\logged-in.html");
    }
}
