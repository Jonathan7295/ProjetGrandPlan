<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3cd7102caaf7a617eb0d14e9ec65c680f971141d718c0eefab6b96b4cb8b86fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_75dece5e4f63e3adcef3b3b34cc894ebcfff9e4798c8903704b0395669466608 = $this->env->getExtension("native_profiler");
        $__internal_75dece5e4f63e3adcef3b3b34cc894ebcfff9e4798c8903704b0395669466608->enter($__internal_75dece5e4f63e3adcef3b3b34cc894ebcfff9e4798c8903704b0395669466608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75dece5e4f63e3adcef3b3b34cc894ebcfff9e4798c8903704b0395669466608->leave($__internal_75dece5e4f63e3adcef3b3b34cc894ebcfff9e4798c8903704b0395669466608_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05b55286d7974e75425e406c772a81af5ced556f7ecc5cf2c265c31f80935818 = $this->env->getExtension("native_profiler");
        $__internal_05b55286d7974e75425e406c772a81af5ced556f7ecc5cf2c265c31f80935818->enter($__internal_05b55286d7974e75425e406c772a81af5ced556f7ecc5cf2c265c31f80935818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_05b55286d7974e75425e406c772a81af5ced556f7ecc5cf2c265c31f80935818->leave($__internal_05b55286d7974e75425e406c772a81af5ced556f7ecc5cf2c265c31f80935818_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
