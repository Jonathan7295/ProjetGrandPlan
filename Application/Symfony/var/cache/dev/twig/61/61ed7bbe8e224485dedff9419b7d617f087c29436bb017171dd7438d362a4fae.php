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
        $__internal_24dc517da5296e42b733b7c0a67ecee145e07291d16f8ddd220a1a1b4e4f41fb = $this->env->getExtension("native_profiler");
        $__internal_24dc517da5296e42b733b7c0a67ecee145e07291d16f8ddd220a1a1b4e4f41fb->enter($__internal_24dc517da5296e42b733b7c0a67ecee145e07291d16f8ddd220a1a1b4e4f41fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig.twig"));

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
        
        $__internal_24dc517da5296e42b733b7c0a67ecee145e07291d16f8ddd220a1a1b4e4f41fb->leave($__internal_24dc517da5296e42b733b7c0a67ecee145e07291d16f8ddd220a1a1b4e4f41fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89ccfca157b91e519dce783b597a23d9843802941334c2b753b76c5cb1f4eee = $this->env->getExtension("native_profiler");
        $__internal_e89ccfca157b91e519dce783b597a23d9843802941334c2b753b76c5cb1f4eee->enter($__internal_e89ccfca157b91e519dce783b597a23d9843802941334c2b753b76c5cb1f4eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e89ccfca157b91e519dce783b597a23d9843802941334c2b753b76c5cb1f4eee->leave($__internal_e89ccfca157b91e519dce783b597a23d9843802941334c2b753b76c5cb1f4eee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca57de22fb7dba8a53d996d89ca2c8b1d86b74dc9263a9c09b0ef484fd2c71f9 = $this->env->getExtension("native_profiler");
        $__internal_ca57de22fb7dba8a53d996d89ca2c8b1d86b74dc9263a9c09b0ef484fd2c71f9->enter($__internal_ca57de22fb7dba8a53d996d89ca2c8b1d86b74dc9263a9c09b0ef484fd2c71f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca57de22fb7dba8a53d996d89ca2c8b1d86b74dc9263a9c09b0ef484fd2c71f9->leave($__internal_ca57de22fb7dba8a53d996d89ca2c8b1d86b74dc9263a9c09b0ef484fd2c71f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a4e781dbca9a667b48b540e4d4bf3af528a6b0b637e0879766d1ac8c4d1a875 = $this->env->getExtension("native_profiler");
        $__internal_1a4e781dbca9a667b48b540e4d4bf3af528a6b0b637e0879766d1ac8c4d1a875->enter($__internal_1a4e781dbca9a667b48b540e4d4bf3af528a6b0b637e0879766d1ac8c4d1a875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a4e781dbca9a667b48b540e4d4bf3af528a6b0b637e0879766d1ac8c4d1a875->leave($__internal_1a4e781dbca9a667b48b540e4d4bf3af528a6b0b637e0879766d1ac8c4d1a875_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b1ff9335c49ee509e870858dcccad28472480e2e6b3b1425d4474282b77bfd6 = $this->env->getExtension("native_profiler");
        $__internal_3b1ff9335c49ee509e870858dcccad28472480e2e6b3b1425d4474282b77bfd6->enter($__internal_3b1ff9335c49ee509e870858dcccad28472480e2e6b3b1425d4474282b77bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b1ff9335c49ee509e870858dcccad28472480e2e6b3b1425d4474282b77bfd6->leave($__internal_3b1ff9335c49ee509e870858dcccad28472480e2e6b3b1425d4474282b77bfd6_prof);

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
