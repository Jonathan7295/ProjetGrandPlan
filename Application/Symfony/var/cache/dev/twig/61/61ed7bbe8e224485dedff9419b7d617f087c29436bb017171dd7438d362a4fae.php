<?php

/* base.html.twig.twig */
class __TwigTemplate_74f4b341eed4535da03c4f50aaa092d00e71c218cf4a3ab09a6bf3fb7d77aef4 extends Twig_Template
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
        $__internal_e1e053693c7eb2041f73adda615df72a977bc15b6253254899675fbdf565e064 = $this->env->getExtension("native_profiler");
        $__internal_e1e053693c7eb2041f73adda615df72a977bc15b6253254899675fbdf565e064->enter($__internal_e1e053693c7eb2041f73adda615df72a977bc15b6253254899675fbdf565e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig.twig"));

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
        
        $__internal_e1e053693c7eb2041f73adda615df72a977bc15b6253254899675fbdf565e064->leave($__internal_e1e053693c7eb2041f73adda615df72a977bc15b6253254899675fbdf565e064_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67401ff94d2929b61334d4c1f42268a77c7245e0ec94c36009473aea477cc875 = $this->env->getExtension("native_profiler");
        $__internal_67401ff94d2929b61334d4c1f42268a77c7245e0ec94c36009473aea477cc875->enter($__internal_67401ff94d2929b61334d4c1f42268a77c7245e0ec94c36009473aea477cc875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_67401ff94d2929b61334d4c1f42268a77c7245e0ec94c36009473aea477cc875->leave($__internal_67401ff94d2929b61334d4c1f42268a77c7245e0ec94c36009473aea477cc875_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_654e5c28715e1cc23117214fe87df695f878ba5e656cebfc40eebc4823ef37fb = $this->env->getExtension("native_profiler");
        $__internal_654e5c28715e1cc23117214fe87df695f878ba5e656cebfc40eebc4823ef37fb->enter($__internal_654e5c28715e1cc23117214fe87df695f878ba5e656cebfc40eebc4823ef37fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_654e5c28715e1cc23117214fe87df695f878ba5e656cebfc40eebc4823ef37fb->leave($__internal_654e5c28715e1cc23117214fe87df695f878ba5e656cebfc40eebc4823ef37fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_71f224e87498ddf536770755a029c580fbd1aa1a3c45258d668fa2bfc71891b9 = $this->env->getExtension("native_profiler");
        $__internal_71f224e87498ddf536770755a029c580fbd1aa1a3c45258d668fa2bfc71891b9->enter($__internal_71f224e87498ddf536770755a029c580fbd1aa1a3c45258d668fa2bfc71891b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71f224e87498ddf536770755a029c580fbd1aa1a3c45258d668fa2bfc71891b9->leave($__internal_71f224e87498ddf536770755a029c580fbd1aa1a3c45258d668fa2bfc71891b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93e429b95df0cd4d0af3af1c887e2d98c2a68a63c5df4ea7f037fdb8141d09ef = $this->env->getExtension("native_profiler");
        $__internal_93e429b95df0cd4d0af3af1c887e2d98c2a68a63c5df4ea7f037fdb8141d09ef->enter($__internal_93e429b95df0cd4d0af3af1c887e2d98c2a68a63c5df4ea7f037fdb8141d09ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_93e429b95df0cd4d0af3af1c887e2d98c2a68a63c5df4ea7f037fdb8141d09ef->leave($__internal_93e429b95df0cd4d0af3af1c887e2d98c2a68a63c5df4ea7f037fdb8141d09ef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig.twig";
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
