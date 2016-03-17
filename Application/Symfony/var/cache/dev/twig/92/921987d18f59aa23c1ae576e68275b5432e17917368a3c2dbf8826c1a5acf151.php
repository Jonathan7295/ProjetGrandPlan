<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3e414685e82aa3d7845952edfcf57b4d82b3f182166759a6d3433ba3fadf75f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_57f9d85cf92d8e1271b98ff0e0357bd5b78194248bbdc0995d726b3a9154187c = $this->env->getExtension("native_profiler");
        $__internal_57f9d85cf92d8e1271b98ff0e0357bd5b78194248bbdc0995d726b3a9154187c->enter($__internal_57f9d85cf92d8e1271b98ff0e0357bd5b78194248bbdc0995d726b3a9154187c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f9d85cf92d8e1271b98ff0e0357bd5b78194248bbdc0995d726b3a9154187c->leave($__internal_57f9d85cf92d8e1271b98ff0e0357bd5b78194248bbdc0995d726b3a9154187c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c710a6e79b6ecd68a9cdcde50e0e53c70171cf77b0b3bc141febdc1fc10df42 = $this->env->getExtension("native_profiler");
        $__internal_6c710a6e79b6ecd68a9cdcde50e0e53c70171cf77b0b3bc141febdc1fc10df42->enter($__internal_6c710a6e79b6ecd68a9cdcde50e0e53c70171cf77b0b3bc141febdc1fc10df42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6c710a6e79b6ecd68a9cdcde50e0e53c70171cf77b0b3bc141febdc1fc10df42->leave($__internal_6c710a6e79b6ecd68a9cdcde50e0e53c70171cf77b0b3bc141febdc1fc10df42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
