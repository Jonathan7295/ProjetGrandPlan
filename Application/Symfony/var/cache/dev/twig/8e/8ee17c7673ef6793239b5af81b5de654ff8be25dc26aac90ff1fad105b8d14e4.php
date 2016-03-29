<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f8da6f8f8a5cc4496ab3aabe7e535e2731f39692b10a96f9327bdde9deefa0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1f99dae48a06916727a571149c1f77ee472c779434d2b8b577c90652c1397325 = $this->env->getExtension("native_profiler");
        $__internal_1f99dae48a06916727a571149c1f77ee472c779434d2b8b577c90652c1397325->enter($__internal_1f99dae48a06916727a571149c1f77ee472c779434d2b8b577c90652c1397325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f99dae48a06916727a571149c1f77ee472c779434d2b8b577c90652c1397325->leave($__internal_1f99dae48a06916727a571149c1f77ee472c779434d2b8b577c90652c1397325_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f4f4c77e250632068ecc45215a40401905b8baee6eee99b89763432b1f8e1a4 = $this->env->getExtension("native_profiler");
        $__internal_5f4f4c77e250632068ecc45215a40401905b8baee6eee99b89763432b1f8e1a4->enter($__internal_5f4f4c77e250632068ecc45215a40401905b8baee6eee99b89763432b1f8e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5f4f4c77e250632068ecc45215a40401905b8baee6eee99b89763432b1f8e1a4->leave($__internal_5f4f4c77e250632068ecc45215a40401905b8baee6eee99b89763432b1f8e1a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
