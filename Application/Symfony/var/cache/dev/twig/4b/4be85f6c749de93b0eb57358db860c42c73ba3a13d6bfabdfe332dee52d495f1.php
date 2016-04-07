<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_fbff030cbfe106999d5ccaf4ea482658a3a1e8480ea47f91ff790518a9cd768d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c7a2a7dea9812a6808ee9d1bc055bd7d6e0884f93fe0c5ad56a793a45fa35339 = $this->env->getExtension("native_profiler");
        $__internal_c7a2a7dea9812a6808ee9d1bc055bd7d6e0884f93fe0c5ad56a793a45fa35339->enter($__internal_c7a2a7dea9812a6808ee9d1bc055bd7d6e0884f93fe0c5ad56a793a45fa35339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a2a7dea9812a6808ee9d1bc055bd7d6e0884f93fe0c5ad56a793a45fa35339->leave($__internal_c7a2a7dea9812a6808ee9d1bc055bd7d6e0884f93fe0c5ad56a793a45fa35339_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e278ef989f83e9169207caab8fbde7c95fa997b9354cd57086b33c1bdd1188fb = $this->env->getExtension("native_profiler");
        $__internal_e278ef989f83e9169207caab8fbde7c95fa997b9354cd57086b33c1bdd1188fb->enter($__internal_e278ef989f83e9169207caab8fbde7c95fa997b9354cd57086b33c1bdd1188fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e278ef989f83e9169207caab8fbde7c95fa997b9354cd57086b33c1bdd1188fb->leave($__internal_e278ef989f83e9169207caab8fbde7c95fa997b9354cd57086b33c1bdd1188fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
