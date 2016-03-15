<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_717253ee85269bd2ea13abd6cb14ea7680015535d3bc0c647bf3587f1b038765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9eebb716b128c8704e272d13d60eee6871a54cdd8eaa0179eb8436265e69fa5a = $this->env->getExtension("native_profiler");
        $__internal_9eebb716b128c8704e272d13d60eee6871a54cdd8eaa0179eb8436265e69fa5a->enter($__internal_9eebb716b128c8704e272d13d60eee6871a54cdd8eaa0179eb8436265e69fa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eebb716b128c8704e272d13d60eee6871a54cdd8eaa0179eb8436265e69fa5a->leave($__internal_9eebb716b128c8704e272d13d60eee6871a54cdd8eaa0179eb8436265e69fa5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a26eb3a94714fc56c6e6abacf5d80ceed778149c32761d25567e3f6b29fd35b6 = $this->env->getExtension("native_profiler");
        $__internal_a26eb3a94714fc56c6e6abacf5d80ceed778149c32761d25567e3f6b29fd35b6->enter($__internal_a26eb3a94714fc56c6e6abacf5d80ceed778149c32761d25567e3f6b29fd35b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a26eb3a94714fc56c6e6abacf5d80ceed778149c32761d25567e3f6b29fd35b6->leave($__internal_a26eb3a94714fc56c6e6abacf5d80ceed778149c32761d25567e3f6b29fd35b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
