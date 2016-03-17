<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5d575ab8cc9d67fc3a9c48f01d1b7b719f128d2db437ff9727334ddb9dfaf8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_451597e731d11db33d031fc57f8fbcae208bcb57706fdf8ea2dd2edd06ec6c9f = $this->env->getExtension("native_profiler");
        $__internal_451597e731d11db33d031fc57f8fbcae208bcb57706fdf8ea2dd2edd06ec6c9f->enter($__internal_451597e731d11db33d031fc57f8fbcae208bcb57706fdf8ea2dd2edd06ec6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451597e731d11db33d031fc57f8fbcae208bcb57706fdf8ea2dd2edd06ec6c9f->leave($__internal_451597e731d11db33d031fc57f8fbcae208bcb57706fdf8ea2dd2edd06ec6c9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4108095e7243d89c49efeef541eda52cb0e25c07c1657209bc182ebbe2782593 = $this->env->getExtension("native_profiler");
        $__internal_4108095e7243d89c49efeef541eda52cb0e25c07c1657209bc182ebbe2782593->enter($__internal_4108095e7243d89c49efeef541eda52cb0e25c07c1657209bc182ebbe2782593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4108095e7243d89c49efeef541eda52cb0e25c07c1657209bc182ebbe2782593->leave($__internal_4108095e7243d89c49efeef541eda52cb0e25c07c1657209bc182ebbe2782593_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
