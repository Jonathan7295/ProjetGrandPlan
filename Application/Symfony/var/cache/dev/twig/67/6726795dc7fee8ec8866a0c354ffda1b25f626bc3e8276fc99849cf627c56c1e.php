<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ebaa3901eb9d2ac02997fb4feca768780acd7ea7ea279120a1c27406286397c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_884bfd4e2ea7f1955f84ae1ba49386277b5d981e3114fd5231b02533ad63ee5e = $this->env->getExtension("native_profiler");
        $__internal_884bfd4e2ea7f1955f84ae1ba49386277b5d981e3114fd5231b02533ad63ee5e->enter($__internal_884bfd4e2ea7f1955f84ae1ba49386277b5d981e3114fd5231b02533ad63ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884bfd4e2ea7f1955f84ae1ba49386277b5d981e3114fd5231b02533ad63ee5e->leave($__internal_884bfd4e2ea7f1955f84ae1ba49386277b5d981e3114fd5231b02533ad63ee5e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4dbc8c4cd6376f0264f4c373a4b52e5492bcd784e9cbc50f5100a6ee7af5929 = $this->env->getExtension("native_profiler");
        $__internal_c4dbc8c4cd6376f0264f4c373a4b52e5492bcd784e9cbc50f5100a6ee7af5929->enter($__internal_c4dbc8c4cd6376f0264f4c373a4b52e5492bcd784e9cbc50f5100a6ee7af5929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c4dbc8c4cd6376f0264f4c373a4b52e5492bcd784e9cbc50f5100a6ee7af5929->leave($__internal_c4dbc8c4cd6376f0264f4c373a4b52e5492bcd784e9cbc50f5100a6ee7af5929_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
