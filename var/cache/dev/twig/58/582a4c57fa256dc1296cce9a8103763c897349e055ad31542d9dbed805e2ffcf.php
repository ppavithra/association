<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bdfa8fca4af7c0f5c70292a30731dff31d69f3d12469baed8f2c1da7c0237aa9 extends Twig_Template
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
        $__internal_f0191ed8dbc88aac781d1e81fe2a2df3e4f8cb4c79f7e940c1ba0e8c406df715 = $this->env->getExtension("native_profiler");
        $__internal_f0191ed8dbc88aac781d1e81fe2a2df3e4f8cb4c79f7e940c1ba0e8c406df715->enter($__internal_f0191ed8dbc88aac781d1e81fe2a2df3e4f8cb4c79f7e940c1ba0e8c406df715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f0191ed8dbc88aac781d1e81fe2a2df3e4f8cb4c79f7e940c1ba0e8c406df715->leave($__internal_f0191ed8dbc88aac781d1e81fe2a2df3e4f8cb4c79f7e940c1ba0e8c406df715_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
