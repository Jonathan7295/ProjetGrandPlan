<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_db02f47f0eeadc04b12758b7990feb23c0d65cf845b57d0b56bb21c401f71263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_c46fff1a8e844a3e133264e8582d90d2fc5b9375c90b348d13b6b5fde8989935 = $this->env->getExtension("native_profiler");
        $__internal_c46fff1a8e844a3e133264e8582d90d2fc5b9375c90b348d13b6b5fde8989935->enter($__internal_c46fff1a8e844a3e133264e8582d90d2fc5b9375c90b348d13b6b5fde8989935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c46fff1a8e844a3e133264e8582d90d2fc5b9375c90b348d13b6b5fde8989935->leave($__internal_c46fff1a8e844a3e133264e8582d90d2fc5b9375c90b348d13b6b5fde8989935_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92e2baf8882933c07040d9db970986f28cf360fbf2218a1367c64033e5165c99 = $this->env->getExtension("native_profiler");
        $__internal_92e2baf8882933c07040d9db970986f28cf360fbf2218a1367c64033e5165c99->enter($__internal_92e2baf8882933c07040d9db970986f28cf360fbf2218a1367c64033e5165c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_92e2baf8882933c07040d9db970986f28cf360fbf2218a1367c64033e5165c99->leave($__internal_92e2baf8882933c07040d9db970986f28cf360fbf2218a1367c64033e5165c99_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
