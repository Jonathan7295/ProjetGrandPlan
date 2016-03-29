<?php

/* ModuleGestionBundle:Default:index.html.twig */
class __TwigTemplate_d09c6688e9e47d775f506f7e5c041350b24dc3a70229d7e3b76a867c6b3cac6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "ModuleGestionBundle:Default:index.html.twig", 1);
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
        $__internal_ad1d0edca39609a69321502722c3c77a7021025eacc031d436dfa92d9459bb18 = $this->env->getExtension("native_profiler");
        $__internal_ad1d0edca39609a69321502722c3c77a7021025eacc031d436dfa92d9459bb18->enter($__internal_ad1d0edca39609a69321502722c3c77a7021025eacc031d436dfa92d9459bb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModuleGestionBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1d0edca39609a69321502722c3c77a7021025eacc031d436dfa92d9459bb18->leave($__internal_ad1d0edca39609a69321502722c3c77a7021025eacc031d436dfa92d9459bb18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08bafea6be5083fbda0819f54ad469e9b03f50a64ec42473f124576e57eceee9 = $this->env->getExtension("native_profiler");
        $__internal_08bafea6be5083fbda0819f54ad469e9b03f50a64ec42473f124576e57eceee9->enter($__internal_08bafea6be5083fbda0819f54ad469e9b03f50a64ec42473f124576e57eceee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08bafea6be5083fbda0819f54ad469e9b03f50a64ec42473f124576e57eceee9->leave($__internal_08bafea6be5083fbda0819f54ad469e9b03f50a64ec42473f124576e57eceee9_prof);

    }

    public function getTemplateName()
    {
        return "ModuleGestionBundle:Default:index.html.twig";
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
