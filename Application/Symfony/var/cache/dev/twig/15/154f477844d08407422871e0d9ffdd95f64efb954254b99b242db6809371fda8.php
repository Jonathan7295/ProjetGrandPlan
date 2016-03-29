<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_ba0f3da5f0c95e56b4041a7fb41bab59d8b69fb3a1be1009ac724be76d2dfdd3 extends Twig_Template
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
        $__internal_cf3f76be9eaf456d10a65ce93b2ff7c2ee344dc0bcb42c2edb9b5521135f8c48 = $this->env->getExtension("native_profiler");
        $__internal_cf3f76be9eaf456d10a65ce93b2ff7c2ee344dc0bcb42c2edb9b5521135f8c48->enter($__internal_cf3f76be9eaf456d10a65ce93b2ff7c2ee344dc0bcb42c2edb9b5521135f8c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3f76be9eaf456d10a65ce93b2ff7c2ee344dc0bcb42c2edb9b5521135f8c48->leave($__internal_cf3f76be9eaf456d10a65ce93b2ff7c2ee344dc0bcb42c2edb9b5521135f8c48_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2bfd0f91c6b311842c578b5132520f5c0dbfe6ff0a3d481b0954954af09b26b = $this->env->getExtension("native_profiler");
        $__internal_b2bfd0f91c6b311842c578b5132520f5c0dbfe6ff0a3d481b0954954af09b26b->enter($__internal_b2bfd0f91c6b311842c578b5132520f5c0dbfe6ff0a3d481b0954954af09b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b2bfd0f91c6b311842c578b5132520f5c0dbfe6ff0a3d481b0954954af09b26b->leave($__internal_b2bfd0f91c6b311842c578b5132520f5c0dbfe6ff0a3d481b0954954af09b26b_prof);

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
