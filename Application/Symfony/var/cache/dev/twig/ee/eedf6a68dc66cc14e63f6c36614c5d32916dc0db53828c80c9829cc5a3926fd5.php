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
        $__internal_cf0267aa7989935a7b17a2a7024be6da194b04a1b07b44fb07dea560a2ec31f4 = $this->env->getExtension("native_profiler");
        $__internal_cf0267aa7989935a7b17a2a7024be6da194b04a1b07b44fb07dea560a2ec31f4->enter($__internal_cf0267aa7989935a7b17a2a7024be6da194b04a1b07b44fb07dea560a2ec31f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf0267aa7989935a7b17a2a7024be6da194b04a1b07b44fb07dea560a2ec31f4->leave($__internal_cf0267aa7989935a7b17a2a7024be6da194b04a1b07b44fb07dea560a2ec31f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdc45ac9b44090f4179647882d582b65473e4837d9f7cb9b45d34ccc58bfefe2 = $this->env->getExtension("native_profiler");
        $__internal_bdc45ac9b44090f4179647882d582b65473e4837d9f7cb9b45d34ccc58bfefe2->enter($__internal_bdc45ac9b44090f4179647882d582b65473e4837d9f7cb9b45d34ccc58bfefe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bdc45ac9b44090f4179647882d582b65473e4837d9f7cb9b45d34ccc58bfefe2->leave($__internal_bdc45ac9b44090f4179647882d582b65473e4837d9f7cb9b45d34ccc58bfefe2_prof);

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
