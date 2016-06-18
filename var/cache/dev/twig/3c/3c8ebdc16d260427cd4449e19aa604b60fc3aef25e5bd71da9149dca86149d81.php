<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f9ab8adfe79e7938f1ca63572873cb60313e6cfe2566fb2c5da72a9f040759a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f04cae0507fb89d06d7e4f4d998bcc632de6c7232fe0ecca89e8bd8258bef40 = $this->env->getExtension("native_profiler");
        $__internal_6f04cae0507fb89d06d7e4f4d998bcc632de6c7232fe0ecca89e8bd8258bef40->enter($__internal_6f04cae0507fb89d06d7e4f4d998bcc632de6c7232fe0ecca89e8bd8258bef40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f04cae0507fb89d06d7e4f4d998bcc632de6c7232fe0ecca89e8bd8258bef40->leave($__internal_6f04cae0507fb89d06d7e4f4d998bcc632de6c7232fe0ecca89e8bd8258bef40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c888b69266837def6a96c47db0351fcacfd551a154aed56f3d8368aa00774734 = $this->env->getExtension("native_profiler");
        $__internal_c888b69266837def6a96c47db0351fcacfd551a154aed56f3d8368aa00774734->enter($__internal_c888b69266837def6a96c47db0351fcacfd551a154aed56f3d8368aa00774734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c888b69266837def6a96c47db0351fcacfd551a154aed56f3d8368aa00774734->leave($__internal_c888b69266837def6a96c47db0351fcacfd551a154aed56f3d8368aa00774734_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc2bfe74a5dd0cb91206fd3be92beee29806c24ec17a126fb1de232e935e7ccd = $this->env->getExtension("native_profiler");
        $__internal_bc2bfe74a5dd0cb91206fd3be92beee29806c24ec17a126fb1de232e935e7ccd->enter($__internal_bc2bfe74a5dd0cb91206fd3be92beee29806c24ec17a126fb1de232e935e7ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc2bfe74a5dd0cb91206fd3be92beee29806c24ec17a126fb1de232e935e7ccd->leave($__internal_bc2bfe74a5dd0cb91206fd3be92beee29806c24ec17a126fb1de232e935e7ccd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5834361e104774b0a4ad40a87eab2d28ed3bb8966ca73a9fb0bc80926f2ccd87 = $this->env->getExtension("native_profiler");
        $__internal_5834361e104774b0a4ad40a87eab2d28ed3bb8966ca73a9fb0bc80926f2ccd87->enter($__internal_5834361e104774b0a4ad40a87eab2d28ed3bb8966ca73a9fb0bc80926f2ccd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5834361e104774b0a4ad40a87eab2d28ed3bb8966ca73a9fb0bc80926f2ccd87->leave($__internal_5834361e104774b0a4ad40a87eab2d28ed3bb8966ca73a9fb0bc80926f2ccd87_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
