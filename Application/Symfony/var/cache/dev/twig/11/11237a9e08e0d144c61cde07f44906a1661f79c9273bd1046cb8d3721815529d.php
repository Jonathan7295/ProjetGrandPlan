<?php

/* @ModuleGestion/Default/index.html.twig */
class __TwigTemplate_45abae5fb115e10fc02c6b69441a60eade6ff896a537e922e400aeb33eff6019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@ModuleGestion/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac41e8cd759348f1150b3df41f22b5baf0192616c84fc9f3e2f9d4c7fc4c4065 = $this->env->getExtension("native_profiler");
        $__internal_ac41e8cd759348f1150b3df41f22b5baf0192616c84fc9f3e2f9d4c7fc4c4065->enter($__internal_ac41e8cd759348f1150b3df41f22b5baf0192616c84fc9f3e2f9d4c7fc4c4065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ModuleGestion/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac41e8cd759348f1150b3df41f22b5baf0192616c84fc9f3e2f9d4c7fc4c4065->leave($__internal_ac41e8cd759348f1150b3df41f22b5baf0192616c84fc9f3e2f9d4c7fc4c4065_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd6caf54a2b29dd8cc3fe33adfd17aa4769336a7a9cddab7cf786000dbfd8703 = $this->env->getExtension("native_profiler");
        $__internal_fd6caf54a2b29dd8cc3fe33adfd17aa4769336a7a9cddab7cf786000dbfd8703->enter($__internal_fd6caf54a2b29dd8cc3fe33adfd17aa4769336a7a9cddab7cf786000dbfd8703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "\t    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t    <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t    </a>
\t";
        } else {
            // line 10
            echo "\t    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t";
        }
        // line 12
        echo "
\tHello World!
";
        
        $__internal_fd6caf54a2b29dd8cc3fe33adfd17aa4769336a7a9cddab7cf786000dbfd8703->leave($__internal_fd6caf54a2b29dd8cc3fe33adfd17aa4769336a7a9cddab7cf786000dbfd8703_prof);

    }

    public function getTemplateName()
    {
        return "@ModuleGestion/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  58 => 10,  52 => 7,  48 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 	    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/* 	    <a href="{{ path('fos_user_security_logout') }}">*/
/* 	        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/* 	    </a>*/
/* 	{% else %}*/
/* 	    <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/* 	{% endif %}*/
/* */
/* 	Hello World!*/
/* {% endblock %}*/
/* */
