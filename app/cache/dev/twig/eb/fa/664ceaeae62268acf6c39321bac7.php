<?php

/* Practica1Bundle:Default:nuevaentrada.html.twig */
class __TwigTemplate_ebfa664ceaeae62268acf6c39321bac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'nuevo' => array($this, 'block_nuevo'),
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Practica1Bundle:Default:backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<form action=\"crearentrada\" method=\"post\"><fieldset><legend>Nueva Entrada</legend>   
        <table>
            <tr>
                <td><label for=\"nombre\">Titulo </label></td>
                <td><input type=\"text\" name=\"titulo\" size=\"30\" maxlength=\"80\"></td>
            </tr>
            <tr>
                <td><label for=\"email\">Contenido : </label></td>
                <td><textarea name=\"contenido\" cols=\"40\" rows=\"20\"></textarea></td>
            </tr>
        </table>

</fieldset>
<label for=\"enviar\">
<input type=\"submit\" name=\"enviar\" value=\"Enviar datos\"></label>
 </form>
  
";
    }

    // line 23
    public function block_nuevo($context, array $blocks = array())
    {
        // line 24
        echo "        <div id=\"btnnew\">    
        <a href=\"nuevaentrada\">
            Nueva Entrada
        </a>
        </div>
 ";
    }

    // line 30
    public function block_titulo($context, array $blocks = array())
    {
        echo "Lista de Usuarios";
    }

    public function getTemplateName()
    {
        return "Practica1Bundle:Default:nuevaentrada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
