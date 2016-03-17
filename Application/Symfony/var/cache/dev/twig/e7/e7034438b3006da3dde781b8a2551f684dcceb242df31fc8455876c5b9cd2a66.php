<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fb88c8316be27346c9e81d37ed5f1b3c4f0ed407cf7b7db6f8bda9c854c9cbec extends Twig_Template
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
        $__internal_d1ffcc2ba619895461600347e1817f67cf9b1fcd71f9eb3e53cb5170be7d4115 = $this->env->getExtension("native_profiler");
        $__internal_d1ffcc2ba619895461600347e1817f67cf9b1fcd71f9eb3e53cb5170be7d4115->enter($__internal_d1ffcc2ba619895461600347e1817f67cf9b1fcd71f9eb3e53cb5170be7d4115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ffcc2ba619895461600347e1817f67cf9b1fcd71f9eb3e53cb5170be7d4115->leave($__internal_d1ffcc2ba619895461600347e1817f67cf9b1fcd71f9eb3e53cb5170be7d4115_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_884890bd3a0df8cd1fb3d965c27445c2dbae53ef203696b1e96697362f7b0953 = $this->env->getExtension("native_profiler");
        $__internal_884890bd3a0df8cd1fb3d965c27445c2dbae53ef203696b1e96697362f7b0953->enter($__internal_884890bd3a0df8cd1fb3d965c27445c2dbae53ef203696b1e96697362f7b0953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_884890bd3a0df8cd1fb3d965c27445c2dbae53ef203696b1e96697362f7b0953->leave($__internal_884890bd3a0df8cd1fb3d965c27445c2dbae53ef203696b1e96697362f7b0953_prof);

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
