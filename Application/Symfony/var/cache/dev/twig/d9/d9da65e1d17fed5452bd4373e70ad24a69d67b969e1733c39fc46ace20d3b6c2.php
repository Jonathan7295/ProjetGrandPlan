<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_44c0a2b26587148361a65f65b7ac04ca27dd226c9c3a33d20f2c985b4ef0923b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_407391841c4c92753aa665f570821d086e6c0cec06c87d424c416ff1b5ca2889 = $this->env->getExtension("native_profiler");
        $__internal_407391841c4c92753aa665f570821d086e6c0cec06c87d424c416ff1b5ca2889->enter($__internal_407391841c4c92753aa665f570821d086e6c0cec06c87d424c416ff1b5ca2889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_407391841c4c92753aa665f570821d086e6c0cec06c87d424c416ff1b5ca2889->leave($__internal_407391841c4c92753aa665f570821d086e6c0cec06c87d424c416ff1b5ca2889_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3122c1f87fb078eb9c8eb31ba791179d0db2a93a1f1eedf9eea2ee71ec0b2f5e = $this->env->getExtension("native_profiler");
        $__internal_3122c1f87fb078eb9c8eb31ba791179d0db2a93a1f1eedf9eea2ee71ec0b2f5e->enter($__internal_3122c1f87fb078eb9c8eb31ba791179d0db2a93a1f1eedf9eea2ee71ec0b2f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3122c1f87fb078eb9c8eb31ba791179d0db2a93a1f1eedf9eea2ee71ec0b2f5e->leave($__internal_3122c1f87fb078eb9c8eb31ba791179d0db2a93a1f1eedf9eea2ee71ec0b2f5e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
