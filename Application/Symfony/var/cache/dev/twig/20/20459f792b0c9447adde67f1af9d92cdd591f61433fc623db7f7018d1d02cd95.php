<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_90590d0b9253a6ab9aee3fef7e5a385a30e5264f508e1c0311900556b151971c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2675f89c519539d83ce5e26fdbec5c95d9e76be33abd0cacb1fa186453701f2f = $this->env->getExtension("native_profiler");
        $__internal_2675f89c519539d83ce5e26fdbec5c95d9e76be33abd0cacb1fa186453701f2f->enter($__internal_2675f89c519539d83ce5e26fdbec5c95d9e76be33abd0cacb1fa186453701f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2675f89c519539d83ce5e26fdbec5c95d9e76be33abd0cacb1fa186453701f2f->leave($__internal_2675f89c519539d83ce5e26fdbec5c95d9e76be33abd0cacb1fa186453701f2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c854910b54da4d020791e68d337b8340b45f458ee19bb2f1c573932da75bc2b = $this->env->getExtension("native_profiler");
        $__internal_9c854910b54da4d020791e68d337b8340b45f458ee19bb2f1c573932da75bc2b->enter($__internal_9c854910b54da4d020791e68d337b8340b45f458ee19bb2f1c573932da75bc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9c854910b54da4d020791e68d337b8340b45f458ee19bb2f1c573932da75bc2b->leave($__internal_9c854910b54da4d020791e68d337b8340b45f458ee19bb2f1c573932da75bc2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
