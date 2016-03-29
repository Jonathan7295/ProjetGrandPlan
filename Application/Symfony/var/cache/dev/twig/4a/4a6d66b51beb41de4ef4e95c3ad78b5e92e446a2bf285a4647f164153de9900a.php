<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2dc2dcd76cbde6060a47919b8fbcbb791c88dfb3b8d21bdb6bde0f6e44f3d40f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8337ff427b0bce503be63320b9fc455750a5080d553b2608c8c7b7181e00ef67 = $this->env->getExtension("native_profiler");
        $__internal_8337ff427b0bce503be63320b9fc455750a5080d553b2608c8c7b7181e00ef67->enter($__internal_8337ff427b0bce503be63320b9fc455750a5080d553b2608c8c7b7181e00ef67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8337ff427b0bce503be63320b9fc455750a5080d553b2608c8c7b7181e00ef67->leave($__internal_8337ff427b0bce503be63320b9fc455750a5080d553b2608c8c7b7181e00ef67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12c32d8d4745a2edf0ddebdc56826296c45f1ef12bd964200a1295b853285b22 = $this->env->getExtension("native_profiler");
        $__internal_12c32d8d4745a2edf0ddebdc56826296c45f1ef12bd964200a1295b853285b22->enter($__internal_12c32d8d4745a2edf0ddebdc56826296c45f1ef12bd964200a1295b853285b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_12c32d8d4745a2edf0ddebdc56826296c45f1ef12bd964200a1295b853285b22->leave($__internal_12c32d8d4745a2edf0ddebdc56826296c45f1ef12bd964200a1295b853285b22_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
