<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_5d9db725349e3d67aa7dfc016762878853b50e3857867cdcb18145b18be79e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_15312ba321f616c1c3a5cb1b9cc0df15054bb92a9afcde688c1534a334ea0a94 = $this->env->getExtension("native_profiler");
        $__internal_15312ba321f616c1c3a5cb1b9cc0df15054bb92a9afcde688c1534a334ea0a94->enter($__internal_15312ba321f616c1c3a5cb1b9cc0df15054bb92a9afcde688c1534a334ea0a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15312ba321f616c1c3a5cb1b9cc0df15054bb92a9afcde688c1534a334ea0a94->leave($__internal_15312ba321f616c1c3a5cb1b9cc0df15054bb92a9afcde688c1534a334ea0a94_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5dd4c6af794335c5a5c1f1e5f62bb99858fa1d6df868e2c8c80d551bfea0161 = $this->env->getExtension("native_profiler");
        $__internal_e5dd4c6af794335c5a5c1f1e5f62bb99858fa1d6df868e2c8c80d551bfea0161->enter($__internal_e5dd4c6af794335c5a5c1f1e5f62bb99858fa1d6df868e2c8c80d551bfea0161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e5dd4c6af794335c5a5c1f1e5f62bb99858fa1d6df868e2c8c80d551bfea0161->leave($__internal_e5dd4c6af794335c5a5c1f1e5f62bb99858fa1d6df868e2c8c80d551bfea0161_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
