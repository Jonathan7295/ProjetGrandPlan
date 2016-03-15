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
        $__internal_deae76b4083cc3eb0288e1b8022c9c1e3ca693ebb75e6826a328cd1df361a21e = $this->env->getExtension("native_profiler");
        $__internal_deae76b4083cc3eb0288e1b8022c9c1e3ca693ebb75e6826a328cd1df361a21e->enter($__internal_deae76b4083cc3eb0288e1b8022c9c1e3ca693ebb75e6826a328cd1df361a21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deae76b4083cc3eb0288e1b8022c9c1e3ca693ebb75e6826a328cd1df361a21e->leave($__internal_deae76b4083cc3eb0288e1b8022c9c1e3ca693ebb75e6826a328cd1df361a21e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdbe3982c2bb4aa4f3613d1ceae495fd7073d1d2599c5eac695d13fc01cbaa5c = $this->env->getExtension("native_profiler");
        $__internal_cdbe3982c2bb4aa4f3613d1ceae495fd7073d1d2599c5eac695d13fc01cbaa5c->enter($__internal_cdbe3982c2bb4aa4f3613d1ceae495fd7073d1d2599c5eac695d13fc01cbaa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cdbe3982c2bb4aa4f3613d1ceae495fd7073d1d2599c5eac695d13fc01cbaa5c->leave($__internal_cdbe3982c2bb4aa4f3613d1ceae495fd7073d1d2599c5eac695d13fc01cbaa5c_prof);

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
