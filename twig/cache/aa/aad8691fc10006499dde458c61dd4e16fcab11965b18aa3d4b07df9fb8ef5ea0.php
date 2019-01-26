<?php

/* 500.html */
class __TwigTemplate_988948ff5e9a0441cdeb674d9efb0e334e35fcd601c053bdce668eed8e1bce13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "500.html", 1);
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
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "500.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"main.html\" %}

{%block body %}
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t{{ message }}
\t\t</div>
\t</div>
{% endblock %}", "500.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\500.html");
    }
}
