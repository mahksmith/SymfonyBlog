<?php

/* MarkSmithBlogBundle:Default:view.html.twig */
class __TwigTemplate_4167f243fdf7e0db0d2f6728b47f61dc extends Twig_Template
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
<html>
    <head>
        <title>Entry</title>
    </head>
    <body>
            <h1>Entry: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
            ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")), "html", null, true);
        echo " <br/><br/>
            ";
        // line 9
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
            <br/>
            <br/>
            <a href='/blog/'>Back</a>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MarkSmithBlogBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
