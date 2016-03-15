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
        $__internal_a30e355bcc81402635ff8f7fbdffcdd304121dad32dd602b34cc747b3c330d11 = $this->env->getExtension("native_profiler");
        $__internal_a30e355bcc81402635ff8f7fbdffcdd304121dad32dd602b34cc747b3c330d11->enter($__internal_a30e355bcc81402635ff8f7fbdffcdd304121dad32dd602b34cc747b3c330d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30e355bcc81402635ff8f7fbdffcdd304121dad32dd602b34cc747b3c330d11->leave($__internal_a30e355bcc81402635ff8f7fbdffcdd304121dad32dd602b34cc747b3c330d11_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebba3d956390fb35c69bf315ac96a3dbde63c27e8481c262793ed0a7d3acfa2e = $this->env->getExtension("native_profiler");
        $__internal_ebba3d956390fb35c69bf315ac96a3dbde63c27e8481c262793ed0a7d3acfa2e->enter($__internal_ebba3d956390fb35c69bf315ac96a3dbde63c27e8481c262793ed0a7d3acfa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ebba3d956390fb35c69bf315ac96a3dbde63c27e8481c262793ed0a7d3acfa2e->leave($__internal_ebba3d956390fb35c69bf315ac96a3dbde63c27e8481c262793ed0a7d3acfa2e_prof);

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
