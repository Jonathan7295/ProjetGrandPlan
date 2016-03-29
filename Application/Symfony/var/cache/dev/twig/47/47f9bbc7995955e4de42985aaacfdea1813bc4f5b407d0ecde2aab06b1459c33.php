<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d8db24ad5b350e8bed8c4ab87573bba2f98b2de862b836ecfbe04ef1f8f04488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_22300a65f6d58f64000a431a5a25b26486f0080be991aa88dda86eae470e182b = $this->env->getExtension("native_profiler");
        $__internal_22300a65f6d58f64000a431a5a25b26486f0080be991aa88dda86eae470e182b->enter($__internal_22300a65f6d58f64000a431a5a25b26486f0080be991aa88dda86eae470e182b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22300a65f6d58f64000a431a5a25b26486f0080be991aa88dda86eae470e182b->leave($__internal_22300a65f6d58f64000a431a5a25b26486f0080be991aa88dda86eae470e182b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e40127e3b67f3e0f71913502095e39c747f9218ec8dfd70010b0f145b219f71d = $this->env->getExtension("native_profiler");
        $__internal_e40127e3b67f3e0f71913502095e39c747f9218ec8dfd70010b0f145b219f71d->enter($__internal_e40127e3b67f3e0f71913502095e39c747f9218ec8dfd70010b0f145b219f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e40127e3b67f3e0f71913502095e39c747f9218ec8dfd70010b0f145b219f71d->leave($__internal_e40127e3b67f3e0f71913502095e39c747f9218ec8dfd70010b0f145b219f71d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
