<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f84bd9594afe79320728d9ebb99e984ab65db35cbd465ffa7dd40431fb3d4e4f extends Twig_Template
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
        $__internal_5fbe3ef6d3ceeb20dcf89e32b152e7de28b7790a3cb5895de3ee296389b69b28 = $this->env->getExtension("native_profiler");
        $__internal_5fbe3ef6d3ceeb20dcf89e32b152e7de28b7790a3cb5895de3ee296389b69b28->enter($__internal_5fbe3ef6d3ceeb20dcf89e32b152e7de28b7790a3cb5895de3ee296389b69b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fbe3ef6d3ceeb20dcf89e32b152e7de28b7790a3cb5895de3ee296389b69b28->leave($__internal_5fbe3ef6d3ceeb20dcf89e32b152e7de28b7790a3cb5895de3ee296389b69b28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b5a873c15ed0b411d476a578ece93626da2bdee1ae8aa2d3be424a50a54fe65 = $this->env->getExtension("native_profiler");
        $__internal_2b5a873c15ed0b411d476a578ece93626da2bdee1ae8aa2d3be424a50a54fe65->enter($__internal_2b5a873c15ed0b411d476a578ece93626da2bdee1ae8aa2d3be424a50a54fe65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_2b5a873c15ed0b411d476a578ece93626da2bdee1ae8aa2d3be424a50a54fe65->leave($__internal_2b5a873c15ed0b411d476a578ece93626da2bdee1ae8aa2d3be424a50a54fe65_prof);

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
