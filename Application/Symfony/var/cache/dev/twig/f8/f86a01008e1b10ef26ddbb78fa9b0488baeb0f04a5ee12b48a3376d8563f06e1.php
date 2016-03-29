<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e5f716490e8ce2591f5f2d3acbc802b27e003a0a7f1c5277b4d8a527207df4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6157b265b4d695f84a35ed8a60a95c1a9d9cd5b7c9f4fb397654395f8b461318 = $this->env->getExtension("native_profiler");
        $__internal_6157b265b4d695f84a35ed8a60a95c1a9d9cd5b7c9f4fb397654395f8b461318->enter($__internal_6157b265b4d695f84a35ed8a60a95c1a9d9cd5b7c9f4fb397654395f8b461318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6157b265b4d695f84a35ed8a60a95c1a9d9cd5b7c9f4fb397654395f8b461318->leave($__internal_6157b265b4d695f84a35ed8a60a95c1a9d9cd5b7c9f4fb397654395f8b461318_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23ac7af277c5f54e5f2a6bd7627540d3b503518254b22cdc5f245da34950ff0d = $this->env->getExtension("native_profiler");
        $__internal_23ac7af277c5f54e5f2a6bd7627540d3b503518254b22cdc5f245da34950ff0d->enter($__internal_23ac7af277c5f54e5f2a6bd7627540d3b503518254b22cdc5f245da34950ff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_23ac7af277c5f54e5f2a6bd7627540d3b503518254b22cdc5f245da34950ff0d->leave($__internal_23ac7af277c5f54e5f2a6bd7627540d3b503518254b22cdc5f245da34950ff0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
