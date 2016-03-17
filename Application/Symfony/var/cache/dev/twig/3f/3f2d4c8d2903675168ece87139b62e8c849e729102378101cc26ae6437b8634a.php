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
        $__internal_7e586c4595ab94e4958e7302e0609a4cb47758f5a13a81c192d0d120a97fcd39 = $this->env->getExtension("native_profiler");
        $__internal_7e586c4595ab94e4958e7302e0609a4cb47758f5a13a81c192d0d120a97fcd39->enter($__internal_7e586c4595ab94e4958e7302e0609a4cb47758f5a13a81c192d0d120a97fcd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7e586c4595ab94e4958e7302e0609a4cb47758f5a13a81c192d0d120a97fcd39->leave($__internal_7e586c4595ab94e4958e7302e0609a4cb47758f5a13a81c192d0d120a97fcd39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a131289fe0ba027ff7d6ec52dd43fae5cfaea3f408e3b06b449cf6f8064f86a = $this->env->getExtension("native_profiler");
        $__internal_6a131289fe0ba027ff7d6ec52dd43fae5cfaea3f408e3b06b449cf6f8064f86a->enter($__internal_6a131289fe0ba027ff7d6ec52dd43fae5cfaea3f408e3b06b449cf6f8064f86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6a131289fe0ba027ff7d6ec52dd43fae5cfaea3f408e3b06b449cf6f8064f86a->leave($__internal_6a131289fe0ba027ff7d6ec52dd43fae5cfaea3f408e3b06b449cf6f8064f86a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d452615006f94a7f56244a6f1a958d83031b7bd17d5d852623525b389ce9061 = $this->env->getExtension("native_profiler");
        $__internal_4d452615006f94a7f56244a6f1a958d83031b7bd17d5d852623525b389ce9061->enter($__internal_4d452615006f94a7f56244a6f1a958d83031b7bd17d5d852623525b389ce9061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d452615006f94a7f56244a6f1a958d83031b7bd17d5d852623525b389ce9061->leave($__internal_4d452615006f94a7f56244a6f1a958d83031b7bd17d5d852623525b389ce9061_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2703b4a2360bdd811d78468619e5174b27a6e57da9182e40d1f18a9fabee8da8 = $this->env->getExtension("native_profiler");
        $__internal_2703b4a2360bdd811d78468619e5174b27a6e57da9182e40d1f18a9fabee8da8->enter($__internal_2703b4a2360bdd811d78468619e5174b27a6e57da9182e40d1f18a9fabee8da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2703b4a2360bdd811d78468619e5174b27a6e57da9182e40d1f18a9fabee8da8->leave($__internal_2703b4a2360bdd811d78468619e5174b27a6e57da9182e40d1f18a9fabee8da8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_327b1d2d297471f6a92110d2fbb3a937b0fb2421cc106db69e35fb9a44922b07 = $this->env->getExtension("native_profiler");
        $__internal_327b1d2d297471f6a92110d2fbb3a937b0fb2421cc106db69e35fb9a44922b07->enter($__internal_327b1d2d297471f6a92110d2fbb3a937b0fb2421cc106db69e35fb9a44922b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_327b1d2d297471f6a92110d2fbb3a937b0fb2421cc106db69e35fb9a44922b07->leave($__internal_327b1d2d297471f6a92110d2fbb3a937b0fb2421cc106db69e35fb9a44922b07_prof);

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
