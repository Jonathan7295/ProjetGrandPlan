<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_0058958df2fe2f583db8b8e79a441e3edf60b68b205b2d2826d77a8f1388b2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_59a4206fc77e0de064b469ee6e415cffb1207c10f8cd5baf49be0e42f9e81c01 = $this->env->getExtension("native_profiler");
        $__internal_59a4206fc77e0de064b469ee6e415cffb1207c10f8cd5baf49be0e42f9e81c01->enter($__internal_59a4206fc77e0de064b469ee6e415cffb1207c10f8cd5baf49be0e42f9e81c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59a4206fc77e0de064b469ee6e415cffb1207c10f8cd5baf49be0e42f9e81c01->leave($__internal_59a4206fc77e0de064b469ee6e415cffb1207c10f8cd5baf49be0e42f9e81c01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_414d42faf0051b2619dab03ad9deafc709651e8f6e45d222bba4ff4b2c5ffbd1 = $this->env->getExtension("native_profiler");
        $__internal_414d42faf0051b2619dab03ad9deafc709651e8f6e45d222bba4ff4b2c5ffbd1->enter($__internal_414d42faf0051b2619dab03ad9deafc709651e8f6e45d222bba4ff4b2c5ffbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_414d42faf0051b2619dab03ad9deafc709651e8f6e45d222bba4ff4b2c5ffbd1->leave($__internal_414d42faf0051b2619dab03ad9deafc709651e8f6e45d222bba4ff4b2c5ffbd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
