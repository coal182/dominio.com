<?php

/* Practica1Bundle:Default:index.html.twig */
class __TwigTemplate_35d9175c8909b774bd8dce1a5d649a92 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "Practica1Bundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
