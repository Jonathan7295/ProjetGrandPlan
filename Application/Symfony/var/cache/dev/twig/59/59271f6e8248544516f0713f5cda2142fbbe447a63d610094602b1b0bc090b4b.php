<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b3385697b004fa4565cd23965af378a47e2f0fdf1e40fc826d628e41b04e5ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a3717cdea076c2e9e7f39475ad6cbf5c6e5fe0026b9ba61af8f256eb3fb93b06 = $this->env->getExtension("native_profiler");
        $__internal_a3717cdea076c2e9e7f39475ad6cbf5c6e5fe0026b9ba61af8f256eb3fb93b06->enter($__internal_a3717cdea076c2e9e7f39475ad6cbf5c6e5fe0026b9ba61af8f256eb3fb93b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3717cdea076c2e9e7f39475ad6cbf5c6e5fe0026b9ba61af8f256eb3fb93b06->leave($__internal_a3717cdea076c2e9e7f39475ad6cbf5c6e5fe0026b9ba61af8f256eb3fb93b06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41ae908eb1f8e54dd4fdb5f8d5d660adc7ccb3f9bd4c37eca095f2ef9c716404 = $this->env->getExtension("native_profiler");
        $__internal_41ae908eb1f8e54dd4fdb5f8d5d660adc7ccb3f9bd4c37eca095f2ef9c716404->enter($__internal_41ae908eb1f8e54dd4fdb5f8d5d660adc7ccb3f9bd4c37eca095f2ef9c716404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_41ae908eb1f8e54dd4fdb5f8d5d660adc7ccb3f9bd4c37eca095f2ef9c716404->leave($__internal_41ae908eb1f8e54dd4fdb5f8d5d660adc7ccb3f9bd4c37eca095f2ef9c716404_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
