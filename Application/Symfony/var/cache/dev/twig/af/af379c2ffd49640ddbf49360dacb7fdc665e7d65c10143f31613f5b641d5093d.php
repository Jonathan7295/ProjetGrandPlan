<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ed994e3366e68ebc566442a7ba24878ccd4921fad5b1968a1add9e2ca37223f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c496ef69fa0021066aeceb40818068a26176b3d90ce702e4b0aa9f66228d4930 = $this->env->getExtension("native_profiler");
        $__internal_c496ef69fa0021066aeceb40818068a26176b3d90ce702e4b0aa9f66228d4930->enter($__internal_c496ef69fa0021066aeceb40818068a26176b3d90ce702e4b0aa9f66228d4930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c496ef69fa0021066aeceb40818068a26176b3d90ce702e4b0aa9f66228d4930->leave($__internal_c496ef69fa0021066aeceb40818068a26176b3d90ce702e4b0aa9f66228d4930_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e3855b7572b5f0865153f5b590fbec93871bce223d8bfc3ac44a4b412614c64 = $this->env->getExtension("native_profiler");
        $__internal_5e3855b7572b5f0865153f5b590fbec93871bce223d8bfc3ac44a4b412614c64->enter($__internal_5e3855b7572b5f0865153f5b590fbec93871bce223d8bfc3ac44a4b412614c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5e3855b7572b5f0865153f5b590fbec93871bce223d8bfc3ac44a4b412614c64->leave($__internal_5e3855b7572b5f0865153f5b590fbec93871bce223d8bfc3ac44a4b412614c64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
