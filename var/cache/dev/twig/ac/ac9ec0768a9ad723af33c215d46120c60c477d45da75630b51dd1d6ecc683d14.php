<?php

/* default/show.html.twig */
class __TwigTemplate_fedaba5bd341510227f56c023717cf74bfdc5f959acc0383355db57b3ce1c489 extends Twig_Template
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
        $__internal_0be301ddde158f3344219f5c81c1308fbfeb02f30e99bf31fd46469817b1280b = $this->env->getExtension("native_profiler");
        $__internal_0be301ddde158f3344219f5c81c1308fbfeb02f30e99bf31fd46469817b1280b->enter($__internal_0be301ddde158f3344219f5c81c1308fbfeb02f30e99bf31fd46469817b1280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["message"]);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "       <td>
        auteur :  <th>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "auteur", array()), "html", null, true);
            echo "</th>
         titre  :<th>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</th>
         commentaires : <th>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "text", array()), "html", null, true);
            echo "</th><br>
       </td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("messagerie");
        echo "\">poster une message</a>";
        
        $__internal_0be301ddde158f3344219f5c81c1308fbfeb02f30e99bf31fd46469817b1280b->leave($__internal_0be301ddde158f3344219f5c81c1308fbfeb02f30e99bf31fd46469817b1280b_prof);

    }

    public function getTemplateName()
    {
        return "default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for message in message %}*/
/*        <td>*/
/*         auteur :  <th>{{ message.auteur }}</th>*/
/*          titre  :<th>{{ message.title }}</th>*/
/*          commentaires : <th>{{ message.text }}</th><br>*/
/*        </td>*/
/* {% endfor %}*/
/* */
/* <a href="{{ path('messagerie') }}">poster une message</a>*/
