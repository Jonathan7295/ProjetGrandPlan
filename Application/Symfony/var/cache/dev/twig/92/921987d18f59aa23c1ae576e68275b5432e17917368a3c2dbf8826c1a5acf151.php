<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3e414685e82aa3d7845952edfcf57b4d82b3f182166759a6d3433ba3fadf75f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d223948eaa54deca9be3c7ad9b494f501dd5d9ca71f5b7f202774d8276b0dee5 = $this->env->getExtension("native_profiler");
        $__internal_d223948eaa54deca9be3c7ad9b494f501dd5d9ca71f5b7f202774d8276b0dee5->enter($__internal_d223948eaa54deca9be3c7ad9b494f501dd5d9ca71f5b7f202774d8276b0dee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d223948eaa54deca9be3c7ad9b494f501dd5d9ca71f5b7f202774d8276b0dee5->leave($__internal_d223948eaa54deca9be3c7ad9b494f501dd5d9ca71f5b7f202774d8276b0dee5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4ea6cd2c5c4568c42d00a25786b32bb7cd8b11014b268e9af5e272d0fcf1ab1 = $this->env->getExtension("native_profiler");
        $__internal_f4ea6cd2c5c4568c42d00a25786b32bb7cd8b11014b268e9af5e272d0fcf1ab1->enter($__internal_f4ea6cd2c5c4568c42d00a25786b32bb7cd8b11014b268e9af5e272d0fcf1ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f4ea6cd2c5c4568c42d00a25786b32bb7cd8b11014b268e9af5e272d0fcf1ab1->leave($__internal_f4ea6cd2c5c4568c42d00a25786b32bb7cd8b11014b268e9af5e272d0fcf1ab1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
