<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3030ddc2849541761e48d2f83e841b54011252473ee1fb0b309ab6bb2efa8ced extends Twig_Template
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
        $__internal_5d66c513f3ef099c78bbb7ef3b81ead2284090ca7df5d29b4804735a987675d6 = $this->env->getExtension("native_profiler");
        $__internal_5d66c513f3ef099c78bbb7ef3b81ead2284090ca7df5d29b4804735a987675d6->enter($__internal_5d66c513f3ef099c78bbb7ef3b81ead2284090ca7df5d29b4804735a987675d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d66c513f3ef099c78bbb7ef3b81ead2284090ca7df5d29b4804735a987675d6->leave($__internal_5d66c513f3ef099c78bbb7ef3b81ead2284090ca7df5d29b4804735a987675d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0bc1c0d6c4399ac79119035a3371bd37549b431e53773d9c92aeeb995b6ce7e = $this->env->getExtension("native_profiler");
        $__internal_e0bc1c0d6c4399ac79119035a3371bd37549b431e53773d9c92aeeb995b6ce7e->enter($__internal_e0bc1c0d6c4399ac79119035a3371bd37549b431e53773d9c92aeeb995b6ce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e0bc1c0d6c4399ac79119035a3371bd37549b431e53773d9c92aeeb995b6ce7e->leave($__internal_e0bc1c0d6c4399ac79119035a3371bd37549b431e53773d9c92aeeb995b6ce7e_prof);

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
