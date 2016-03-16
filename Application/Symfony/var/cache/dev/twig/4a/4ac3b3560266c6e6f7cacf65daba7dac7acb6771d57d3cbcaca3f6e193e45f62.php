<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5327b402afcc84b4a668fa71ef1b5f3508350f4ea0c3aa51985554dd685e05d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7adf41d9efa3f4d65931e704426d56316731728d8d86fb068e5840d37f84f362 = $this->env->getExtension("native_profiler");
        $__internal_7adf41d9efa3f4d65931e704426d56316731728d8d86fb068e5840d37f84f362->enter($__internal_7adf41d9efa3f4d65931e704426d56316731728d8d86fb068e5840d37f84f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7adf41d9efa3f4d65931e704426d56316731728d8d86fb068e5840d37f84f362->leave($__internal_7adf41d9efa3f4d65931e704426d56316731728d8d86fb068e5840d37f84f362_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d869d58d8eef3e715a60fdfa582b15c1dc43ebb6ff1cdb51a5fa5fe49793340 = $this->env->getExtension("native_profiler");
        $__internal_6d869d58d8eef3e715a60fdfa582b15c1dc43ebb6ff1cdb51a5fa5fe49793340->enter($__internal_6d869d58d8eef3e715a60fdfa582b15c1dc43ebb6ff1cdb51a5fa5fe49793340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6d869d58d8eef3e715a60fdfa582b15c1dc43ebb6ff1cdb51a5fa5fe49793340->leave($__internal_6d869d58d8eef3e715a60fdfa582b15c1dc43ebb6ff1cdb51a5fa5fe49793340_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
