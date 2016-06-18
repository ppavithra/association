<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_780b57d604312f8eca87af962e9175728e9b912f0c1efcec97970ea20b5c8b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cae7399d685f79cbefbd5618a09d84592fae317aae553a253f50845c5302441 = $this->env->getExtension("native_profiler");
        $__internal_4cae7399d685f79cbefbd5618a09d84592fae317aae553a253f50845c5302441->enter($__internal_4cae7399d685f79cbefbd5618a09d84592fae317aae553a253f50845c5302441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cae7399d685f79cbefbd5618a09d84592fae317aae553a253f50845c5302441->leave($__internal_4cae7399d685f79cbefbd5618a09d84592fae317aae553a253f50845c5302441_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae3636f01823733ef2803a4becbe441b93d7520b8c3d8365f074593b260647dd = $this->env->getExtension("native_profiler");
        $__internal_ae3636f01823733ef2803a4becbe441b93d7520b8c3d8365f074593b260647dd->enter($__internal_ae3636f01823733ef2803a4becbe441b93d7520b8c3d8365f074593b260647dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae3636f01823733ef2803a4becbe441b93d7520b8c3d8365f074593b260647dd->leave($__internal_ae3636f01823733ef2803a4becbe441b93d7520b8c3d8365f074593b260647dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_558d84e4606bf25173c1c841a8b61063c41bde8bfd5e8d576069f79370e2c385 = $this->env->getExtension("native_profiler");
        $__internal_558d84e4606bf25173c1c841a8b61063c41bde8bfd5e8d576069f79370e2c385->enter($__internal_558d84e4606bf25173c1c841a8b61063c41bde8bfd5e8d576069f79370e2c385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_558d84e4606bf25173c1c841a8b61063c41bde8bfd5e8d576069f79370e2c385->leave($__internal_558d84e4606bf25173c1c841a8b61063c41bde8bfd5e8d576069f79370e2c385_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06e3bc2505ded234ffb729e4bd93f987203b113bd23153022e1caad63a92eae2 = $this->env->getExtension("native_profiler");
        $__internal_06e3bc2505ded234ffb729e4bd93f987203b113bd23153022e1caad63a92eae2->enter($__internal_06e3bc2505ded234ffb729e4bd93f987203b113bd23153022e1caad63a92eae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06e3bc2505ded234ffb729e4bd93f987203b113bd23153022e1caad63a92eae2->leave($__internal_06e3bc2505ded234ffb729e4bd93f987203b113bd23153022e1caad63a92eae2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
