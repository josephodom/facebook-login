<?php

/* login.html */
class __TwigTemplate_6f2774d32105d08cf5ebd1606d1e47024e66a87e17567f5a19e76ef310cd9ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "login.html", 1);
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
\t\t\t<h2>Not Logged In</h2>
\t\t\t
\t\t\t<p>Would you like to log in via Facebook? It'll give me your full name &amp; profile picture.</p>
\t\t\t
\t\t\t<p>
\t\t\t\t(This app doesn't permanently store anything, it only uses a <code>\$_SESSION</code>)
\t\t\t</p>
\t\t\t
\t\t\t<a href=\"./login\" class=\"btn btn-primary\">
\t\t\t\tLog In
\t\t\t</a>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
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

{% block body %}
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h2>Not Logged In</h2>
\t\t\t
\t\t\t<p>Would you like to log in via Facebook? It'll give me your full name &amp; profile picture.</p>
\t\t\t
\t\t\t<p>
\t\t\t\t(This app doesn't permanently store anything, it only uses a <code>\$_SESSION</code>)
\t\t\t</p>
\t\t\t
\t\t\t<a href=\"./login\" class=\"btn btn-primary\">
\t\t\t\tLog In
\t\t\t</a>
\t\t</div>
\t</div>
{% endblock %}", "login.html", "C:\\xampp\\htdocs\\portfolio\\facebook\\twig\\templates\\login.html");
    }
}
