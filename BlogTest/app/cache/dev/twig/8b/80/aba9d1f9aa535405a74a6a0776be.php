<?php

/* MarkSmithBlogBundle:Default:index.html.twig */
class __TwigTemplate_8b80aba9d1f9aa535405a74a6a0776be extends Twig_Template
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
        <title>List of Blog Entries</title>
    </head>
    <body>
        <h1>List of Blog Entries</h1>
        <a href='/blog/create'>Create an entry here</a>
        <ul>
            ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries"))) > 0)) {
            // line 11
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 12
                echo "                    <li>
                        <a href='/blog/";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"), "html", null, true);
                echo "'>
                            ";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "date"), "Y-m-d H:i"), "html", null, true);
                echo ":
                            ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
                echo "    
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                <h2>No blog entries created or found...</h2>
            ";
        }
        // line 22
        echo "        </ul>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MarkSmithBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  61 => 20,  58 => 19,  48 => 15,  44 => 14,  40 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
