<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d3e7af46b71c2118a96568df01932e2b85dc17414b69616a0cdc134448c670dc extends Twig_Template
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
        $__internal_ad9d6c1db3f1a85d5e07c14b632f3803efc39cb588d909c77abcb2b4fdbb0518 = $this->env->getExtension("native_profiler");
        $__internal_ad9d6c1db3f1a85d5e07c14b632f3803efc39cb588d909c77abcb2b4fdbb0518->enter($__internal_ad9d6c1db3f1a85d5e07c14b632f3803efc39cb588d909c77abcb2b4fdbb0518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_ad9d6c1db3f1a85d5e07c14b632f3803efc39cb588d909c77abcb2b4fdbb0518->leave($__internal_ad9d6c1db3f1a85d5e07c14b632f3803efc39cb588d909c77abcb2b4fdbb0518_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
