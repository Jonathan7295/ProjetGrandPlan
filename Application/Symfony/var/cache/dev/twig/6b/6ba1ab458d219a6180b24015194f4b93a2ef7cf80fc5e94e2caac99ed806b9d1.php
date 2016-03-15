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
        $__internal_18a94b631a88dbbd9acd6f19a725befc72cbb602ca08b696ccbddadef31dc6dd = $this->env->getExtension("native_profiler");
        $__internal_18a94b631a88dbbd9acd6f19a725befc72cbb602ca08b696ccbddadef31dc6dd->enter($__internal_18a94b631a88dbbd9acd6f19a725befc72cbb602ca08b696ccbddadef31dc6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a94b631a88dbbd9acd6f19a725befc72cbb602ca08b696ccbddadef31dc6dd->leave($__internal_18a94b631a88dbbd9acd6f19a725befc72cbb602ca08b696ccbddadef31dc6dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09054adbd9725e4fd58366b43fe641619965cf441ce738a4c3ba981420955e84 = $this->env->getExtension("native_profiler");
        $__internal_09054adbd9725e4fd58366b43fe641619965cf441ce738a4c3ba981420955e84->enter($__internal_09054adbd9725e4fd58366b43fe641619965cf441ce738a4c3ba981420955e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_09054adbd9725e4fd58366b43fe641619965cf441ce738a4c3ba981420955e84->leave($__internal_09054adbd9725e4fd58366b43fe641619965cf441ce738a4c3ba981420955e84_prof);

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
