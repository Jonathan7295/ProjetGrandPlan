<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_5d80df271f83390a24bc54cc8c347ddede76b9f6e9456668f941b4759700349e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_49581dccdf52acc1d2787d9d8db4240c6f687e9061525df912640c499bc598bc = $this->env->getExtension("native_profiler");
        $__internal_49581dccdf52acc1d2787d9d8db4240c6f687e9061525df912640c499bc598bc->enter($__internal_49581dccdf52acc1d2787d9d8db4240c6f687e9061525df912640c499bc598bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49581dccdf52acc1d2787d9d8db4240c6f687e9061525df912640c499bc598bc->leave($__internal_49581dccdf52acc1d2787d9d8db4240c6f687e9061525df912640c499bc598bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af4be31cea530f2ed9c2f6cd0f07b64a51eaae171df08e352e285e1fdb7edd83 = $this->env->getExtension("native_profiler");
        $__internal_af4be31cea530f2ed9c2f6cd0f07b64a51eaae171df08e352e285e1fdb7edd83->enter($__internal_af4be31cea530f2ed9c2f6cd0f07b64a51eaae171df08e352e285e1fdb7edd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_af4be31cea530f2ed9c2f6cd0f07b64a51eaae171df08e352e285e1fdb7edd83->leave($__internal_af4be31cea530f2ed9c2f6cd0f07b64a51eaae171df08e352e285e1fdb7edd83_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
