<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_119e8a974fd495a34443193205e747a8dee7afa024333af0c2744dcb997a76dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_89a33ace26fa1c6fb3200f58f8a4d0fbbdd59b9a482b62db6a61240766d86e05 = $this->env->getExtension("native_profiler");
        $__internal_89a33ace26fa1c6fb3200f58f8a4d0fbbdd59b9a482b62db6a61240766d86e05->enter($__internal_89a33ace26fa1c6fb3200f58f8a4d0fbbdd59b9a482b62db6a61240766d86e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a33ace26fa1c6fb3200f58f8a4d0fbbdd59b9a482b62db6a61240766d86e05->leave($__internal_89a33ace26fa1c6fb3200f58f8a4d0fbbdd59b9a482b62db6a61240766d86e05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27cb0e2dd2d832040d2a3a670b14409d2fc49666e7e68a858acd18d1c740c7fb = $this->env->getExtension("native_profiler");
        $__internal_27cb0e2dd2d832040d2a3a670b14409d2fc49666e7e68a858acd18d1c740c7fb->enter($__internal_27cb0e2dd2d832040d2a3a670b14409d2fc49666e7e68a858acd18d1c740c7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_27cb0e2dd2d832040d2a3a670b14409d2fc49666e7e68a858acd18d1c740c7fb->leave($__internal_27cb0e2dd2d832040d2a3a670b14409d2fc49666e7e68a858acd18d1c740c7fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
