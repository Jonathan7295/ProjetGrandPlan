<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_81a4b035e24e08a4e634260dde1595312de14d2133cbea63f7ae4ff763c73b5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e49906c793135e836182515bc84c664c0268309c78b49ee4302093839bbdb08d = $this->env->getExtension("native_profiler");
        $__internal_e49906c793135e836182515bc84c664c0268309c78b49ee4302093839bbdb08d->enter($__internal_e49906c793135e836182515bc84c664c0268309c78b49ee4302093839bbdb08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49906c793135e836182515bc84c664c0268309c78b49ee4302093839bbdb08d->leave($__internal_e49906c793135e836182515bc84c664c0268309c78b49ee4302093839bbdb08d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a352087f8753029a315fd6c385ad74a4fd26af8382c3d951cc5a86be89cdcfb7 = $this->env->getExtension("native_profiler");
        $__internal_a352087f8753029a315fd6c385ad74a4fd26af8382c3d951cc5a86be89cdcfb7->enter($__internal_a352087f8753029a315fd6c385ad74a4fd26af8382c3d951cc5a86be89cdcfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a352087f8753029a315fd6c385ad74a4fd26af8382c3d951cc5a86be89cdcfb7->leave($__internal_a352087f8753029a315fd6c385ad74a4fd26af8382c3d951cc5a86be89cdcfb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
