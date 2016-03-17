<?php

/* base.html.twig */
class __TwigTemplate_551cf9e067eb7023366192357609329c705d79651289d47635a3838728a42e63 extends Twig_Template
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
        $__internal_1cc7ef1c1f71c28dc4e90e55e530f3c1ba17a715072ef31f189d838f00a70ace = $this->env->getExtension("native_profiler");
        $__internal_1cc7ef1c1f71c28dc4e90e55e530f3c1ba17a715072ef31f189d838f00a70ace->enter($__internal_1cc7ef1c1f71c28dc4e90e55e530f3c1ba17a715072ef31f189d838f00a70ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1cc7ef1c1f71c28dc4e90e55e530f3c1ba17a715072ef31f189d838f00a70ace->leave($__internal_1cc7ef1c1f71c28dc4e90e55e530f3c1ba17a715072ef31f189d838f00a70ace_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f0d02bba62c50eb6cdec51ef20056fec1008192ea259b4301c27f27b450b799 = $this->env->getExtension("native_profiler");
        $__internal_6f0d02bba62c50eb6cdec51ef20056fec1008192ea259b4301c27f27b450b799->enter($__internal_6f0d02bba62c50eb6cdec51ef20056fec1008192ea259b4301c27f27b450b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f0d02bba62c50eb6cdec51ef20056fec1008192ea259b4301c27f27b450b799->leave($__internal_6f0d02bba62c50eb6cdec51ef20056fec1008192ea259b4301c27f27b450b799_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bbccec8bd6dac9c5d9ea5a75108e241adb0abe78fe9c03a0524149cf539258b = $this->env->getExtension("native_profiler");
        $__internal_6bbccec8bd6dac9c5d9ea5a75108e241adb0abe78fe9c03a0524149cf539258b->enter($__internal_6bbccec8bd6dac9c5d9ea5a75108e241adb0abe78fe9c03a0524149cf539258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6bbccec8bd6dac9c5d9ea5a75108e241adb0abe78fe9c03a0524149cf539258b->leave($__internal_6bbccec8bd6dac9c5d9ea5a75108e241adb0abe78fe9c03a0524149cf539258b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_273bee5ab0e159a63f388fa814e6e4d7e4d2afe493bc33fc1497229e80ff0569 = $this->env->getExtension("native_profiler");
        $__internal_273bee5ab0e159a63f388fa814e6e4d7e4d2afe493bc33fc1497229e80ff0569->enter($__internal_273bee5ab0e159a63f388fa814e6e4d7e4d2afe493bc33fc1497229e80ff0569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_273bee5ab0e159a63f388fa814e6e4d7e4d2afe493bc33fc1497229e80ff0569->leave($__internal_273bee5ab0e159a63f388fa814e6e4d7e4d2afe493bc33fc1497229e80ff0569_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_802099d1f9edbba09b65bdf1080ac8ae10648ebe31eb24b3674573b401e5c12b = $this->env->getExtension("native_profiler");
        $__internal_802099d1f9edbba09b65bdf1080ac8ae10648ebe31eb24b3674573b401e5c12b->enter($__internal_802099d1f9edbba09b65bdf1080ac8ae10648ebe31eb24b3674573b401e5c12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_802099d1f9edbba09b65bdf1080ac8ae10648ebe31eb24b3674573b401e5c12b->leave($__internal_802099d1f9edbba09b65bdf1080ac8ae10648ebe31eb24b3674573b401e5c12b_prof);

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
