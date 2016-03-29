<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5616e10d5097e233934200077fb583d0dbdfe2e7fc7a1019deef0d3ed20fde5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_e51b40301743f232198be4e88643c4fd591e02bd8c9943da6027862ba749e56b = $this->env->getExtension("native_profiler");
        $__internal_e51b40301743f232198be4e88643c4fd591e02bd8c9943da6027862ba749e56b->enter($__internal_e51b40301743f232198be4e88643c4fd591e02bd8c9943da6027862ba749e56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51b40301743f232198be4e88643c4fd591e02bd8c9943da6027862ba749e56b->leave($__internal_e51b40301743f232198be4e88643c4fd591e02bd8c9943da6027862ba749e56b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb356e981ec8a9b4b3efc5369ab719000e93dfa21187d76cf33f205fe5c82247 = $this->env->getExtension("native_profiler");
        $__internal_fb356e981ec8a9b4b3efc5369ab719000e93dfa21187d76cf33f205fe5c82247->enter($__internal_fb356e981ec8a9b4b3efc5369ab719000e93dfa21187d76cf33f205fe5c82247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fb356e981ec8a9b4b3efc5369ab719000e93dfa21187d76cf33f205fe5c82247->leave($__internal_fb356e981ec8a9b4b3efc5369ab719000e93dfa21187d76cf33f205fe5c82247_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
