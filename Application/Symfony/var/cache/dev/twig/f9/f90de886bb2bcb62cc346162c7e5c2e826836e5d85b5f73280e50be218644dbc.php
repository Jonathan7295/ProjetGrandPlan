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
        $__internal_3f385d8000cd5eba88a4629dfec65a2aff510c0d62dda74e2fe4a0cee4bab771 = $this->env->getExtension("native_profiler");
        $__internal_3f385d8000cd5eba88a4629dfec65a2aff510c0d62dda74e2fe4a0cee4bab771->enter($__internal_3f385d8000cd5eba88a4629dfec65a2aff510c0d62dda74e2fe4a0cee4bab771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f385d8000cd5eba88a4629dfec65a2aff510c0d62dda74e2fe4a0cee4bab771->leave($__internal_3f385d8000cd5eba88a4629dfec65a2aff510c0d62dda74e2fe4a0cee4bab771_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1d8716c81d7ac54bdeaffa412941177dace144be3e90cfe2079c16ae75446f1 = $this->env->getExtension("native_profiler");
        $__internal_b1d8716c81d7ac54bdeaffa412941177dace144be3e90cfe2079c16ae75446f1->enter($__internal_b1d8716c81d7ac54bdeaffa412941177dace144be3e90cfe2079c16ae75446f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b1d8716c81d7ac54bdeaffa412941177dace144be3e90cfe2079c16ae75446f1->leave($__internal_b1d8716c81d7ac54bdeaffa412941177dace144be3e90cfe2079c16ae75446f1_prof);

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
