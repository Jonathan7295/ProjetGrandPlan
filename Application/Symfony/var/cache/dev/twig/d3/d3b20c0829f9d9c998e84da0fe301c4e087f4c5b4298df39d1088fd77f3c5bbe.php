<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_6ddb83a1e68a53917674c5d38573dc4a829b9f4c3169e0dfad0dd87efd2a6efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_7d5ffa0de4ba8125a9d3e2b26efb5b0cc59af5942c2e0e5b31657e8db53ad9cc = $this->env->getExtension("native_profiler");
        $__internal_7d5ffa0de4ba8125a9d3e2b26efb5b0cc59af5942c2e0e5b31657e8db53ad9cc->enter($__internal_7d5ffa0de4ba8125a9d3e2b26efb5b0cc59af5942c2e0e5b31657e8db53ad9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5ffa0de4ba8125a9d3e2b26efb5b0cc59af5942c2e0e5b31657e8db53ad9cc->leave($__internal_7d5ffa0de4ba8125a9d3e2b26efb5b0cc59af5942c2e0e5b31657e8db53ad9cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c768a417f62b7de9fdfedfcea912ef2fc655cd6a9ed305c3d525ffa9ee0dbc77 = $this->env->getExtension("native_profiler");
        $__internal_c768a417f62b7de9fdfedfcea912ef2fc655cd6a9ed305c3d525ffa9ee0dbc77->enter($__internal_c768a417f62b7de9fdfedfcea912ef2fc655cd6a9ed305c3d525ffa9ee0dbc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c768a417f62b7de9fdfedfcea912ef2fc655cd6a9ed305c3d525ffa9ee0dbc77->leave($__internal_c768a417f62b7de9fdfedfcea912ef2fc655cd6a9ed305c3d525ffa9ee0dbc77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
