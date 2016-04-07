<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_dde2c059d256fbc82122c77de5798c4f857bed44d114f655ad54f6a2867ad129 extends Twig_Template
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
        $__internal_8ad09ed75f9f9ba949404933753b6621fcfcd3480b40d5bb50960954c11a81bb = $this->env->getExtension("native_profiler");
        $__internal_8ad09ed75f9f9ba949404933753b6621fcfcd3480b40d5bb50960954c11a81bb->enter($__internal_8ad09ed75f9f9ba949404933753b6621fcfcd3480b40d5bb50960954c11a81bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ad09ed75f9f9ba949404933753b6621fcfcd3480b40d5bb50960954c11a81bb->leave($__internal_8ad09ed75f9f9ba949404933753b6621fcfcd3480b40d5bb50960954c11a81bb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc8ac5c5cf3875ccadf579cace217b07271967ce79957c8c8f814fcfea884f84 = $this->env->getExtension("native_profiler");
        $__internal_bc8ac5c5cf3875ccadf579cace217b07271967ce79957c8c8f814fcfea884f84->enter($__internal_bc8ac5c5cf3875ccadf579cace217b07271967ce79957c8c8f814fcfea884f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bc8ac5c5cf3875ccadf579cace217b07271967ce79957c8c8f814fcfea884f84->leave($__internal_bc8ac5c5cf3875ccadf579cace217b07271967ce79957c8c8f814fcfea884f84_prof);

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
