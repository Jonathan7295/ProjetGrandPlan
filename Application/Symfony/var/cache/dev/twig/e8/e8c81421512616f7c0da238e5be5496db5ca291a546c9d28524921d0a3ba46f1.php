<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5fcbface004504eb0565671c639838718425982902cfd708d421bd1a9ca024a9 extends Twig_Template
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
        $__internal_68c017346ba0263cef28a37f90e3e9d58ea3d56ff332288d6fa3befbff103633 = $this->env->getExtension("native_profiler");
        $__internal_68c017346ba0263cef28a37f90e3e9d58ea3d56ff332288d6fa3befbff103633->enter($__internal_68c017346ba0263cef28a37f90e3e9d58ea3d56ff332288d6fa3befbff103633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c017346ba0263cef28a37f90e3e9d58ea3d56ff332288d6fa3befbff103633->leave($__internal_68c017346ba0263cef28a37f90e3e9d58ea3d56ff332288d6fa3befbff103633_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17b98e17e23b46467329f28126b765ac845ef1fad031573c6fe4320061542dca = $this->env->getExtension("native_profiler");
        $__internal_17b98e17e23b46467329f28126b765ac845ef1fad031573c6fe4320061542dca->enter($__internal_17b98e17e23b46467329f28126b765ac845ef1fad031573c6fe4320061542dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_17b98e17e23b46467329f28126b765ac845ef1fad031573c6fe4320061542dca->leave($__internal_17b98e17e23b46467329f28126b765ac845ef1fad031573c6fe4320061542dca_prof);

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
