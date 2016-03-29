<?php

/* ::base.html.twig.twig */
class __TwigTemplate_c5b8527f8283246e86d7f4b4dac512a51985424d1ec007fe359703748576cdf2 extends Twig_Template
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
        $__internal_7e0b7b79ceb4586562704f1ab9a005fd1a6644e8e550aa364b6a8a4e8bfb99d4 = $this->env->getExtension("native_profiler");
        $__internal_7e0b7b79ceb4586562704f1ab9a005fd1a6644e8e550aa364b6a8a4e8bfb99d4->enter($__internal_7e0b7b79ceb4586562704f1ab9a005fd1a6644e8e550aa364b6a8a4e8bfb99d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig.twig"));

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
        
        $__internal_7e0b7b79ceb4586562704f1ab9a005fd1a6644e8e550aa364b6a8a4e8bfb99d4->leave($__internal_7e0b7b79ceb4586562704f1ab9a005fd1a6644e8e550aa364b6a8a4e8bfb99d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2ca3f99e02a11e5954181e1cd49a0a766afe88b167e73c6ec0bdb4a4fe80c23 = $this->env->getExtension("native_profiler");
        $__internal_d2ca3f99e02a11e5954181e1cd49a0a766afe88b167e73c6ec0bdb4a4fe80c23->enter($__internal_d2ca3f99e02a11e5954181e1cd49a0a766afe88b167e73c6ec0bdb4a4fe80c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2ca3f99e02a11e5954181e1cd49a0a766afe88b167e73c6ec0bdb4a4fe80c23->leave($__internal_d2ca3f99e02a11e5954181e1cd49a0a766afe88b167e73c6ec0bdb4a4fe80c23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55863ced0897e2255bf6a1061bb5f76f24c7ab9455e8753de9b58d3a415b9cfb = $this->env->getExtension("native_profiler");
        $__internal_55863ced0897e2255bf6a1061bb5f76f24c7ab9455e8753de9b58d3a415b9cfb->enter($__internal_55863ced0897e2255bf6a1061bb5f76f24c7ab9455e8753de9b58d3a415b9cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55863ced0897e2255bf6a1061bb5f76f24c7ab9455e8753de9b58d3a415b9cfb->leave($__internal_55863ced0897e2255bf6a1061bb5f76f24c7ab9455e8753de9b58d3a415b9cfb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad5324867e56b35318491b97b6ca921b89257f7b45f06ef1cfc097cb96002c1a = $this->env->getExtension("native_profiler");
        $__internal_ad5324867e56b35318491b97b6ca921b89257f7b45f06ef1cfc097cb96002c1a->enter($__internal_ad5324867e56b35318491b97b6ca921b89257f7b45f06ef1cfc097cb96002c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad5324867e56b35318491b97b6ca921b89257f7b45f06ef1cfc097cb96002c1a->leave($__internal_ad5324867e56b35318491b97b6ca921b89257f7b45f06ef1cfc097cb96002c1a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1636ed6f31fe503e93458e6e186aa0c486fec58fa495452be58313f0e0bee16b = $this->env->getExtension("native_profiler");
        $__internal_1636ed6f31fe503e93458e6e186aa0c486fec58fa495452be58313f0e0bee16b->enter($__internal_1636ed6f31fe503e93458e6e186aa0c486fec58fa495452be58313f0e0bee16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1636ed6f31fe503e93458e6e186aa0c486fec58fa495452be58313f0e0bee16b->leave($__internal_1636ed6f31fe503e93458e6e186aa0c486fec58fa495452be58313f0e0bee16b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig.twig";
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
