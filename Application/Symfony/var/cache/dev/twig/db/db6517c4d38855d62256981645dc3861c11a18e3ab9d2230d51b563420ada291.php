<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_02173f7221d3f5877738a1c45e32e585e9f66bd112a3aa48592a23ccf96cbd43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3b77b6b48a465dacc8cac4580ebae8745c06060bfea1a3fb49ec1ebc247c4f13 = $this->env->getExtension("native_profiler");
        $__internal_3b77b6b48a465dacc8cac4580ebae8745c06060bfea1a3fb49ec1ebc247c4f13->enter($__internal_3b77b6b48a465dacc8cac4580ebae8745c06060bfea1a3fb49ec1ebc247c4f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b77b6b48a465dacc8cac4580ebae8745c06060bfea1a3fb49ec1ebc247c4f13->leave($__internal_3b77b6b48a465dacc8cac4580ebae8745c06060bfea1a3fb49ec1ebc247c4f13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40aef9d3c613100e36138b52d268eb741b74cee8f0fa064e9401e52f5d8502e8 = $this->env->getExtension("native_profiler");
        $__internal_40aef9d3c613100e36138b52d268eb741b74cee8f0fa064e9401e52f5d8502e8->enter($__internal_40aef9d3c613100e36138b52d268eb741b74cee8f0fa064e9401e52f5d8502e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_40aef9d3c613100e36138b52d268eb741b74cee8f0fa064e9401e52f5d8502e8->leave($__internal_40aef9d3c613100e36138b52d268eb741b74cee8f0fa064e9401e52f5d8502e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
