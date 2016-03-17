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
        $__internal_06b24f49264540d82b7c5c1a047d3e8121fa70d5bd72ca3497835b12095a1f6b = $this->env->getExtension("native_profiler");
        $__internal_06b24f49264540d82b7c5c1a047d3e8121fa70d5bd72ca3497835b12095a1f6b->enter($__internal_06b24f49264540d82b7c5c1a047d3e8121fa70d5bd72ca3497835b12095a1f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b24f49264540d82b7c5c1a047d3e8121fa70d5bd72ca3497835b12095a1f6b->leave($__internal_06b24f49264540d82b7c5c1a047d3e8121fa70d5bd72ca3497835b12095a1f6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53203e27865b8ade34b5545769d5ef6a6b73b40794b4c2c6b6ade83bd8a8d4cb = $this->env->getExtension("native_profiler");
        $__internal_53203e27865b8ade34b5545769d5ef6a6b73b40794b4c2c6b6ade83bd8a8d4cb->enter($__internal_53203e27865b8ade34b5545769d5ef6a6b73b40794b4c2c6b6ade83bd8a8d4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_53203e27865b8ade34b5545769d5ef6a6b73b40794b4c2c6b6ade83bd8a8d4cb->leave($__internal_53203e27865b8ade34b5545769d5ef6a6b73b40794b4c2c6b6ade83bd8a8d4cb_prof);

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
