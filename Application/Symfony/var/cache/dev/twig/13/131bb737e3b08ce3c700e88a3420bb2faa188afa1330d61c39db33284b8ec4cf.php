<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_043c772ab1045bf6b651915739ab8a2b34c278c409b9925ad33c71e5e662fe1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a98b0fcb9b225bcab042e110f33226142785d188f9292c2bbce0b2663288579e = $this->env->getExtension("native_profiler");
        $__internal_a98b0fcb9b225bcab042e110f33226142785d188f9292c2bbce0b2663288579e->enter($__internal_a98b0fcb9b225bcab042e110f33226142785d188f9292c2bbce0b2663288579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98b0fcb9b225bcab042e110f33226142785d188f9292c2bbce0b2663288579e->leave($__internal_a98b0fcb9b225bcab042e110f33226142785d188f9292c2bbce0b2663288579e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95d77c862170cecbff50903544e37edbfcb50a81685344ac40c585c9cf61d8c3 = $this->env->getExtension("native_profiler");
        $__internal_95d77c862170cecbff50903544e37edbfcb50a81685344ac40c585c9cf61d8c3->enter($__internal_95d77c862170cecbff50903544e37edbfcb50a81685344ac40c585c9cf61d8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_95d77c862170cecbff50903544e37edbfcb50a81685344ac40c585c9cf61d8c3->leave($__internal_95d77c862170cecbff50903544e37edbfcb50a81685344ac40c585c9cf61d8c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
