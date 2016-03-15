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
        $__internal_24660234cf2c48d28f245e062f3224dfcf53cd848993e8f9748cac1bc26d22a6 = $this->env->getExtension("native_profiler");
        $__internal_24660234cf2c48d28f245e062f3224dfcf53cd848993e8f9748cac1bc26d22a6->enter($__internal_24660234cf2c48d28f245e062f3224dfcf53cd848993e8f9748cac1bc26d22a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24660234cf2c48d28f245e062f3224dfcf53cd848993e8f9748cac1bc26d22a6->leave($__internal_24660234cf2c48d28f245e062f3224dfcf53cd848993e8f9748cac1bc26d22a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f17ba2260a56f7296339d5ba297caad0d70cf230af3a5d6721055fe0016648d = $this->env->getExtension("native_profiler");
        $__internal_7f17ba2260a56f7296339d5ba297caad0d70cf230af3a5d6721055fe0016648d->enter($__internal_7f17ba2260a56f7296339d5ba297caad0d70cf230af3a5d6721055fe0016648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7f17ba2260a56f7296339d5ba297caad0d70cf230af3a5d6721055fe0016648d->leave($__internal_7f17ba2260a56f7296339d5ba297caad0d70cf230af3a5d6721055fe0016648d_prof);

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
