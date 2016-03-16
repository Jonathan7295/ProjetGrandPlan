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
        $__internal_facbae8b8cd302c4b9ee91a1a863de281fa68501c9e5d1bd51bf76919fa5e3b3 = $this->env->getExtension("native_profiler");
        $__internal_facbae8b8cd302c4b9ee91a1a863de281fa68501c9e5d1bd51bf76919fa5e3b3->enter($__internal_facbae8b8cd302c4b9ee91a1a863de281fa68501c9e5d1bd51bf76919fa5e3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_facbae8b8cd302c4b9ee91a1a863de281fa68501c9e5d1bd51bf76919fa5e3b3->leave($__internal_facbae8b8cd302c4b9ee91a1a863de281fa68501c9e5d1bd51bf76919fa5e3b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79f6eec5ea3bbc8359bfccf9ee01cc6775669b35583f20da5ca1670d0874c012 = $this->env->getExtension("native_profiler");
        $__internal_79f6eec5ea3bbc8359bfccf9ee01cc6775669b35583f20da5ca1670d0874c012->enter($__internal_79f6eec5ea3bbc8359bfccf9ee01cc6775669b35583f20da5ca1670d0874c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79f6eec5ea3bbc8359bfccf9ee01cc6775669b35583f20da5ca1670d0874c012->leave($__internal_79f6eec5ea3bbc8359bfccf9ee01cc6775669b35583f20da5ca1670d0874c012_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2b28eb9bd6cf0a170e9dc711d483d5524e08b51a6d949bab34ccddcca4a8515 = $this->env->getExtension("native_profiler");
        $__internal_a2b28eb9bd6cf0a170e9dc711d483d5524e08b51a6d949bab34ccddcca4a8515->enter($__internal_a2b28eb9bd6cf0a170e9dc711d483d5524e08b51a6d949bab34ccddcca4a8515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2b28eb9bd6cf0a170e9dc711d483d5524e08b51a6d949bab34ccddcca4a8515->leave($__internal_a2b28eb9bd6cf0a170e9dc711d483d5524e08b51a6d949bab34ccddcca4a8515_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f6693d39bc5fdd805dcee1850522c6ee54ccd1ecf61d982701a42e7b33ae6e7 = $this->env->getExtension("native_profiler");
        $__internal_7f6693d39bc5fdd805dcee1850522c6ee54ccd1ecf61d982701a42e7b33ae6e7->enter($__internal_7f6693d39bc5fdd805dcee1850522c6ee54ccd1ecf61d982701a42e7b33ae6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f6693d39bc5fdd805dcee1850522c6ee54ccd1ecf61d982701a42e7b33ae6e7->leave($__internal_7f6693d39bc5fdd805dcee1850522c6ee54ccd1ecf61d982701a42e7b33ae6e7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a6e0d39be0255d49e2b11065c85428c1fcace342a5c7704e1cef747eafd8cfd = $this->env->getExtension("native_profiler");
        $__internal_5a6e0d39be0255d49e2b11065c85428c1fcace342a5c7704e1cef747eafd8cfd->enter($__internal_5a6e0d39be0255d49e2b11065c85428c1fcace342a5c7704e1cef747eafd8cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a6e0d39be0255d49e2b11065c85428c1fcace342a5c7704e1cef747eafd8cfd->leave($__internal_5a6e0d39be0255d49e2b11065c85428c1fcace342a5c7704e1cef747eafd8cfd_prof);

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
