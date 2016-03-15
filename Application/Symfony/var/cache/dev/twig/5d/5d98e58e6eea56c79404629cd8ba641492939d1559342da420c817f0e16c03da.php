<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_f27282ee8d7550b9cd84c78e7067de8691d15f6da6c4eff14b6c051e2f731ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_31b599e9c74fc2da77b818beef29e454b4d26c0e164e4bb5dbeea57377b976c0 = $this->env->getExtension("native_profiler");
        $__internal_31b599e9c74fc2da77b818beef29e454b4d26c0e164e4bb5dbeea57377b976c0->enter($__internal_31b599e9c74fc2da77b818beef29e454b4d26c0e164e4bb5dbeea57377b976c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b599e9c74fc2da77b818beef29e454b4d26c0e164e4bb5dbeea57377b976c0->leave($__internal_31b599e9c74fc2da77b818beef29e454b4d26c0e164e4bb5dbeea57377b976c0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5688cd3eba6c2c022aa161c2352436e90795c59541798f72e2d93d138852f058 = $this->env->getExtension("native_profiler");
        $__internal_5688cd3eba6c2c022aa161c2352436e90795c59541798f72e2d93d138852f058->enter($__internal_5688cd3eba6c2c022aa161c2352436e90795c59541798f72e2d93d138852f058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5688cd3eba6c2c022aa161c2352436e90795c59541798f72e2d93d138852f058->leave($__internal_5688cd3eba6c2c022aa161c2352436e90795c59541798f72e2d93d138852f058_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
