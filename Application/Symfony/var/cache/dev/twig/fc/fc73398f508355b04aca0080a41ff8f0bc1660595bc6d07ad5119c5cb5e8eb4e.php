<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_225067d38b46f41a64aaa83458d35773139a4e604774db58c07cd964d0bbbbcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ba960fb1f12bba1f942f8521a2ef8787e7c6f9614c801f1860f9f6070dd1d05f = $this->env->getExtension("native_profiler");
        $__internal_ba960fb1f12bba1f942f8521a2ef8787e7c6f9614c801f1860f9f6070dd1d05f->enter($__internal_ba960fb1f12bba1f942f8521a2ef8787e7c6f9614c801f1860f9f6070dd1d05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba960fb1f12bba1f942f8521a2ef8787e7c6f9614c801f1860f9f6070dd1d05f->leave($__internal_ba960fb1f12bba1f942f8521a2ef8787e7c6f9614c801f1860f9f6070dd1d05f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cb3ae7fb6da75ece6fbd27ab79d8f50f09bffd9e06697be19fdf31f2f13af9d = $this->env->getExtension("native_profiler");
        $__internal_3cb3ae7fb6da75ece6fbd27ab79d8f50f09bffd9e06697be19fdf31f2f13af9d->enter($__internal_3cb3ae7fb6da75ece6fbd27ab79d8f50f09bffd9e06697be19fdf31f2f13af9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3cb3ae7fb6da75ece6fbd27ab79d8f50f09bffd9e06697be19fdf31f2f13af9d->leave($__internal_3cb3ae7fb6da75ece6fbd27ab79d8f50f09bffd9e06697be19fdf31f2f13af9d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
