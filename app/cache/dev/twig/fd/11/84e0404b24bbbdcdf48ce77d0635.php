<?php

/* Practica1Bundle:Default:backend.html.twig */
class __TwigTemplate_fd1184e0404b24bbbdcdf48ce77d0635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 57
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset-mayer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"default\" type=\"text/css\" />
\t\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/backend.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" title=\"default\" type=\"text/css\" />

        ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "             
        <div id=\"container\">
            <div id=\"header\">
\t\t<a id=\"btnpanel\" href=\"backend.jsp\"><h1>Kiwi: Panel de control</h1></a>
\t\t<a id=\"btnver\" href=\"index.jsp\">Ver Página</a>
\t\t<span id=\"welcomeuser\">
                   
                    <a href=\"controller?action=exit\">Exit</a>
                </span>\t\t
            </div>
            <div id=\"body\">
\t\t<div id=\"title\">
                    <a id=\"btnnew\" href=\"newentry.jsp\">New Entry</a>\t
\t\t\t<h2>Control Panel</h2>\t\t\t\t
\t\t</div>
\t\t<div id=\"bar\">
                    <ul>
\t\t\t<li><a href=\"entries.jsp\" id=\"firstmenu\">Entries</a></li>
\t\t\t<li><a href=\"pages.jsp\">Pages</a></li>
\t\t\t<li><a href=\"polls.jsp\">Polls</a></li>\t
\t\t\t<li><a href=\"forms.jsp\">Forms</a></li>
\t\t\t<li><a href=\"users.jsp\">Users</a></li>\t
\t\t\t<li><a href=\"modules.jsp\">Modules</a></li>\t
\t\t\t<li><a href=\"templates.jsp\">Templates</a></li>\t
\t\t\t<li><a href=\"settings.jsp\" id=\"lastmenu\">Settings</a></li>\t\t\t\t\t\t
\t\t</ul>\t\t\t\t
\t\t</div>
                    <div id=\"content\">
                \t<table id=\"entrieslist\">
    \t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cursos"));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 40
            echo "        \t\t\t<tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "curso"), "nombrecurso"), "html", null, true);
            echo "</td><td id='buttons'><a href='delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "curso"), "id"), "html", null, true);
            echo "' id='deleteentry'></a>
                \t\t<a href='#' id='editentry'></a></td></tr>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "                 
        </table>\t\t
                    </div>
                    <div class=\"clean\"></div>
                </div>
            
            <div id=\"footer\">
\t\t\t
            </div>\t\t
\t</div>
    
    
";
    }

    public function getTemplateName()
    {
        return "Practica1Bundle:Default:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
