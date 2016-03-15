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
        $__internal_a4ac724b5b0e705c51c756be401de45dc2e35866127c0595866c963c486b8ee5 = $this->env->getExtension("native_profiler");
        $__internal_a4ac724b5b0e705c51c756be401de45dc2e35866127c0595866c963c486b8ee5->enter($__internal_a4ac724b5b0e705c51c756be401de45dc2e35866127c0595866c963c486b8ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ac724b5b0e705c51c756be401de45dc2e35866127c0595866c963c486b8ee5->leave($__internal_a4ac724b5b0e705c51c756be401de45dc2e35866127c0595866c963c486b8ee5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6bb946f8f62fa2c2b25eba6fb21028604d15390de7d96997192b38a648f2555 = $this->env->getExtension("native_profiler");
        $__internal_e6bb946f8f62fa2c2b25eba6fb21028604d15390de7d96997192b38a648f2555->enter($__internal_e6bb946f8f62fa2c2b25eba6fb21028604d15390de7d96997192b38a648f2555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e6bb946f8f62fa2c2b25eba6fb21028604d15390de7d96997192b38a648f2555->leave($__internal_e6bb946f8f62fa2c2b25eba6fb21028604d15390de7d96997192b38a648f2555_prof);

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
