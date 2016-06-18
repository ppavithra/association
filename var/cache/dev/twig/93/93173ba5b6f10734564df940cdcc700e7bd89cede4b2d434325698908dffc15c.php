<?php

/* base.html.twig */
class __TwigTemplate_c61749044b1b8de150fd16f9187adf2dcf20784e0212cd1ff0227a360e1fdc58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2698e12f860bee1230f7d443b88c368613238709bfac5b328ffb4b144cb660c = $this->env->getExtension("native_profiler");
        $__internal_e2698e12f860bee1230f7d443b88c368613238709bfac5b328ffb4b144cb660c->enter($__internal_e2698e12f860bee1230f7d443b88c368613238709bfac5b328ffb4b144cb660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e2698e12f860bee1230f7d443b88c368613238709bfac5b328ffb4b144cb660c->leave($__internal_e2698e12f860bee1230f7d443b88c368613238709bfac5b328ffb4b144cb660c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b354b929e461c3117ca8b24e4aca7a2187fa2cf55e172b9e3ae636da2bb59fe3 = $this->env->getExtension("native_profiler");
        $__internal_b354b929e461c3117ca8b24e4aca7a2187fa2cf55e172b9e3ae636da2bb59fe3->enter($__internal_b354b929e461c3117ca8b24e4aca7a2187fa2cf55e172b9e3ae636da2bb59fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b354b929e461c3117ca8b24e4aca7a2187fa2cf55e172b9e3ae636da2bb59fe3->leave($__internal_b354b929e461c3117ca8b24e4aca7a2187fa2cf55e172b9e3ae636da2bb59fe3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f027dd9508d84688a1a285b924bf4d939456dc3745975b2efd042c76f4a0b5cc = $this->env->getExtension("native_profiler");
        $__internal_f027dd9508d84688a1a285b924bf4d939456dc3745975b2efd042c76f4a0b5cc->enter($__internal_f027dd9508d84688a1a285b924bf4d939456dc3745975b2efd042c76f4a0b5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f027dd9508d84688a1a285b924bf4d939456dc3745975b2efd042c76f4a0b5cc->leave($__internal_f027dd9508d84688a1a285b924bf4d939456dc3745975b2efd042c76f4a0b5cc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aacd7c2f7a251ec1344f20aab2bcae9f1ba23a54d6de265c0445e1eb02ee9e22 = $this->env->getExtension("native_profiler");
        $__internal_aacd7c2f7a251ec1344f20aab2bcae9f1ba23a54d6de265c0445e1eb02ee9e22->enter($__internal_aacd7c2f7a251ec1344f20aab2bcae9f1ba23a54d6de265c0445e1eb02ee9e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aacd7c2f7a251ec1344f20aab2bcae9f1ba23a54d6de265c0445e1eb02ee9e22->leave($__internal_aacd7c2f7a251ec1344f20aab2bcae9f1ba23a54d6de265c0445e1eb02ee9e22_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c77c5d09a6b41667ae54274f0690fe772e5d0dce2022c0d5c9ed9a15e425335 = $this->env->getExtension("native_profiler");
        $__internal_5c77c5d09a6b41667ae54274f0690fe772e5d0dce2022c0d5c9ed9a15e425335->enter($__internal_5c77c5d09a6b41667ae54274f0690fe772e5d0dce2022c0d5c9ed9a15e425335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c77c5d09a6b41667ae54274f0690fe772e5d0dce2022c0d5c9ed9a15e425335->leave($__internal_5c77c5d09a6b41667ae54274f0690fe772e5d0dce2022c0d5c9ed9a15e425335_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
