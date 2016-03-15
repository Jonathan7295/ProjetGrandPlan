<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_4e0ce6558090d11ecc8fa18696081d7c86269621a33f0d96be00892d8ccbc7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_2740c83a65ed4db94d6b64d8de30b77b0635a6cbbf24d8ea7801788070133aea = $this->env->getExtension("native_profiler");
        $__internal_2740c83a65ed4db94d6b64d8de30b77b0635a6cbbf24d8ea7801788070133aea->enter($__internal_2740c83a65ed4db94d6b64d8de30b77b0635a6cbbf24d8ea7801788070133aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2740c83a65ed4db94d6b64d8de30b77b0635a6cbbf24d8ea7801788070133aea->leave($__internal_2740c83a65ed4db94d6b64d8de30b77b0635a6cbbf24d8ea7801788070133aea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f87b468c5d9ff3e8e7a4647149aa58758a0264a08aac04fd0ac696185bcdd499 = $this->env->getExtension("native_profiler");
        $__internal_f87b468c5d9ff3e8e7a4647149aa58758a0264a08aac04fd0ac696185bcdd499->enter($__internal_f87b468c5d9ff3e8e7a4647149aa58758a0264a08aac04fd0ac696185bcdd499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f87b468c5d9ff3e8e7a4647149aa58758a0264a08aac04fd0ac696185bcdd499->leave($__internal_f87b468c5d9ff3e8e7a4647149aa58758a0264a08aac04fd0ac696185bcdd499_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
