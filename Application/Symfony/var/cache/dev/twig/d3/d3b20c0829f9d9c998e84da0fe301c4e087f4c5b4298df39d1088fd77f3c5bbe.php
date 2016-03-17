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
        $__internal_259d2b6b6930a1e277d410332343469dd7866e5e1ae5615145dcca1f36ea7b16 = $this->env->getExtension("native_profiler");
        $__internal_259d2b6b6930a1e277d410332343469dd7866e5e1ae5615145dcca1f36ea7b16->enter($__internal_259d2b6b6930a1e277d410332343469dd7866e5e1ae5615145dcca1f36ea7b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259d2b6b6930a1e277d410332343469dd7866e5e1ae5615145dcca1f36ea7b16->leave($__internal_259d2b6b6930a1e277d410332343469dd7866e5e1ae5615145dcca1f36ea7b16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be42e3eff94e9d690f69c879fb5bfaa040cd7808b67e1508f362e52e199e77fb = $this->env->getExtension("native_profiler");
        $__internal_be42e3eff94e9d690f69c879fb5bfaa040cd7808b67e1508f362e52e199e77fb->enter($__internal_be42e3eff94e9d690f69c879fb5bfaa040cd7808b67e1508f362e52e199e77fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_be42e3eff94e9d690f69c879fb5bfaa040cd7808b67e1508f362e52e199e77fb->leave($__internal_be42e3eff94e9d690f69c879fb5bfaa040cd7808b67e1508f362e52e199e77fb_prof);

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
