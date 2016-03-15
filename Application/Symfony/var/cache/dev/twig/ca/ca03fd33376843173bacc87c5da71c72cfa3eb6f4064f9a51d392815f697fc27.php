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
        $__internal_52552c932eb22550ee568072f1d8a63a322f088b0ab5acc75c3c5a7cfda4bad0 = $this->env->getExtension("native_profiler");
        $__internal_52552c932eb22550ee568072f1d8a63a322f088b0ab5acc75c3c5a7cfda4bad0->enter($__internal_52552c932eb22550ee568072f1d8a63a322f088b0ab5acc75c3c5a7cfda4bad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52552c932eb22550ee568072f1d8a63a322f088b0ab5acc75c3c5a7cfda4bad0->leave($__internal_52552c932eb22550ee568072f1d8a63a322f088b0ab5acc75c3c5a7cfda4bad0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a792dc199ea2d505e7979215d6f68be18632b61b76f2e29c04fb220b42a1847 = $this->env->getExtension("native_profiler");
        $__internal_8a792dc199ea2d505e7979215d6f68be18632b61b76f2e29c04fb220b42a1847->enter($__internal_8a792dc199ea2d505e7979215d6f68be18632b61b76f2e29c04fb220b42a1847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8a792dc199ea2d505e7979215d6f68be18632b61b76f2e29c04fb220b42a1847->leave($__internal_8a792dc199ea2d505e7979215d6f68be18632b61b76f2e29c04fb220b42a1847_prof);

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
