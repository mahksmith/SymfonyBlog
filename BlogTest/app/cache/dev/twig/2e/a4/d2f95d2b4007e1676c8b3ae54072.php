<?php

/* MarkSmithBlogBundle:Default:create.html.twig */
class __TwigTemplate_2ea4d2f95d2b4007e1676c8b3ae54072 extends Twig_Template
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
        <title>Create a Blog Entry</title>
    </head>
    <body>
        <h1>Create a Blog Entry:</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MarkSmithBlogBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
