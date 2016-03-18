<?php

/* ::base.html.twig */
class __TwigTemplate_7ae02706e6817483498a98aebca50751293e98c85701dfa20b4eb4c5947fa6a4 extends Twig_Template
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
        $__internal_c99af304690d27436cf4d513a64a91452802db9c14e62de398ed9d0e8979079f = $this->env->getExtension("native_profiler");
        $__internal_c99af304690d27436cf4d513a64a91452802db9c14e62de398ed9d0e8979079f->enter($__internal_c99af304690d27436cf4d513a64a91452802db9c14e62de398ed9d0e8979079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c99af304690d27436cf4d513a64a91452802db9c14e62de398ed9d0e8979079f->leave($__internal_c99af304690d27436cf4d513a64a91452802db9c14e62de398ed9d0e8979079f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be234f2ae048e6d212e37882ddb056363e6ccf9ea251341b2c36fcdea1d86ee0 = $this->env->getExtension("native_profiler");
        $__internal_be234f2ae048e6d212e37882ddb056363e6ccf9ea251341b2c36fcdea1d86ee0->enter($__internal_be234f2ae048e6d212e37882ddb056363e6ccf9ea251341b2c36fcdea1d86ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be234f2ae048e6d212e37882ddb056363e6ccf9ea251341b2c36fcdea1d86ee0->leave($__internal_be234f2ae048e6d212e37882ddb056363e6ccf9ea251341b2c36fcdea1d86ee0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6cb33936c99a62342d8e8a8157e3268279c203f99dbd804d73fe4311de9ff5c = $this->env->getExtension("native_profiler");
        $__internal_a6cb33936c99a62342d8e8a8157e3268279c203f99dbd804d73fe4311de9ff5c->enter($__internal_a6cb33936c99a62342d8e8a8157e3268279c203f99dbd804d73fe4311de9ff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a6cb33936c99a62342d8e8a8157e3268279c203f99dbd804d73fe4311de9ff5c->leave($__internal_a6cb33936c99a62342d8e8a8157e3268279c203f99dbd804d73fe4311de9ff5c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdeaa60cd1316514bd5aeb3acfee18690f7f47db458135eba6e5aee2502d52f8 = $this->env->getExtension("native_profiler");
        $__internal_fdeaa60cd1316514bd5aeb3acfee18690f7f47db458135eba6e5aee2502d52f8->enter($__internal_fdeaa60cd1316514bd5aeb3acfee18690f7f47db458135eba6e5aee2502d52f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdeaa60cd1316514bd5aeb3acfee18690f7f47db458135eba6e5aee2502d52f8->leave($__internal_fdeaa60cd1316514bd5aeb3acfee18690f7f47db458135eba6e5aee2502d52f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06f23408beb7f04300230a9452555a47c6830d016736c5c8a33bad124c0914a6 = $this->env->getExtension("native_profiler");
        $__internal_06f23408beb7f04300230a9452555a47c6830d016736c5c8a33bad124c0914a6->enter($__internal_06f23408beb7f04300230a9452555a47c6830d016736c5c8a33bad124c0914a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06f23408beb7f04300230a9452555a47c6830d016736c5c8a33bad124c0914a6->leave($__internal_06f23408beb7f04300230a9452555a47c6830d016736c5c8a33bad124c0914a6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
