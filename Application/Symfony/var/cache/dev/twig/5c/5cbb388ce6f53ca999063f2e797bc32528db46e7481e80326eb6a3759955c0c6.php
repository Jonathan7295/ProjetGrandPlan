<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_36cf2b2f809741c308e5335de1e313cb9456f0508d3ca67a1ce7a4d27a59a850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba00df0c33233bfe13b66d49bf8a65130ab264866302ce7968207ed8e0dd3fe6 = $this->env->getExtension("native_profiler");
        $__internal_ba00df0c33233bfe13b66d49bf8a65130ab264866302ce7968207ed8e0dd3fe6->enter($__internal_ba00df0c33233bfe13b66d49bf8a65130ab264866302ce7968207ed8e0dd3fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ba00df0c33233bfe13b66d49bf8a65130ab264866302ce7968207ed8e0dd3fe6->leave($__internal_ba00df0c33233bfe13b66d49bf8a65130ab264866302ce7968207ed8e0dd3fe6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
