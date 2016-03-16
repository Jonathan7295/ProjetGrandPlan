<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1fc98f877075eb1fc778a8268c58eb52f4a5a859d21ce30d08fb1b63e60ce4ec extends Twig_Template
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
        $__internal_0fb584227b7a78f1085573c3c6cb0de3999e04522312c9115f3d4af4197c337e = $this->env->getExtension("native_profiler");
        $__internal_0fb584227b7a78f1085573c3c6cb0de3999e04522312c9115f3d4af4197c337e->enter($__internal_0fb584227b7a78f1085573c3c6cb0de3999e04522312c9115f3d4af4197c337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb584227b7a78f1085573c3c6cb0de3999e04522312c9115f3d4af4197c337e->leave($__internal_0fb584227b7a78f1085573c3c6cb0de3999e04522312c9115f3d4af4197c337e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07976a7f9c02f317fe1a108ff9c88bedfa39aad387408028e8903c0b711e0ef4 = $this->env->getExtension("native_profiler");
        $__internal_07976a7f9c02f317fe1a108ff9c88bedfa39aad387408028e8903c0b711e0ef4->enter($__internal_07976a7f9c02f317fe1a108ff9c88bedfa39aad387408028e8903c0b711e0ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_07976a7f9c02f317fe1a108ff9c88bedfa39aad387408028e8903c0b711e0ef4->leave($__internal_07976a7f9c02f317fe1a108ff9c88bedfa39aad387408028e8903c0b711e0ef4_prof);

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
