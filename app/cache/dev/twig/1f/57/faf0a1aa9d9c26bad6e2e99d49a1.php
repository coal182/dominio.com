<?php

/* Practica1Bundle:Default:home.html.twig */
class __TwigTemplate_1f57faf0a1aa9d9c26bad6e2e99d49a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Practica1Bundle:Default:plantilla.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entradas"));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 6
            echo "<div id=\"entrada\"><div id=\"titulo\"><h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "titulo"), "html", null, true);
            echo "</h1></div>
    <div id=\"texto\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entrada"), "contenido"), "html", null, true);
            echo "</div>
</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "Practica1Bundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
