<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3cd7102caaf7a617eb0d14e9ec65c680f971141d718c0eefab6b96b4cb8b86fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_37ae2f50efa19cb018956e60dc5866d1bf448dd2679d5d1e1e266f90304624c7 = $this->env->getExtension("native_profiler");
        $__internal_37ae2f50efa19cb018956e60dc5866d1bf448dd2679d5d1e1e266f90304624c7->enter($__internal_37ae2f50efa19cb018956e60dc5866d1bf448dd2679d5d1e1e266f90304624c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ae2f50efa19cb018956e60dc5866d1bf448dd2679d5d1e1e266f90304624c7->leave($__internal_37ae2f50efa19cb018956e60dc5866d1bf448dd2679d5d1e1e266f90304624c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e53bbc97e895421d2fbda359e1c82918a8a1a0be4406c82a7cf727b2bb1d3ba3 = $this->env->getExtension("native_profiler");
        $__internal_e53bbc97e895421d2fbda359e1c82918a8a1a0be4406c82a7cf727b2bb1d3ba3->enter($__internal_e53bbc97e895421d2fbda359e1c82918a8a1a0be4406c82a7cf727b2bb1d3ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e53bbc97e895421d2fbda359e1c82918a8a1a0be4406c82a7cf727b2bb1d3ba3->leave($__internal_e53bbc97e895421d2fbda359e1c82918a8a1a0be4406c82a7cf727b2bb1d3ba3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
