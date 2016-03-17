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
        $__internal_54ff0c5218b0d373161dd966d1bdfea24e9cf636d46b0b0432c76e45034efcba = $this->env->getExtension("native_profiler");
        $__internal_54ff0c5218b0d373161dd966d1bdfea24e9cf636d46b0b0432c76e45034efcba->enter($__internal_54ff0c5218b0d373161dd966d1bdfea24e9cf636d46b0b0432c76e45034efcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ff0c5218b0d373161dd966d1bdfea24e9cf636d46b0b0432c76e45034efcba->leave($__internal_54ff0c5218b0d373161dd966d1bdfea24e9cf636d46b0b0432c76e45034efcba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_111fc46a0bcec307d04563cf339aaa10dc42e2a88b5334ec320ac60ec4e32ef8 = $this->env->getExtension("native_profiler");
        $__internal_111fc46a0bcec307d04563cf339aaa10dc42e2a88b5334ec320ac60ec4e32ef8->enter($__internal_111fc46a0bcec307d04563cf339aaa10dc42e2a88b5334ec320ac60ec4e32ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_111fc46a0bcec307d04563cf339aaa10dc42e2a88b5334ec320ac60ec4e32ef8->leave($__internal_111fc46a0bcec307d04563cf339aaa10dc42e2a88b5334ec320ac60ec4e32ef8_prof);

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
