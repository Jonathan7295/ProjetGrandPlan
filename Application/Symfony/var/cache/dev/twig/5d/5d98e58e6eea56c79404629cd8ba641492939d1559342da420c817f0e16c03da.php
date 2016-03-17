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
        $__internal_ad1ce6ad196497d46f558c00c6760aedab9273d23f75c8f2cd146d41bbb5a37b = $this->env->getExtension("native_profiler");
        $__internal_ad1ce6ad196497d46f558c00c6760aedab9273d23f75c8f2cd146d41bbb5a37b->enter($__internal_ad1ce6ad196497d46f558c00c6760aedab9273d23f75c8f2cd146d41bbb5a37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1ce6ad196497d46f558c00c6760aedab9273d23f75c8f2cd146d41bbb5a37b->leave($__internal_ad1ce6ad196497d46f558c00c6760aedab9273d23f75c8f2cd146d41bbb5a37b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53ca9a9fa30b40017b35281d2f46db10b5ca9accd0b5a147822a8dd6e75f5b0c = $this->env->getExtension("native_profiler");
        $__internal_53ca9a9fa30b40017b35281d2f46db10b5ca9accd0b5a147822a8dd6e75f5b0c->enter($__internal_53ca9a9fa30b40017b35281d2f46db10b5ca9accd0b5a147822a8dd6e75f5b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_53ca9a9fa30b40017b35281d2f46db10b5ca9accd0b5a147822a8dd6e75f5b0c->leave($__internal_53ca9a9fa30b40017b35281d2f46db10b5ca9accd0b5a147822a8dd6e75f5b0c_prof);

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
