<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_936f021ec0f75b2cf6aa498a7d54badb8502123369c0e6f6a6936f4cebcb9b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_a657c4eca2d40a359c98fac467a0896bc51cdd0565f6a5eca6acd7df927db8cd = $this->env->getExtension("native_profiler");
        $__internal_a657c4eca2d40a359c98fac467a0896bc51cdd0565f6a5eca6acd7df927db8cd->enter($__internal_a657c4eca2d40a359c98fac467a0896bc51cdd0565f6a5eca6acd7df927db8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a657c4eca2d40a359c98fac467a0896bc51cdd0565f6a5eca6acd7df927db8cd->leave($__internal_a657c4eca2d40a359c98fac467a0896bc51cdd0565f6a5eca6acd7df927db8cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8adb3551cdca436bb7efc0aae53932cbd2af9949179ac664c7b6e0050112e129 = $this->env->getExtension("native_profiler");
        $__internal_8adb3551cdca436bb7efc0aae53932cbd2af9949179ac664c7b6e0050112e129->enter($__internal_8adb3551cdca436bb7efc0aae53932cbd2af9949179ac664c7b6e0050112e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8adb3551cdca436bb7efc0aae53932cbd2af9949179ac664c7b6e0050112e129->leave($__internal_8adb3551cdca436bb7efc0aae53932cbd2af9949179ac664c7b6e0050112e129_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
