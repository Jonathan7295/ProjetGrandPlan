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
        $__internal_b9fc9fdc3bd38cb0f4e3db2713519c92e23f35caebb7281899a6a18bbc30ad43 = $this->env->getExtension("native_profiler");
        $__internal_b9fc9fdc3bd38cb0f4e3db2713519c92e23f35caebb7281899a6a18bbc30ad43->enter($__internal_b9fc9fdc3bd38cb0f4e3db2713519c92e23f35caebb7281899a6a18bbc30ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9fc9fdc3bd38cb0f4e3db2713519c92e23f35caebb7281899a6a18bbc30ad43->leave($__internal_b9fc9fdc3bd38cb0f4e3db2713519c92e23f35caebb7281899a6a18bbc30ad43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_379db499efae6af5cfd976b566fbcaac7106f8fed4b1dbe743405d41fddd5c61 = $this->env->getExtension("native_profiler");
        $__internal_379db499efae6af5cfd976b566fbcaac7106f8fed4b1dbe743405d41fddd5c61->enter($__internal_379db499efae6af5cfd976b566fbcaac7106f8fed4b1dbe743405d41fddd5c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_379db499efae6af5cfd976b566fbcaac7106f8fed4b1dbe743405d41fddd5c61->leave($__internal_379db499efae6af5cfd976b566fbcaac7106f8fed4b1dbe743405d41fddd5c61_prof);

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
