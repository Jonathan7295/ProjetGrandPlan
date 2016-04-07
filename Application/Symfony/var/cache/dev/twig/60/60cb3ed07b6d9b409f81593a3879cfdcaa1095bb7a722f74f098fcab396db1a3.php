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
        $__internal_12a0993b5a7a11590d49938997ddfaccd46c45a7f64a5649a03c158fbf1f8056 = $this->env->getExtension("native_profiler");
        $__internal_12a0993b5a7a11590d49938997ddfaccd46c45a7f64a5649a03c158fbf1f8056->enter($__internal_12a0993b5a7a11590d49938997ddfaccd46c45a7f64a5649a03c158fbf1f8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig.twig"));

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
        
        $__internal_12a0993b5a7a11590d49938997ddfaccd46c45a7f64a5649a03c158fbf1f8056->leave($__internal_12a0993b5a7a11590d49938997ddfaccd46c45a7f64a5649a03c158fbf1f8056_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d385edae283cd2f0c3fa925f67f8c17c393779c0c13413f9bee67d794efb29d = $this->env->getExtension("native_profiler");
        $__internal_8d385edae283cd2f0c3fa925f67f8c17c393779c0c13413f9bee67d794efb29d->enter($__internal_8d385edae283cd2f0c3fa925f67f8c17c393779c0c13413f9bee67d794efb29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8d385edae283cd2f0c3fa925f67f8c17c393779c0c13413f9bee67d794efb29d->leave($__internal_8d385edae283cd2f0c3fa925f67f8c17c393779c0c13413f9bee67d794efb29d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d38e6ec0e37776fe6fcb899a466f26be75e63f3ffbbd53b63efd5494a388bf0b = $this->env->getExtension("native_profiler");
        $__internal_d38e6ec0e37776fe6fcb899a466f26be75e63f3ffbbd53b63efd5494a388bf0b->enter($__internal_d38e6ec0e37776fe6fcb899a466f26be75e63f3ffbbd53b63efd5494a388bf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d38e6ec0e37776fe6fcb899a466f26be75e63f3ffbbd53b63efd5494a388bf0b->leave($__internal_d38e6ec0e37776fe6fcb899a466f26be75e63f3ffbbd53b63efd5494a388bf0b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5351f0542e4274a2129ada304ccc75a30d98e60e1f156584ef7e796cd28eb4f0 = $this->env->getExtension("native_profiler");
        $__internal_5351f0542e4274a2129ada304ccc75a30d98e60e1f156584ef7e796cd28eb4f0->enter($__internal_5351f0542e4274a2129ada304ccc75a30d98e60e1f156584ef7e796cd28eb4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5351f0542e4274a2129ada304ccc75a30d98e60e1f156584ef7e796cd28eb4f0->leave($__internal_5351f0542e4274a2129ada304ccc75a30d98e60e1f156584ef7e796cd28eb4f0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dffb5a648db437fd379dc35df0c695d5af4f86ac7dcfee35505f02092350b4b9 = $this->env->getExtension("native_profiler");
        $__internal_dffb5a648db437fd379dc35df0c695d5af4f86ac7dcfee35505f02092350b4b9->enter($__internal_dffb5a648db437fd379dc35df0c695d5af4f86ac7dcfee35505f02092350b4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dffb5a648db437fd379dc35df0c695d5af4f86ac7dcfee35505f02092350b4b9->leave($__internal_dffb5a648db437fd379dc35df0c695d5af4f86ac7dcfee35505f02092350b4b9_prof);

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
