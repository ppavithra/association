<?php

/* default/index.html.twig */
class __TwigTemplate_46a1a84a516939eb6882f0808f84b2181ad75e67e4f42a15d332a9836619b138 extends Twig_Template
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
        $__internal_2827156cad46188073258b5969d3fd3390e62afaf7ac297d5b73956b47a1df89 = $this->env->getExtension("native_profiler");
        $__internal_2827156cad46188073258b5969d3fd3390e62afaf7ac297d5b73956b47a1df89->enter($__internal_2827156cad46188073258b5969d3fd3390e62afaf7ac297d5b73956b47a1df89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "
<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("show");
        echo "\">aller dans le forum</a>
";
        
        $__internal_2827156cad46188073258b5969d3fd3390e62afaf7ac297d5b73956b47a1df89->leave($__internal_2827156cad46188073258b5969d3fd3390e62afaf7ac297d5b73956b47a1df89_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* */
/* <a href="{{ path('show') }}">aller dans le forum</a>*/
/* */
