<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_84b98fac793d3bb32918e2291e635841de9891dc15e69b59ec85296c0e053115 extends Twig_Template
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
        $__internal_d8ea5880d9d2d0b7a96bb739aa74f7f9d2f184dd4f40588165afab1dfff0bb13 = $this->env->getExtension("native_profiler");
        $__internal_d8ea5880d9d2d0b7a96bb739aa74f7f9d2f184dd4f40588165afab1dfff0bb13->enter($__internal_d8ea5880d9d2d0b7a96bb739aa74f7f9d2f184dd4f40588165afab1dfff0bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ea5880d9d2d0b7a96bb739aa74f7f9d2f184dd4f40588165afab1dfff0bb13->leave($__internal_d8ea5880d9d2d0b7a96bb739aa74f7f9d2f184dd4f40588165afab1dfff0bb13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef7bf89ef7c041be43ae1407e3053e466ad421e07c2d0fb63d68e8a39eee06db = $this->env->getExtension("native_profiler");
        $__internal_ef7bf89ef7c041be43ae1407e3053e466ad421e07c2d0fb63d68e8a39eee06db->enter($__internal_ef7bf89ef7c041be43ae1407e3053e466ad421e07c2d0fb63d68e8a39eee06db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ef7bf89ef7c041be43ae1407e3053e466ad421e07c2d0fb63d68e8a39eee06db->leave($__internal_ef7bf89ef7c041be43ae1407e3053e466ad421e07c2d0fb63d68e8a39eee06db_prof);

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
