<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_08eb38bfdd0801f588b715ca5505a917678e7d19a19161cfce3ec910f845a8d5 extends Twig_Template
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
        $__internal_23953e986923f3bb353cc926c599b0d2d87a8ab20be1482733c700d131c3c892 = $this->env->getExtension("native_profiler");
        $__internal_23953e986923f3bb353cc926c599b0d2d87a8ab20be1482733c700d131c3c892->enter($__internal_23953e986923f3bb353cc926c599b0d2d87a8ab20be1482733c700d131c3c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23953e986923f3bb353cc926c599b0d2d87a8ab20be1482733c700d131c3c892->leave($__internal_23953e986923f3bb353cc926c599b0d2d87a8ab20be1482733c700d131c3c892_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99be51bec4db65a1de77dab00abbe383ec47a4457f5a7b6ab6b98759f21384c5 = $this->env->getExtension("native_profiler");
        $__internal_99be51bec4db65a1de77dab00abbe383ec47a4457f5a7b6ab6b98759f21384c5->enter($__internal_99be51bec4db65a1de77dab00abbe383ec47a4457f5a7b6ab6b98759f21384c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_99be51bec4db65a1de77dab00abbe383ec47a4457f5a7b6ab6b98759f21384c5->leave($__internal_99be51bec4db65a1de77dab00abbe383ec47a4457f5a7b6ab6b98759f21384c5_prof);

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
