<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_d1595bbb1be21510dc2c735fb4b8b5fb6b5798576f32a36c0b8f88a1619b9e6b extends Twig_Template
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
        $__internal_7df9f7bcad9e4afa2f6a935ccc753d6d864a9d6cdd13f1a331ff26ad198c739f = $this->env->getExtension("native_profiler");
        $__internal_7df9f7bcad9e4afa2f6a935ccc753d6d864a9d6cdd13f1a331ff26ad198c739f->enter($__internal_7df9f7bcad9e4afa2f6a935ccc753d6d864a9d6cdd13f1a331ff26ad198c739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df9f7bcad9e4afa2f6a935ccc753d6d864a9d6cdd13f1a331ff26ad198c739f->leave($__internal_7df9f7bcad9e4afa2f6a935ccc753d6d864a9d6cdd13f1a331ff26ad198c739f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30768012703f4ea36c984ecd4e82e790f27cff60b0f2ee3390f1d86c6f7428de = $this->env->getExtension("native_profiler");
        $__internal_30768012703f4ea36c984ecd4e82e790f27cff60b0f2ee3390f1d86c6f7428de->enter($__internal_30768012703f4ea36c984ecd4e82e790f27cff60b0f2ee3390f1d86c6f7428de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_30768012703f4ea36c984ecd4e82e790f27cff60b0f2ee3390f1d86c6f7428de->leave($__internal_30768012703f4ea36c984ecd4e82e790f27cff60b0f2ee3390f1d86c6f7428de_prof);

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
