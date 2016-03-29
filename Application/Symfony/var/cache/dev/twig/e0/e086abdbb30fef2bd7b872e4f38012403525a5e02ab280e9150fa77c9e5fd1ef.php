<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_dca60e7fc176b56a237878e80782b83600435fbb87af0855a0b190d9623e60ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_935e1f677116dff05683fa56865d4965c22d077c2cf0cc655e678b85d2734e69 = $this->env->getExtension("native_profiler");
        $__internal_935e1f677116dff05683fa56865d4965c22d077c2cf0cc655e678b85d2734e69->enter($__internal_935e1f677116dff05683fa56865d4965c22d077c2cf0cc655e678b85d2734e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935e1f677116dff05683fa56865d4965c22d077c2cf0cc655e678b85d2734e69->leave($__internal_935e1f677116dff05683fa56865d4965c22d077c2cf0cc655e678b85d2734e69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f1378a254a2b81364f412a3ff65ecc2592ac8d512dc0a862bda0f154b038a1c = $this->env->getExtension("native_profiler");
        $__internal_6f1378a254a2b81364f412a3ff65ecc2592ac8d512dc0a862bda0f154b038a1c->enter($__internal_6f1378a254a2b81364f412a3ff65ecc2592ac8d512dc0a862bda0f154b038a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6f1378a254a2b81364f412a3ff65ecc2592ac8d512dc0a862bda0f154b038a1c->leave($__internal_6f1378a254a2b81364f412a3ff65ecc2592ac8d512dc0a862bda0f154b038a1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
