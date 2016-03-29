<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0e60ea81dcf217d9fd70b5e737e760c3acab87959ffaeeecb075f0e64fd3966c extends Twig_Template
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
        $__internal_8d4ad14977a626f410f552ca0791b7b636852da1e1832a9838220c37e7b55563 = $this->env->getExtension("native_profiler");
        $__internal_8d4ad14977a626f410f552ca0791b7b636852da1e1832a9838220c37e7b55563->enter($__internal_8d4ad14977a626f410f552ca0791b7b636852da1e1832a9838220c37e7b55563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4ad14977a626f410f552ca0791b7b636852da1e1832a9838220c37e7b55563->leave($__internal_8d4ad14977a626f410f552ca0791b7b636852da1e1832a9838220c37e7b55563_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c76fa247c193a7516c706b053ea6efb323829172750b684c254c2b63aaeccff = $this->env->getExtension("native_profiler");
        $__internal_4c76fa247c193a7516c706b053ea6efb323829172750b684c254c2b63aaeccff->enter($__internal_4c76fa247c193a7516c706b053ea6efb323829172750b684c254c2b63aaeccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4c76fa247c193a7516c706b053ea6efb323829172750b684c254c2b63aaeccff->leave($__internal_4c76fa247c193a7516c706b053ea6efb323829172750b684c254c2b63aaeccff_prof);

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
