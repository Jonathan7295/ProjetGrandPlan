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
        $__internal_fbf3617f234cb9cbe80b0fe8ca1c573a8b506c081535df8b5aad78add3adeff1 = $this->env->getExtension("native_profiler");
        $__internal_fbf3617f234cb9cbe80b0fe8ca1c573a8b506c081535df8b5aad78add3adeff1->enter($__internal_fbf3617f234cb9cbe80b0fe8ca1c573a8b506c081535df8b5aad78add3adeff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf3617f234cb9cbe80b0fe8ca1c573a8b506c081535df8b5aad78add3adeff1->leave($__internal_fbf3617f234cb9cbe80b0fe8ca1c573a8b506c081535df8b5aad78add3adeff1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1a1106b5b43176774a309aa5648b12f425fc0b87059c55068421bfc51d19e15 = $this->env->getExtension("native_profiler");
        $__internal_b1a1106b5b43176774a309aa5648b12f425fc0b87059c55068421bfc51d19e15->enter($__internal_b1a1106b5b43176774a309aa5648b12f425fc0b87059c55068421bfc51d19e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b1a1106b5b43176774a309aa5648b12f425fc0b87059c55068421bfc51d19e15->leave($__internal_b1a1106b5b43176774a309aa5648b12f425fc0b87059c55068421bfc51d19e15_prof);

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
