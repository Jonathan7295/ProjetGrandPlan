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
        $__internal_ad505541d55d8f848b8d2abf6566c4157e56babf95d5b041cdd2aa1fae1ca46b = $this->env->getExtension("native_profiler");
        $__internal_ad505541d55d8f848b8d2abf6566c4157e56babf95d5b041cdd2aa1fae1ca46b->enter($__internal_ad505541d55d8f848b8d2abf6566c4157e56babf95d5b041cdd2aa1fae1ca46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad505541d55d8f848b8d2abf6566c4157e56babf95d5b041cdd2aa1fae1ca46b->leave($__internal_ad505541d55d8f848b8d2abf6566c4157e56babf95d5b041cdd2aa1fae1ca46b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4aa0bd582ebb07d875efb54de999e28774139968850c3f9bd2aa9faf2707f6f = $this->env->getExtension("native_profiler");
        $__internal_a4aa0bd582ebb07d875efb54de999e28774139968850c3f9bd2aa9faf2707f6f->enter($__internal_a4aa0bd582ebb07d875efb54de999e28774139968850c3f9bd2aa9faf2707f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_a4aa0bd582ebb07d875efb54de999e28774139968850c3f9bd2aa9faf2707f6f->leave($__internal_a4aa0bd582ebb07d875efb54de999e28774139968850c3f9bd2aa9faf2707f6f_prof);

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
