<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ebaa3901eb9d2ac02997fb4feca768780acd7ea7ea279120a1c27406286397c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_5e04b1ebd738e73ffd5b014443db4c572baf6e9b3a66c0e2c7beada93a354228 = $this->env->getExtension("native_profiler");
        $__internal_5e04b1ebd738e73ffd5b014443db4c572baf6e9b3a66c0e2c7beada93a354228->enter($__internal_5e04b1ebd738e73ffd5b014443db4c572baf6e9b3a66c0e2c7beada93a354228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e04b1ebd738e73ffd5b014443db4c572baf6e9b3a66c0e2c7beada93a354228->leave($__internal_5e04b1ebd738e73ffd5b014443db4c572baf6e9b3a66c0e2c7beada93a354228_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f57fbff79c8b509e04b35e5a3cfbcaadf449a3a386792e2994795d10037d8f80 = $this->env->getExtension("native_profiler");
        $__internal_f57fbff79c8b509e04b35e5a3cfbcaadf449a3a386792e2994795d10037d8f80->enter($__internal_f57fbff79c8b509e04b35e5a3cfbcaadf449a3a386792e2994795d10037d8f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f57fbff79c8b509e04b35e5a3cfbcaadf449a3a386792e2994795d10037d8f80->leave($__internal_f57fbff79c8b509e04b35e5a3cfbcaadf449a3a386792e2994795d10037d8f80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
