<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b3385697b004fa4565cd23965af378a47e2f0fdf1e40fc826d628e41b04e5ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b60362c266f6f71556313a6a73a667c6d585bf88c0e793bda4457790fa64400c = $this->env->getExtension("native_profiler");
        $__internal_b60362c266f6f71556313a6a73a667c6d585bf88c0e793bda4457790fa64400c->enter($__internal_b60362c266f6f71556313a6a73a667c6d585bf88c0e793bda4457790fa64400c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60362c266f6f71556313a6a73a667c6d585bf88c0e793bda4457790fa64400c->leave($__internal_b60362c266f6f71556313a6a73a667c6d585bf88c0e793bda4457790fa64400c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6331d831f8de12978809d758f7f4b841db15bc2f4622397963600f3386ee4de5 = $this->env->getExtension("native_profiler");
        $__internal_6331d831f8de12978809d758f7f4b841db15bc2f4622397963600f3386ee4de5->enter($__internal_6331d831f8de12978809d758f7f4b841db15bc2f4622397963600f3386ee4de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6331d831f8de12978809d758f7f4b841db15bc2f4622397963600f3386ee4de5->leave($__internal_6331d831f8de12978809d758f7f4b841db15bc2f4622397963600f3386ee4de5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
