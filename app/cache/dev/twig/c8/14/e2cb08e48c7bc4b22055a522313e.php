<?php

/* Practica1Bundle:Default:plantilla.html.twig */
class __TwigTemplate_c814e2cb08e48c7bc4b22055a522313e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'contenido' => array($this, 'block_contenido'),
            'pie' => array($this, 'block_pie'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 31
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 7
    public function block_cabecera($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<ul>
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cursos"));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 15
            echo "        <li><a href=\"/Symfony1/web/app_dev.php/curso-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "curso"), "nombrecurso"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "curso"), "nombrecurso"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "</ul>";
    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        // line 19
        echo "<ul>
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "usuarios"));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 21
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "usuario"), "nombre"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "</ul>
";
    }

    // line 26
    public function block_pie($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"cabecera\">
";
        // line 7
        $this->displayBlock('cabecera', $context, $blocks);
        // line 10
        echo "</div>
<div id=\"cuerpo\">
<div id=\"menu\">";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "</div>
<div id=\"contenido\">";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 24
        echo "</div>
</div>
<div id=\"pie\">";
        // line 26
        $this->displayBlock('pie', $context, $blocks);
        echo "</div>
    
    
";
    }

    public function getTemplateName()
    {
        return "Practica1Bundle:Default:plantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
