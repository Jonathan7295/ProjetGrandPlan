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
        $__internal_7026a4fc5ef90f81ea310dd441710df39196503555e3048454cfeeeff26d4ed4 = $this->env->getExtension("native_profiler");
        $__internal_7026a4fc5ef90f81ea310dd441710df39196503555e3048454cfeeeff26d4ed4->enter($__internal_7026a4fc5ef90f81ea310dd441710df39196503555e3048454cfeeeff26d4ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7026a4fc5ef90f81ea310dd441710df39196503555e3048454cfeeeff26d4ed4->leave($__internal_7026a4fc5ef90f81ea310dd441710df39196503555e3048454cfeeeff26d4ed4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22acf27ea3a764157e56caff2a13d9206dc7e56233fbb0a125417500a62f1e24 = $this->env->getExtension("native_profiler");
        $__internal_22acf27ea3a764157e56caff2a13d9206dc7e56233fbb0a125417500a62f1e24->enter($__internal_22acf27ea3a764157e56caff2a13d9206dc7e56233fbb0a125417500a62f1e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_22acf27ea3a764157e56caff2a13d9206dc7e56233fbb0a125417500a62f1e24->leave($__internal_22acf27ea3a764157e56caff2a13d9206dc7e56233fbb0a125417500a62f1e24_prof);

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
