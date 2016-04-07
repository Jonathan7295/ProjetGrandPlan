<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d871f0952c14fd8e27e377562c490edf2c77741471c413326283da0af3be3242 extends Twig_Template
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
        $__internal_7ec77bb6c7a661736de74ecdf654d61eeb6d9dce6bd243adf964b98d4825a529 = $this->env->getExtension("native_profiler");
        $__internal_7ec77bb6c7a661736de74ecdf654d61eeb6d9dce6bd243adf964b98d4825a529->enter($__internal_7ec77bb6c7a661736de74ecdf654d61eeb6d9dce6bd243adf964b98d4825a529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ec77bb6c7a661736de74ecdf654d61eeb6d9dce6bd243adf964b98d4825a529->leave($__internal_7ec77bb6c7a661736de74ecdf654d61eeb6d9dce6bd243adf964b98d4825a529_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73a5fc67dc8d0225622d3e5570b90582f545e7a9eee879b1475db5b0da567055 = $this->env->getExtension("native_profiler");
        $__internal_73a5fc67dc8d0225622d3e5570b90582f545e7a9eee879b1475db5b0da567055->enter($__internal_73a5fc67dc8d0225622d3e5570b90582f545e7a9eee879b1475db5b0da567055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_73a5fc67dc8d0225622d3e5570b90582f545e7a9eee879b1475db5b0da567055->leave($__internal_73a5fc67dc8d0225622d3e5570b90582f545e7a9eee879b1475db5b0da567055_prof);

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
