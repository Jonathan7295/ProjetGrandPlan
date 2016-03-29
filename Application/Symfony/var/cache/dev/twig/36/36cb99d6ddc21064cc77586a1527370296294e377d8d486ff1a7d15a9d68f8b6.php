<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3030ddc2849541761e48d2f83e841b54011252473ee1fb0b309ab6bb2efa8ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3570e16fc8ee511b798f6f90c53cd150e3b873d0bc92ada577fa2cee3078dc97 = $this->env->getExtension("native_profiler");
        $__internal_3570e16fc8ee511b798f6f90c53cd150e3b873d0bc92ada577fa2cee3078dc97->enter($__internal_3570e16fc8ee511b798f6f90c53cd150e3b873d0bc92ada577fa2cee3078dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3570e16fc8ee511b798f6f90c53cd150e3b873d0bc92ada577fa2cee3078dc97->leave($__internal_3570e16fc8ee511b798f6f90c53cd150e3b873d0bc92ada577fa2cee3078dc97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b09738c058a5393c00237b86bb2242181eb4f8431444075d81b8b05be035817 = $this->env->getExtension("native_profiler");
        $__internal_0b09738c058a5393c00237b86bb2242181eb4f8431444075d81b8b05be035817->enter($__internal_0b09738c058a5393c00237b86bb2242181eb4f8431444075d81b8b05be035817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0b09738c058a5393c00237b86bb2242181eb4f8431444075d81b8b05be035817->leave($__internal_0b09738c058a5393c00237b86bb2242181eb4f8431444075d81b8b05be035817_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
