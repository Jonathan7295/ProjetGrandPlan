<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c7e971cb9335cd59e24d78570a7f44b85568268f5083b726d62ba66f7e2405e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_e7e2421d256d5db1f1048f23660d0aa4964ee5d5823d9f49598bf6819c8b3685 = $this->env->getExtension("native_profiler");
        $__internal_e7e2421d256d5db1f1048f23660d0aa4964ee5d5823d9f49598bf6819c8b3685->enter($__internal_e7e2421d256d5db1f1048f23660d0aa4964ee5d5823d9f49598bf6819c8b3685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e2421d256d5db1f1048f23660d0aa4964ee5d5823d9f49598bf6819c8b3685->leave($__internal_e7e2421d256d5db1f1048f23660d0aa4964ee5d5823d9f49598bf6819c8b3685_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cc82051c8d92d5b6826e8a604c456c3e90399473b33ac8155d8bc72366ec059 = $this->env->getExtension("native_profiler");
        $__internal_7cc82051c8d92d5b6826e8a604c456c3e90399473b33ac8155d8bc72366ec059->enter($__internal_7cc82051c8d92d5b6826e8a604c456c3e90399473b33ac8155d8bc72366ec059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_7cc82051c8d92d5b6826e8a604c456c3e90399473b33ac8155d8bc72366ec059->leave($__internal_7cc82051c8d92d5b6826e8a604c456c3e90399473b33ac8155d8bc72366ec059_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
