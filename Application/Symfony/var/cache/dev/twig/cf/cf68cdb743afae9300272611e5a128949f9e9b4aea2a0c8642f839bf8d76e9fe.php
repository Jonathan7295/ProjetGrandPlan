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
        $__internal_a1e84d85b994d33446147126b3f184f43400eb21048c8d136e61d952c027c5cb = $this->env->getExtension("native_profiler");
        $__internal_a1e84d85b994d33446147126b3f184f43400eb21048c8d136e61d952c027c5cb->enter($__internal_a1e84d85b994d33446147126b3f184f43400eb21048c8d136e61d952c027c5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e84d85b994d33446147126b3f184f43400eb21048c8d136e61d952c027c5cb->leave($__internal_a1e84d85b994d33446147126b3f184f43400eb21048c8d136e61d952c027c5cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ca22d9d91b3b605bd772b28b1a8991fb5c056949fd8e44310acbcc325cc925e = $this->env->getExtension("native_profiler");
        $__internal_1ca22d9d91b3b605bd772b28b1a8991fb5c056949fd8e44310acbcc325cc925e->enter($__internal_1ca22d9d91b3b605bd772b28b1a8991fb5c056949fd8e44310acbcc325cc925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_1ca22d9d91b3b605bd772b28b1a8991fb5c056949fd8e44310acbcc325cc925e->leave($__internal_1ca22d9d91b3b605bd772b28b1a8991fb5c056949fd8e44310acbcc325cc925e_prof);

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
