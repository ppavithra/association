<?php

/* default/messagerie.html.twig */
class __TwigTemplate_0b24642433f9447637cacfc72607fb86a25d1306cc30acbd4adc61ab6538b320 extends Twig_Template
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
        $__internal_403139ede1d1e3534ed2ddf3393db763e8d30080e44a8c3528b8f27b792cf5a3 = $this->env->getExtension("native_profiler");
        $__internal_403139ede1d1e3534ed2ddf3393db763e8d30080e44a8c3528b8f27b792cf5a3->enter($__internal_403139ede1d1e3534ed2ddf3393db763e8d30080e44a8c3528b8f27b792cf5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/messagerie.html.twig"));

        // line 1
        echo "

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("show");
        echo "\">aller dans le forum</a>

";
        
        $__internal_403139ede1d1e3534ed2ddf3393db763e8d30080e44a8c3528b8f27b792cf5a3->leave($__internal_403139ede1d1e3534ed2ddf3393db763e8d30080e44a8c3528b8f27b792cf5a3_prof);

    }

    public function getTemplateName()
    {
        return "default/messagerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* */
/* */
/* {{ form_start(form) }}*/
/* 	{{ form_row(form.title) }}*/
/*     {{ form_row(form.auteur) }}*/
/*     {{ form_row(form.title) }}*/
/* */
/* {{ form_end(form) }}*/
/* <a href="{{ path('show') }}">aller dans le forum</a>*/
/* */
/* */
