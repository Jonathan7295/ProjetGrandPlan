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
        $__internal_66af0aecbfb34aee016a6fab88f860fc791272252349ec96f0b3db99a8d6322a = $this->env->getExtension("native_profiler");
        $__internal_66af0aecbfb34aee016a6fab88f860fc791272252349ec96f0b3db99a8d6322a->enter($__internal_66af0aecbfb34aee016a6fab88f860fc791272252349ec96f0b3db99a8d6322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_66af0aecbfb34aee016a6fab88f860fc791272252349ec96f0b3db99a8d6322a->leave($__internal_66af0aecbfb34aee016a6fab88f860fc791272252349ec96f0b3db99a8d6322a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8872da2f02effaa93b71112ebaac1b0fe7346eec210805ab0a35739534d14b7 = $this->env->getExtension("native_profiler");
        $__internal_f8872da2f02effaa93b71112ebaac1b0fe7346eec210805ab0a35739534d14b7->enter($__internal_f8872da2f02effaa93b71112ebaac1b0fe7346eec210805ab0a35739534d14b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8872da2f02effaa93b71112ebaac1b0fe7346eec210805ab0a35739534d14b7->leave($__internal_f8872da2f02effaa93b71112ebaac1b0fe7346eec210805ab0a35739534d14b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_699d0cc56e2db6af14f98f0e71f3d58afbfc81812af925eeefe577eff8374ce2 = $this->env->getExtension("native_profiler");
        $__internal_699d0cc56e2db6af14f98f0e71f3d58afbfc81812af925eeefe577eff8374ce2->enter($__internal_699d0cc56e2db6af14f98f0e71f3d58afbfc81812af925eeefe577eff8374ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_699d0cc56e2db6af14f98f0e71f3d58afbfc81812af925eeefe577eff8374ce2->leave($__internal_699d0cc56e2db6af14f98f0e71f3d58afbfc81812af925eeefe577eff8374ce2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_758f4a89b08dcb0d2c77208e22b71c453bb342e87f33e3814ef51dc5df42fe56 = $this->env->getExtension("native_profiler");
        $__internal_758f4a89b08dcb0d2c77208e22b71c453bb342e87f33e3814ef51dc5df42fe56->enter($__internal_758f4a89b08dcb0d2c77208e22b71c453bb342e87f33e3814ef51dc5df42fe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_758f4a89b08dcb0d2c77208e22b71c453bb342e87f33e3814ef51dc5df42fe56->leave($__internal_758f4a89b08dcb0d2c77208e22b71c453bb342e87f33e3814ef51dc5df42fe56_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f22ea85b65bcd75a68cece35326cda14268e875e1d2b0fcebddf63e6c324e3b9 = $this->env->getExtension("native_profiler");
        $__internal_f22ea85b65bcd75a68cece35326cda14268e875e1d2b0fcebddf63e6c324e3b9->enter($__internal_f22ea85b65bcd75a68cece35326cda14268e875e1d2b0fcebddf63e6c324e3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f22ea85b65bcd75a68cece35326cda14268e875e1d2b0fcebddf63e6c324e3b9->leave($__internal_f22ea85b65bcd75a68cece35326cda14268e875e1d2b0fcebddf63e6c324e3b9_prof);

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
